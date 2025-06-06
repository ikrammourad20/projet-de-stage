<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un stagiaire</title>
   
    <link rel="stylesheet" href="{{ asset('css/default-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
     <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/stagiaires.js') }}"></script>


    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
</head>

<body>
    @include('partials.sidebar')
    @include('partials.navbar-connected')
    <main class="main">
    @include('contents.dashboard.stagiaires', ['interns' => $interns])
</main>


    <script src="{{ asset('js/add-intern.js') }}"></script>
</body>
</html>