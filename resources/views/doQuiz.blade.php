<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GyG - Test Ansiedad</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="container">
        <header>{{$doQuiz->tittle}}</header>
        <div class="progress-bar">
            <div class="step">
                <p>P1-2</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>P3-10</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>P11-15</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>P16-21</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form method="POST" id="formulario_ansiedad" action="{{ route('answer_registry.store') }}">
                @csrf
                <input name="quiz" type="hidden" value="{{$doQuiz->id}}">
                <input name="question" type="hidden" value="{{$doQuiz->questions->question_number}}">
                <input name="registry" type="hidden" value="{{$doQuiz->questions->registry}}">
                <div class="page slidepage">
                    <div class="title">Pregunta {{$doQuiz->questions->question_number}}</div>
                    <div class="field">
                        <label for="p" id="l{{$doQuiz->questions->question_number}}">{{$doQuiz->questions->question}}</label>
                        <input name='answer' type="number" id="p{{$doQuiz->questions->question_number}}" min="0" max="3" step="1" autofocus onkeydown="onKeyDown(event,{{$doQuiz->questions->question_number/100}},{{$doQuiz->questions->question_number}},{{$doQuiz->questions->question_number - 1}})">
                        {!! $errors->first('answer','<small style="color:#FF0000">:message</small>') !!}
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>