import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery',
            'bootstrap': 'bootstrap',
            '@fortawesome': '@fortawesome/fontawesome-free',
            'perfect-scrollbar': 'perfect-scrollbar'
        }
    }
});