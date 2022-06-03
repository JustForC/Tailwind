module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage:{
        "authenticationImage":"url('/images/logo.jpg')",
      },
      backgroundSize:{
        "small":"95%",
        "extrasmall":"75%",
      },
      colors:{
        "realwhite":"#edf2f7",
      },
      spacing: {
        '100' : '34rem',
      },
    },
  },
  plugins: [],
}
