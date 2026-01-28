<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>@yield('title', 'Primeluxe')</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="shortcut icon" href="{{ asset('/images/PRIMELUXE_LOGO.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 opacity-0 transition-opacity duration-1200 ease-out"
    onload="document.body.classList.add('opacity-100')">

    {{-- Header --}}
    @include('components.header')

    {{-- Main Content --}}
    <main class="flex flex-col">
        @yield('content')
    </main>

    @include('components.footer')


    <script>
        AOS.init();

        window.addEventListener('mouseover', initLandbot, {
            once: true
        });
        window.addEventListener('touchstart', initLandbot, {
            once: true
        });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = "module"
                s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-3212590-ID1NS7EPB2HQG6X5/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>


</body>

</html>
