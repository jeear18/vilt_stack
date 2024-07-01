/** @type {import('tailwindcss').Config} */
// export default {
//   // content: ["./src/**/*.{html,js}"],
//   content: [
//     './storage/framework/views/*.php',
//     './resources/views/**/*.blade.php',
//     './resources/js/**/*.vue',
//   ],

module.exports =  {
  // content: ["./src/**/*.{html,js}"],
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [
     require('@tailwindcss/forms'),
    // require( '@tailwindcss/forms'),
  ],
}

