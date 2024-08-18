<?php

return [
    'client_modules' => [
        'jquery-3.6.0',
        'bootstrap-5',
        'themify-icons',
        'ionicons',
        'form',
        'animate',
        'linearicons',
        'fontawesome-5-f',
        'validate',
        'toastr',
        'wow',
    ],
    'js' => [
        //'wapro.js',
        app()->environment('production') ? 'cl-web.js' : 'cl-web.js',

    ],
    'css' => [
        app()->environment('production') ? 'cl-web.css' : 'cl-web.css'
    ],
    'data' => [
        'icon' => [
            'prefix' => '',
        ],
        'datatable' => [
            'dom' => "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        ],
    ],
];
