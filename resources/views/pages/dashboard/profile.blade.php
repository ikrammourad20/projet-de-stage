<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil utilisateur</title>

    <link rel="stylesheet" href="{{ asset('css/default-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
   
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
    <


</head>
<body>
    @include('partials.sidebar')
    @include('partials.navbar-connected')

    <main class="main">
        @include('contents.dashboard.profile', ['user' => $user])
    </main>

</body>
</html>
