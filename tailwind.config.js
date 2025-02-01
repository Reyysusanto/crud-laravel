import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'google-blue': '#4285F4',
                'google-green': '#34A853',
                'google-yellow': '#FBBC05',
                'google-red': '#EA4335',
                'google-gray': '#F8F9FA',
                'google-text': '#202124',
                'google-text-light': '#5F6368',
              },
        },
    },

    plugins: [
        forms
    ],
};
