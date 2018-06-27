let mix = require('laravel-mix');


mix.styles([
        'resources/assets/theme-asset/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'resources/assets/theme-asset/dist/css/AdminLTE.css',
        'resources/assets/theme-asset/skin-black-custom.css',
        'resources/assets/theme-asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'resources/assets/theme-asset/bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'resources/assets/theme-asset/hotsnackbar/hotsnackbar.css',
        'resources/assets/theme-asset/bower_components/select2/dist/css/select2.min.css',
        'public/font-awesome/css/font-awesome.min.css',
        'resources/assets/app.css'
    ], 'public/css/everything_css.css')

.combine([
        'resources/assets/theme-asset/bower_components/jquery/dist/jquery.min.js',
        'resources/assets/theme-asset/bower_components/jquery-ui/jquery-ui.min.js',
        'resources/assets/theme-asset/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'resources/assets/theme-asset/bower_components/moment/min/moment.min.js',
        'resources/assets/theme-asset/bower_components/datatables.net/js/jquery.dataTables.min.js',
        'resources/assets/theme-asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
        'resources/assets/theme-asset/bower_components/bootstrap-daterangepicker/daterangepicker.js',
        'resources/assets/theme-asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'resources/assets/theme-asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
        'resources/assets/theme-asset/hotsnackbar/hotsnackbar.js',
        'resources/assets/theme-asset/bower_components/select2/dist/js/select2.full.min.js',
        'resources/assets/theme-asset/dist/js/adminlte.min.js',
        'resources/assets/app.js'

    ], 'public/js/everything_js.js').browserSync('http://localhost:8000');
    
    if (mix.inProduction()) {
        mix.version();
    }