<!DOCTYPE html>
<html lang="ja">

<head>
    @include('components.head')
    <title>POSSE QUIZ</title>
    <script src="https://kit.fontawesome.com/dadd574598.js" crossorigin="anonymous" defer></script>
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

        <div class="flex justify-center">
            {{ $questions->links() }}
        </div>
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
                      @foreach($question->choices as $index => $choice)
                        <li class="p-quiz-box__answer__item">
                            <button class="p-quiz-box__answer__button js-answer" data-answer="{{ $choice -> valid}}">
                                {{$choice -> name}}<i class="u-icon__arrow"></i>
                            </button>
                        </li>
                      @endforeach
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
                    <i class="u-icon__note"></i>{{ $question->supplement }}
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
    <script src="{{ asset('js/quiz.js') }}"></script>
</body>

</html>
