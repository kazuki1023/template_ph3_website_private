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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="{{asset("js/checkFile.js")}}"></script>
</body>
</html>