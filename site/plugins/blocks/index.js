panel.plugin("studiomaec/blocks", {
  blocks: {
    griditem: {
      computed: {
        images() {
          return this.content.images[0] || {};
        },
        isVideo() {
          if (!this.images?.url) return false

          const videoExtensions = ['mp4', 'webm', 'ogg']
          const ext = this.images.url.split('.').pop().toLowerCase()

          return videoExtensions.includes(ext)
        }
      },
      template: `
          <div @dblclick="open" class="griditem-block">
            <div v-if="!images.url" class="block--empty"> 
              <p>Double click here to</p>
              <p>add an element</p>
            </div>
            <k-frame
              v-else
              cover="true"
              ratio="4/3"
            >
              <video v-if="isVideo"
                :src="images.url"
                autoplay
                muted
                loop
                playsinline
              ></video>

              <img v-else
                :src="images.url"
              >
            </k-frame>
          </div>
        `
    },
    galleryblock: {
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
              <k-writer-input style="outline: solid 1px var(--input-color-border);"
                v-bind="field('caption')"
                :nodes="false"
                :value="content.caption"
                @input="update({ caption: $event })">
              </k-writer-input>
            </div>
          </div>
        `
    },
    introblock: {
      template: `
      <div class="block">
        <div class="intro-text text-large">
          <k-writer-input
            v-bind="field('description')"
            :value="content.description"
            @input="update({ description: $event })">
          </k-writer-input>
        </div>
        <div class="additional-text-wrapper">
          <div v-if="content.text" class="simulate-button">
            more info (+)
          </div>
          <div class="additional-text text-medium">
              <k-writer-input
                v-bind="field('text')"
                :value="content.text"
                @input="update({ text: $event })">
              </k-writer-input>
          </div>
        </div>
      </div>
      `
    },
    galleryblock: {
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
              <k-writer-input style="outline: solid 1px var(--input-color-border);"
                v-bind="field('caption')"
                :nodes="false"
                :value="content.caption"
                @input="update({ caption: $event })">
              </k-writer-input>
            </div>
          </div>
        `
    },
    textblock: {
      template: `
          <div class="text">
            <k-writer-input
              v-bind="field('text')"
              :nodes="false"
              :value="content.text"
              @input="update({ text: $event })">
            </k-writer-input>
          </div>
      `
    },
    // summaryitem: {
    //   template: `
    //     <div class="summary-block">
    //       <div v-if="content.title" class="text-title">
    //         <k-input style="font-weight: 700;"
    //             v-bind="field('title')"
    //             :value="content.title"
    //             @input="update({ title: $event })">
    //         </k-input>
    //       </div>
    //       <div v-if="content.text" class="text">
    //         <k-writer-input style="outline: solid 1px var(--input-color-border);"
    //           v-bind="field('text')"
    //           :inline="true"
    //           :nodes="false"
    //           :value="content.text"
    //           @input="update({ text: $event })">
    //         </k-writer-input>
    //       </div>
    //     </div>
    //   `
    // },
  }
});