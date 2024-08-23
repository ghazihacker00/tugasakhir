// tailwind.config.js
module.exports = {
  darkMode: 'class', // Aktifkan mode gelap menggunakan class
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // Tambahkan ekstensi tema sesuai kebutuhan
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
