# Tailwind Blocks

Example plugin demonstrating how to integrate Tailwind with the [`@wordpress/create-block`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/) script. The plugin was scaffolded using `@wordpress/create-block` and then Tailwind was manually integrated.

**Coming soon!** Work has started on a custom template for `@wordpress/create-block` that will create a full block plugin with multiple blocks, each one seamlessly integrated with Tailwind right out of the box.

## Usage

Clone the repository and install npm packages.

```
git clone https://github.com/dgwyer/tailwind-blocks.git
cd tailwind-blocks
npm i
```

Start the build process in development or do a production build.

`npm start` or `npm run build`

Add the plugin to the `/wp-content/plugins/` folder of your local WordPress site and activate as normal.

Create a new page and add any of the three example blocks included with the plugin to the editor.

![image](https://user-images.githubusercontent.com/1482075/159683070-8cbba50f-271e-4a30-aa2d-0a99f8d64e5d.png)

Change the source code in any block. e.g. `./src/block1/edit.js` and add Tailwind classes. If you're in development mode then the plugin will automatically recompile JS and CSS including Tailwind styles. Simply refresh the browser to view updates.
