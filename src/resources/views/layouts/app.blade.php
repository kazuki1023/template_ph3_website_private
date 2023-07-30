<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="pt-20 pl-64 h-full">
            @yield('content')
        </main>
    </div>
</body>
<script>
    // 削除ボタンがクリックされたときの処理
    function deleteConfirm() {
        let confirmDelete = confirm('本当に削除しますか？');
        if (!confirmDelete) {
            // prevent form submission if the user clicked "cancel" on the alert
            event.preventDefault();
        }
        return confirmDelete;
    }
</script>

</html>
