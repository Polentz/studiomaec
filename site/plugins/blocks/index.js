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
            <div v-if="!images.url" class="block--empty"> 
              <p>Double click here to</p>
              <p>add an element</p>
            </div>
            <k-frame v-if="images.url"
              cover="true"
              ratio="4/3"
            >
              <img
                v-if="images.url"
                :src="images.url"
              >
            </k-frame>
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
              <p>Double click here to</p>
              <p>add an image or a video</p>
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
              <k-writer style="outline: solid 1px var(--input-color-border);"
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
            <p>Double click here to</p>
            <p>add some text</p>
          </div>
          <div v-if="content.text" class="text">
            <k-writer
              v-bind="field('text')"
              :nodes="false"
              :value="content.text"
              @input="update({ text: $event })">
            </k-writer>
          </div>
        </div>
      `
    },
    summaryitem: {
      template: `
        <div class="summary-block">
          <div v-if="content.title" class="text-title">
            <k-input style="font-weight: 700;"
                v-bind="field('title')"
                :value="content.title"
                @input="update({ title: $event })">
            </k-input>
          </div>
          <div v-if="content.text" class="text">
            <k-writer style="outline: solid 1px var(--input-color-border);"
              v-bind="field('text')"
              :inline="true"
              :nodes="false"
              :value="content.text"
              @input="update({ text: $event })">
            </k-writer>
          </div>
        </div>
      `
    },
  }
});