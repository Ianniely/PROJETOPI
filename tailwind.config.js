/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}",],
  theme: {
    extend: {
      colors: {
        'black-gd': '#0000004e;',
      },
    },
  }, variants: {
      extends: {
        display: ['group-focus']
      },
  },
  plugins: [],
}

