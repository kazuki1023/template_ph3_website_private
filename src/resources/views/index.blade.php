<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSSE 初めてのWeb制作</title>
  <!-- スタイルシート読み込み -->
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <!-- Google Fonts読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <script src="{{ asset('js/common.js')}}" defer></script>
</head>

<body>
  @include('components.header')
  <!-- /.l-header .p-header -->

  <main class="l-main">
    <section class="p-top-hero">
      <div class="p-top-hero__inner">
        <div class="p-top-hero__body">
          <h1 class="p-top-hero__body__title">学生プログラミングコミュニティ POSSE（ポッセ）</h1>
          <span class="p-top-hero__body__catchcopy">自分史上最高<br>を仲間と。</span>
        </div>
        <picture class="p-top-hero__image">
          <img src="{{ asset("./img/components/img-hero.jpg")}}" alt="">
        </picture>
        <div class="p-top-hero__scroll">Scroll Down</div>
      </div>
    </section>
    <!-- /.p-top-hero -->

    <div class="p-top-container">
      <section class="l-section p-top-about">
        <div class="l-container">
          <h2 class="p-heading">
            POSSEとは<span class="p-heading__caption" lang="en" aria-hidden="true">About POSSE</span>
          </h2>
          <div class="p-top-about__body">
            <picture class="p-top-about__image">
              <img src="{{ asset("./img/components/img-about.jpg")}}" alt="POSSEメンバー集合写真">
            </picture>
            <div class="p-top-about__content">
              <p>
                学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。<br>プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！<br>それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- /.l-section p-top-about -->
    </div>
  </main>
  <!-- /.l-main -->

  @include('components.line')
  <!-- /.p-line -->

  @include('components.footer')
  <!-- /.l-footer .p-footer -->

</body>

</html>