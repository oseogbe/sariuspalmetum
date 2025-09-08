import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
        serif: ['Cormorant Garamond', ...defaultTheme.fontFamily.serif],
      },
      colors: {
        emerald: {
          50:  '#F0F7F2',
          100: '#DCEFE1',
          200: '#B9E0C3',
          300: '#8FCC9F',
          400: '#66B77D',
          500: '#4FA764',
          600: '#3C8E48',
          700: '#2F733A',
          800: '#23562D',
          900: '#1A3F21',
        },
      },
      height: {
        '128': '32rem',
      },
      maxWidth: {
        '8xl': '88rem',
      },
    },
  },
  plugins: [],
}
