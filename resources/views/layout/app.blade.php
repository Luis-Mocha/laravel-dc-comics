<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-page')</title>

    <!-- link Font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' referrerpolicy='no-referrer'/>

    @vite('resources/js/app.js')
</head>
<body>

    @include( 'partials.header' )

    {{-- <div class="jumbo-div"></div> --}}

    <main>
        <!-- Contenuto che varia in base alla pagina -->
        @yield( 'content-main' )
    </main>

    @include( 'partials.buySection' )

    @include( 'partials.footer' )

    @yield('script-custom')

</body>
</html>