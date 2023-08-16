/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/card.blade.php",
    "./resources/**/listing.blade.php",
    "./resources/**/listings.blade.php",
    "./resources/**/layout.blade.php",
    "./resources/**/search.blade.php",
    "./resources/**/hero.blade.php",
    "./resources/**/listing-tags.blade.php",
    "./resources/**/listing-card.blade.php",

  ],
  theme: {
    extend: {
      colors: {
        laravel: "#ef3b2d",
    },
    },
  },
  plugins: [],
}