/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}", "./**/*.php", "./src/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ["Montserrat", "serif"],
      },
      colors: {
        'primary': {
          50: '#fff9ec',
          100: '#fff2d3',
          200: '#ffe2a5',
          300: '#ffcc6d',
          400: '#ffaa32',
          500: '#ff8e0a',
          600: '#ff7600',
          700: '#a1420b',
          800: '#a1420b',
          900: '#82380c',
          950: '#461a04',
        },
        'secondary': {
          50: '#efffe4',
          100: '#dbffc4',
          200: '#dbffc4',
          300: '#8aff50',
          400: '#8aff50',
          500: '#3ee500',
          600: '#2db800',
          700: '#218900',
          800: '#1f6d07',
          900: '#1f6d07',
          950: '#093400',
        },
      }
    },
    screens: {
      // => @media (min-width: ... px) { ... }
      xs: "375px",
      sm: "500px",
      base: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1440px",
    },
  },
  plugins: [

  ],
};
