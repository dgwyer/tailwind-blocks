module.exports = {
  plugins: {
		cssnano: {
			preset: 'default',
		},
		'postcss-import': {},
		tailwindcss: { config: './config/block2/tailwind.config.js' },
		//tailwindcss: {},
    autoprefixer: {},
  },
}
