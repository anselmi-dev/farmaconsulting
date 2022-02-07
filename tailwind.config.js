module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'Playfair': ['Playfair Display', 'sans-serif']
    },
    extend: {
        colors: {
            'primary':   '#A2BD30',
            'secondary': '#405921',
            'base':     '#414141',
            'base-600': '#BFBFBF',
            'base-300': '#E8E8E8'
        },
        padding: {
            sw: '130px'
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
