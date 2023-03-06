/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['FF Shamel', 'sans-serif'],
        sansLight:['FF Shamellight','sans-serif'],
      }
    },
  },
  plugins: [],
}