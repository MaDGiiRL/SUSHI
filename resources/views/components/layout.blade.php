<!DOCTYPE html>
<html lang="it" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$title ?? "Titolo di Default"}}</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Google Fonts : Poppins &  Ruslan Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ruslan+Display&display=swap" rel="stylesheet">

    <!-- CSS Custom -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- navbar componenet -->
    <x-navbar />



    <!-- views -->
    <div class="min-vh-100">
        {{$slot}}
    </div>

    <x-footer />

    <!-- footer componenet -->
    <script src="/js/main.js"></script>
</body>

</html>