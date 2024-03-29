/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      "./node_modules/flowbite/**/*.js",
      "./node_modules/flowbite/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('flowbite/plugin')
    ],
  }