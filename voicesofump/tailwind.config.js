/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      Mukta: ["Mukta, sans-serif"],
    },
    container:{
      center: true,
    },
    extend: {},
  },
  plugins: [],
}