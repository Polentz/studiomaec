panel.plugin("studiomaec/blocks", {
  blocks: {
    griditem: {
      computed: {
        images() {
          return this.content.images[0] || {};
        },
      },
      template: `
          <div @dblclick="open" class="griditem-block">
            <k-aspect-ratio
              class="griditem-block-image"
              cover="true"
              ratio="4/3"
            >
              <img
                v-if="images.url"
                :src="images.url"
                alt=""
              >
            </k-aspect-ratio>
          </div>
        `
    },
    galleryitem: {
      computed: {
        images() {
          return this.content.images[0] || {};
        },
      },
      template: `
          <div @dblclick="open" class="gallery-block">
            <div v-if="!images.url" class="block--empty"> 
              <p>Add an image or a video</p>
            </div>
            <k-frame v-if="images.type === 'image'"
              cover="true"
              ratio="4/3"
            >
              <img
                v-if="images.url"
                :src="images.url"
              >
            </k-frame>
            <k-frame v-if="images.type === 'video'" 
              cover="true"
              ratio="4/3"
            >
              <video autoplay loop muted
                :src="images.url"
              />
            </k-frame>
            <div class="caption">
              <k-writer
                v-bind="field('caption')"
                :nodes="false"
                :value="content.caption"
                @input="update({ caption: $event })">
              </k-writer>
            </div>
          </div>
        `
    },
    textitem: {
      template: `
        <div @dblclick="open" class="text-block">
          <div v-if="!content.text" class="block--empty"> 
            <p>(Empty)</p>
          </div>
          <div v-if="content.text" class="text-block">
            <k-writer
              v-bind="field('text')"
              :nodes="false"
              :value="content.text"
              @input="update({ text: $event })">
            </k-writer>
          </div>
        </div>
      `
    }
  }
});