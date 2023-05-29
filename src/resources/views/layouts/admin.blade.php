<!DOCTYPE html>
<html lang="ja">
<head>
  @include('components.head')
  <title>管理者画面</title>
</head>
<body>
  @include('components.admin.header')
  <!-- /.l-header .p-header -->
  @include('components.admin.sidebar')
  <main class="pt-20 pl-64 bg-gray-400">
    @yield('content')
  </main>
</body>
</html>