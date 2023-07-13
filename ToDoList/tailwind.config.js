/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
    colors: {
      gray:{
        100: "#F2F2F2",
        200: "#D9D9D9",
        300: "#808080",
        400: "#333333"
      },
    },
  },
  plugins: [],
}