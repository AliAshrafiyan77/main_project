import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
export default defineConfig({
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler',
        }
    },
    plugins: [
        vue(),
        laravel({
            input: ['resources/scss/admin.scss', 'resources/js/admin.js'],
            refresh: true,
        }),
    ],
});
