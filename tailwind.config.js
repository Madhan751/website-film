/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                // primary: "#800b0f",
                primary: "#d50614",
                secondary: "#0b807c",
            },
        },
    },
    plugins: [require("daisyui", "flowbite/plugin")],
};
