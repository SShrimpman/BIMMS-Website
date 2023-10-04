import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'desktop': '1281px',
            },
            colors: {
                transparentBg: 'rgba(0,0,0,.4)',
                bimmsGreen: "#6fc3c0",
                darkBlue: "#041C2B",
                darkGray: "#041C2B9E",
            }
        },
    },

    plugins: [forms, typography],
};
