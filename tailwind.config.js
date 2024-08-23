
// tailwind.config.js
module.exports = {
  darkMode: 'class', // Aktifkan mode gelap menggunakan class
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      // Tambahkan ekstensi tema sesuai kebutuhan
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
  variants: {
    extend: {},
  },
  plugins: [],
}