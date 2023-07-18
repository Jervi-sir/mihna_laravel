import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //;'resources/js/app.jsx',
                //top-------------------------------------------------------
                'resources/assets/css/bootstrap.min.css',
                'resources/assets/plugins/select2/css/select2.min.css',
                'resources/assets/plugins/feather/feather.css',
                'resources/assets/css/style.css',

                //auth
                'resources/assets/css/owl.carousel.min.css',
                'resources/assets/css/owl.theme.default.min.css',

                //coming Soon
                'resources/assets/plugins/slick/slick.css',
                'resources/assets/plugins/slick/slick-theme.css',

                //add Course 
                'resources/assets/css/feather.css',
                'resources/assets/plugins/select2/css/select2.min.css',
                'resources/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css',

                //bottom----------------------------------------------------
                'resources/assets/js/jquery-3.6.0.min.js',
                'resources/assets/js/bootstrap.bundle.min.js',
                'resources/assets/plugins/select2/js/select2.min.js',
                'resources/assets/plugins/theia-sticky-sidebar/ResizeSensor.js',
                'resources/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js',
                'resources/assets/js/script.js',

                //auth
                'assets/js/owl.carousel.min.js"',

                //add Course 
                'resources/assets/js/ckeditor.js',
                'resources/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js',
                
                //Dashboard
                'resources/assets/js/jquery.counterup.min.js',

            ],
            refresh: true,
        }),
        react(),
    ],
});
        