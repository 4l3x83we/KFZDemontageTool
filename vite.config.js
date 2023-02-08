import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
import {viteStaticCopy} from 'vite-plugin-static-copy';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/backend.js',
            ],
            refresh: true,
            autoprefixer: {},
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/assets/fonts/*',
                    dest: '../fonts'
                },
                {
                    src: 'resources/assets/images/*',
                    dest: '../images'
                },
                {
                    src: 'resources/css/*',
                    dest: '../css'
                }
            ],
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '@': path.resolve(__dirname, 'node_modules'),
            '~fa': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/scss'),
        }
    },
    build: {
        rollupOptions: {
            output: {
                manualChunks(id) {
                    if (id.includes('node_modules')) {
                        return id.toString().split('node_modules/')[1].split('/')[0].toString();
                    }
                }
            }
        }
    }
});
