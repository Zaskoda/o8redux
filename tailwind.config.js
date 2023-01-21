const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Ubuntu"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'black': '#000000',
                'o8-purple': {
                    '50': "#5c1aae",
                    '100': "#5b1aaa",
                    '150': "#3d1273",
                    '200': "#3a116d",
                    '250': "#340f61",
                    '300': "#310e5b",
                    '350': '#310e5c',
                    '400': '#301060',
                    '450': "#2e0d56",
                    '500': "#2b0c50",
                    '550': "#280b4b",
                    '600': '#1e0939',
                }
            },
            backgroundImage: {
                'saturn': "url('/img/header-passing-saturn.png')"
            }
        },

    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
