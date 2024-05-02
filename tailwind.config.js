import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'fyellow': '#FAEF9B',
                'fgreen': '#9BFAC0',
                'fpurple': '#9BA6FA',
                'fwhite': '#F9F9F9',
                'fpink': '#FA9BD5'
            }
        },
    },

    plugins: [forms],
};
