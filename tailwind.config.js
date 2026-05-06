/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      screens: {
        xs: '440px'
      },
      colors: {
        'primary': '#474c64',
        'primary-dark': '#383d50',
        'secondary': '#dddddd',
        'white': '#ffffff'
      },
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
        'cinzel': ['Cinzel', 'serif']
      },
      maxWidth: {
        'c': '975px'
      },
      fontSize: {
      },
      lineHeight: {
      },
      backgroundImage: {
      },
      boxShadow: {
      }
    }
  },
  plugins: [],
}