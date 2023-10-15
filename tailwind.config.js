/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./dist/**/*.{html,js}"],
    theme: {
        extend: {
            colors: {
                'nav-secondary': '#202D39',
                'nav-primary': '#19242D',
                'nav-primary-light': '#394957',

                "primary-text": '#19242D',
                "primary-text-light": "#777",


                "primary-blue":"#008AEE",

                "accent-green":"#5FB865",
                "accent-light-blue":"#63C7C9",
                "accent-flame":"#DC5426",
                "accent-orange":"#E59D48",
                "accent-purple":"#BD5FE9",
            },

        },
    },
    plugins: [],
}