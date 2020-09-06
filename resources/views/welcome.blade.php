<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <title>Monilog</title>




        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->


        <!--begin::Page Custom Styles(used by Login page)-->
        <link href="assets/css/pages/login/classic/login-6.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->


        <!--begin::Page Vendors Styles(used by Dashboard page)-->
        <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->


        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="assets/css/themes/layout/header/base/light.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/layout/header/menu/light.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/layout/brand/dark.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/layout/aside/dark.css?v=7.0.9" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />


    </head>
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

        <div id="app">
            <router-view></router-view>
        </div>

        <script src="{{asset('js/app.js')}}" ></script>

        <script>
            // if(localStorage.getItem('authExpireTime') && (Date.now() > localStorage.getItem('authExpireTime'))) logout();
        </script>



        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js?v=7.0.9"></script>
        <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.9"></script>
        <script src="assets/js/scripts.bundle.js?v=7.0.9"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Scripts(used by Login page)-->
        <script src="assets/js/pages/custom/login/login-general.js?v=7.0.9"></script>
        <!--end::Page Scripts-->


        <!--begin::Page Vendors(used by Dashboard page)-->
        <script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.9"></script>
        <!--end::Page Vendors-->
        <!--begin::Page Scripts(used by Dashboard page)-->
        <script src="/assets/js/pages/widgets.js?v=7.0.9"></script>
        <!--end::Page Scripts-->
    </body>
</html>
