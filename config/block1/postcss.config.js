module.exports = {
  plugins: {
		cssnano: {
			preset: 'default',
		},
		'postcss-import': {},
		tailwindcss: { config: './config/block1/tailwind.config.js' },
		//tailwindcss: {},
    autoprefixer: {},
  },
}
