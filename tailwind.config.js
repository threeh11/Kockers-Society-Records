/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      'bg': '#1E1E1E',
      'accent': '#FF4848',
      'white': '#F2F2F2',
      'whiteText': '#F5F5F5',
      'addictive' : '#37cdbe',
    },
  },
  plugins: [require("daisyui")],
  darkMode: 'class',
}
