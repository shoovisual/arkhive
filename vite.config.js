import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),tailwindcss(),
    ],
    server: {
        host: true,
        hmr: {
            host: '9e6c-197-186-2-3.ngrok-free.app', // Only hostname
            protocol: 'https',
        },
    },
});
