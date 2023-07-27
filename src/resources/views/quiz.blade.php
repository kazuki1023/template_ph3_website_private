<!DOCTYPE html>
<html lang="ja">

<head>
    @include('components.head')
    <title>POSSE QUIZ</title>
    <script src="{{ asset('js/quiz.js') }}"></script>
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
          @foreach($questions as $index => $question)
            <section class="p-quiz-box js-quiz" data-quiz="{{ $question->id}}">
                <div class="p-quiz-box__question">
                    <h2 class="p-quiz-box__question__title">
                        <span class="p-quiz-box__label">Q{{ $question->id}}</span>
                        <span class="p-quiz-box__question__title__text">{{ $question -> content}}</span>
                    </h2>
                    <figure class="p-quiz-box__question__image">
                        <img src="{{ asset('/storage/img/questions/' . $question->image) }}" alt="">
                    </figure>
                </div>
                <div class="p-quiz-box__answer">
                    <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
                    <ul class="p-quiz-box__answer__list">
                        <li class="p-quiz-box__answer__item">
                            <button class="p-quiz-box__answer__button js-answer" data-answer="0">
                                <i class="u-icon__arrow"></i>
                            </button>
                        </li>
                        <li class="p-quiz-box__answer__item">
                            <button class="p-quiz-box__answer__button js-answer" data-answer="1">
                                約79万人<i class="u-icon__arrow"></i>
                            </button>
                        </li>
                        <li class="p-quiz-box__answer__item">
                            <button class="p-quiz-box__answer__button js-answer" data-answer="2">
                                約183万人<i class="u-icon__arrow"></i>
                            </button>
                        </li>
                    </ul>
                    <div class="p-quiz-box__answer__correct js-answerBox">
                        <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
                        <p class="p-quiz-box__answer__correct__content">
                            <span class="p-quiz-box__answer__correct__content__label">A</span>
                            <span class="js-answerText"></span>
                        </p>
                    </div>
                </div>
                <cite class="p-quiz-box__note">
                    <i class="u-icon__note"></i>経済産業省 2019年3月 － IT 人材需給に関する調査
                </cite>
            </section>
            @endforeach
        </div>
        <!-- /.l-container .p-quiz-container -->
    </main>


    @include('components.line')
    <!-- /.p-line -->

    @include('components.footer')
    <!-- /.l-footer .p-footer -->

</body>

</html>
