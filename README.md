# *** Update ***
This method of integrating Tailwind CSS works but a better method is to integrate Tailwind directly into the build process when creating a block using `npx @wordpress/create-block test`. More details soon.

# Tailwind Blocks (legacy)

Example plugin demonstrating how to integrate Tailwind with the [@wordpress/create-block](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/) script.

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

![image](https://user-images.githubusercontent.com/1482075/158453816-a4c42794-92ee-42aa-bdee-aaecb89d7a7f.png)

Change the source code in any block. e.g. `./src/block1/edit.js` and add Tailwind classes. If you're in development mode then the plugin will recompile JS and CSS including Tailwind styles. Simply refresh the browser to view updates.
