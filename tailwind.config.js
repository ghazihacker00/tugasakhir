module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'media', // Hapus jika tidak digunakan
  theme: {
    extend: {
      boxShadow: {
        'outline-blue': '0 0 0 2px rgba(59, 130, 246, 0.5)', // Shadow biru saat fokus
      },
      colors: {
        'custom-blue': '#1D4ED8', // Warna biru khusus jika diperlukan
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'), // Plugin untuk mendukung styling form
  ],
}
