import forms from "@tailwindcss/forms";

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
            "t-gray": "#666666",
            gray: "#E6E9EB",
            "light-gray": "#F7F8F9",
            "bg-primary": "#005793",
            "bg-secondary": "#0163A6",
            "bg-gray-primary": "#F7F8F9",
            "bg-gray-secondary": "#EFF1F2",
            white: "#FFFFFF",
            black: "#000000",
            red: "##DD4241",
        },
    },

    plugins: [forms],
};
