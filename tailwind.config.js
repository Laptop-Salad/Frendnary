/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'pyellow': '#FAEF9B',
        'pgreen': '#9BFAC0',
        'pblue': '#9BA6FA',
        'pwhite': '#F9F9F9',
        'ppink': '#FA9BD5'
      },
    },
  },
  plugins: [],
}

