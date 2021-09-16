module.exports = {
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: {
        yam: "url('/img/yam.png')",
        forest: "url('/img/11025562.jpg')",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
