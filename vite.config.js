import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/assets/libs/chartist/chartist.min.css', 
                'public/assets/css/bootstrap.min.css', 
                'public/assets/css/icons.min.css', 
                'public/assets/css/app.min.css', 
                'public/assets/libs/jquery/jquery.min.js',
                'public/assets/libs/bootstrap/js/bootstrap.bundle.min.js',
                'public/assets/libs/metismenu/metisMenu.min.js',
                'public/assets/libs/simplebar/simplebar.min.js',
                'public/assets/libs/node-waves/waves.min.js',
                'public/assets/libs/peity/jquery.peity.min.js',
                'public/assets/libs/chartist/chartist.min.js',
                'public/assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js',
                'public/assets/js/pages/dashboard.init.js',
                'public/assets/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
