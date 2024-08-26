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
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#5E6AD2',
                'secondary': '#8A8F98',
                'background': '#1B1D1F',
                'surface': '#27292B',
                'text': '#E6E8EA',
            },
        },
    },

    plugins: [forms],
};
