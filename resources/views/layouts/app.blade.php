<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Mark Webpage Title</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css') }}/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('assets/css') }}/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('assets/css') }}/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/images') }}/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    @include('component.navbar')


    @include('component.header')

    @yield('content')

    @include('component.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets/js') }}/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets/js') }}/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets/js') }}/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets/js') }}/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
