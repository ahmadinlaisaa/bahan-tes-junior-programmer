/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js",
    "./vendor/**/*.{html,js,php}",
    "./public/**/*.{html,js,php}",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
    },
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};

