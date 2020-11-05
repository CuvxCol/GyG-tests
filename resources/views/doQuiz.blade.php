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
            <form id="formulario_ansiedad" action="#">
                <input name="surveyed_id" type="hidden" value="{{$doQuiz->surveyed}}">
                @foreach ($doQuiz->questions as $question)
                <div class="page slidepage">
                    <div class="title">Pregunta {{$question->question_number}}</div>
                    <div class="field">
                        <label for="p" id="l{{$question->question_number}}">{{$question->question}}</label>
                        <input type="number" id="p{{$question->question_number}}" min="0" max="3" step="1" autofocus onkeydown="onKeyDown(event,{{$question->question_number/100}},{{$question->question_number}},{{$question->question_number - 1}})">
                    </div>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</body>
</html>