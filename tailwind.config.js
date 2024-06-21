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
                'primary': '#FAEF9B', // navbar, CTA
                'danger': '#F86A8A',
                'success': '#9BFAC0',
                'info': '#9BD4FA',
                'action': '#9BA6FA',
                'fwhite': '#F9F9F9',
            }
        },
    },

    plugins: [forms],
};
