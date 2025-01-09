/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**.{php,html,js}",
    "./template-parts/*.{php,html,js}",
    "./blocks/*/**.{php,html,js}",
  ],
  theme: {
    extend: {
      fontFamily: {
        Lato: ["Lato", "sans-serif"],
      },

      colors: {
        Orange: "#E59B24",
        Dark: "#08192D",
        GrayText: "#08192d99",
      },
    },
  },
};
