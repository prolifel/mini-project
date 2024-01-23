import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import DateRangePicker from 'flowbite-datepicker/DateRangePicker';

import Datepicker from 'flowbite-datepicker/Datepicker';
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    content: ["./src/**/*.{html,js}"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, require('flowbite/plugin'), DateRangePicker, Datepicker],
};
