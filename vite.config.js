import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //;'resources/js/app.jsx',
                //top-------------------------------------------------------
                'resources/assets/css/vendors.css',
                'resources/assets/css/main.css',

                'resources/assets/js/vendors.js',
                'resources/assets/js/main.js',
            ],
            refresh: true,
        }),
        react(),
    ],
});
        