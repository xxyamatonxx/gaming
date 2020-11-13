<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div id="app">
        <header-component></header-component>
                
        <router-view></router-view>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="//cdn.webrtc.ecl.ntt.com/skyway-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/tell.js') }}" defer></script>
</body>

</html>