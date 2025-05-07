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
            <div class="griditem-block-header">
              <k-input
                v-bind="field('title')"
                :value="content.title"
                @input="update({ title: $event })">
              </k-input>
              <k-input
                v-bind="field('category')"
                :value="content.category"
                @input="update({ category: $event })">
              </k-input>
            </div>
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
  }
});