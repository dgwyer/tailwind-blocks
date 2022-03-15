module.exports = {
  plugins: {
		cssnano: {
			preset: 'default',
		},
		'postcss-import': {},
		tailwindcss: { config: './config/block3/tailwind.config.js' },
		//tailwindcss: {},
    autoprefixer: {},
  },
}
