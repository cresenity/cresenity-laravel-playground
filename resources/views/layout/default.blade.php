<!DOCTYPE html>
<html class="no-js material-style" lang="{{  c::locale() }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ $title ? $title . ' - ' . EN::APP_NAME : EN::APP_NAME}}</title> --}}
    {{-- @CAppSeo --}}
    <link rel="icon" href="{{ c::media('img/favico.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Noto+Sans+JP&family=Lato&family=Montserrat&family=Source+Sans+Pro&family=Roboto+Condensed&family=Poppins&family=Oswald&family=Raleway&family=Noto+Sans&family=Ubuntu&family=Nunito&family=PT+Sans&family=Rubik&family=Noto+Sans+KR&family=Open+Sans+Condensed&family=Inter&family=Work+Sans&family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    @CAppStyles
    <!-- Global site tag (gtag.js) - Google Analytics -->

</head>
<body>
    @yield('content')

    @CAppScripts

    <script>
        window.addEventListener('cresenity:loaded',()=>{
            if(typeof wpWeb !== 'undefined') {
                wpWeb.initScrollAnimations();
            }
        });
    </script>

</body>
</html>
