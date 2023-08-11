import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    resolve: {
        mainFields: [
            'browser',
            'module',
            'main',
            'jsnext:main',
            'jsnext'
        ],
        alias: {
            'vue': 'vue/dist/vue.esm-bundler',
        }
    },
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/auth.scss'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
