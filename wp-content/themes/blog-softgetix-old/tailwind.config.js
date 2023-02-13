/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  darkMode: 'media',
  content: ["./template-parts/*.{php,html,js}","./*.{php,html,js}"],
  theme: {
    
    extend: {
      colors: {
        sBlue: {
          800: "#373b78",
        },
        sOrange:{
          800: "#fa7169",
        },
      },
    },
  },
  plugins: [],
}
