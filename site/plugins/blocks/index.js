panel.plugin("studiomaec/blocks", {
  blocks: {
    griditem: {
      computed: {
        image() {
          return this.content.images[0] || {};
        },
      },
      template: `
        <k-input
          v-bind="field('title')"
          :value="content.title"
          @input="update({ title: $event })">
        </k-input>
        <div v-for="image in content.images" :key="image.id">
          <k-image-frame
            :ratio="ratio"
            :src="image.url"
            :srcset="image.image.srcset"
          />
        </div>
      `
    },
  }
});