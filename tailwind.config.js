import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        colors: {
            primary: "#0063A6",
            secondary: "#1F376C",
            gray: "#E6E9EB",
            "light-gray": "#F7F8F9",
            white: "#FFFFFF",
            red: "##DD4241",
        },
    },

    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#0063A6",
                    secondary: "#1F376C",
                    gray: "#E6E9EB",
                    "light-gray": "#F7F8F9",
                    white: "#FFFFFF",
                    red: "##DD4241",
                },
            },
            "dark",
            "cupcake",
        ],
    },

    plugins: [forms, daisyui],
};
