/** @type {import('tailwindcss').Config} */
// change accesible files
module.exports = {
  content: [
    "./**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Poppins', 'sans-serif']
      }
    }
  },
  plugins: [],
}

