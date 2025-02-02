import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                times: ["Times New Roman", ...defaultTheme.fontFamily.serif],
                cursive: ["cursive", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                registration: "url('/images/registration.jpg')",
            },
        },
    },

    plugins: [forms],
};
