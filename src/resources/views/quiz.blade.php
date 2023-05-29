<!DOCTYPE html>
<html lang="ja">

<head>
  @include('components.head')
  <title>POSSE QUIZ</title>
  <script src="{{ asset("js/quiz.js")}}"></script>
</head>

<body>
  @include('components.header')
  <!-- /.l-header .p-header -->


  <main class="l-main">
    <section class="p-hero p-quiz-hero">
      <div class="l-container">
        <h1 class="p-hero__title">
          <span class="p-hero__title__label">POSSE課題</span>
          <span class="p-hero__title__inline">ITクイズ</span>
        </h1>
      </div>
    </section>
    <!-- /.p-hero .p-quiz-hero -->

    <div class="p-quiz-container l-container">
      <!-- ./p-quiz-box -->
    </div>
    <!-- /.l-container .p-quiz-container -->
  </main>

  @include('components.line')
  <!-- /.p-line -->

  @include('components.footer')
  <!-- /.l-footer .p-footer -->

</body>

</html>