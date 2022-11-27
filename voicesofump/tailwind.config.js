/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      Mukta: ["Mukta"],
      Roboto: ["Roboto"],
      Glitch: ["Rubik Glitch"],
    },
    container:{
      center: true,
    },
    extend: {},
  },
  plugins: [],
}