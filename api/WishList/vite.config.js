import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/landing_styles.css',
                'resources/css/styles.css',
                'resources/sass/app.scss'

            ],
            refresh: true,
        }),
    ],
});
