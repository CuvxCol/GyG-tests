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
                <p>P1-5</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>P6-10</p>
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
                <div class="page slidepage">
                    <div class="title">Pregunta 1</div>
                    <div class="field">
                        <label for="p1" id="l1">Sufres hormigueo o entumecimiento</label>
                        <input type="number" id="p1" min="0" max="3" step="1" autofocus onkeydown="onKeyDown(event,0.01,1,0)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 2</div>
                    <div class="field">
                        <label for="p2" id="l2">Sensación de calor</label>
                        <input type="number" id="p2" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.02,2,1)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 3</div>
                    <div class="field">
                        <label for="p3" id="l3">Temblor de piernas</label>
                        <input type="number" id="p3" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.03,3,2)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 4</div>
                    <div class="field">
                        <label for="p4" id="l4">Incapacidad para relajarse</label>
                        <input type="number" id="p4" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.04,4,3)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 5</div>
                    <div class="field">
                        <label for="p5" id="l5">Miedo a que suceda lo peor</label>
                        <input type="number" id="p5" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.05,5,4)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 6</div>
                    <div class="field">
                        <label for="p6" id="l6">Mareo o aturdimiento</label>
                        <input type="number" id="p6" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.06,6,5)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 7</div>
                    <div class="field">
                        <label for="p7" id="l7">Palpitaciones o taquicardia</label>
                        <input type="number" id="p7" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.07,7,6)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 8</div>
                    <div class="field">
                        <label for="p8" id="l8">Sensación de inestabilidad e inseguridad física</label>
                        <input type="number" id="p8" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.08,8,7)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 9</div>
                    <div class="field">
                        <label for="p9" id="l9">Terrores</label>
                        <input type="number" id="p9" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.09,9,8)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 10</div>
                    <div class="field">
                        <label for="p10" id="l10">Nerviosismo</label>
                        <input type="number" id="p10" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.1,10,9)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 11</div>
                    <div class="field">
                        <label for="p11" id="l11">Sensación de ahogo</label>
                        <input type="number" id="p11" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.11,11,10)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 12</div>
                    <div class="field">
                        <label for="p12" id="l12">Temblores de manos</label>
                        <input type="number" id="p12" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.12,12,11)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 13</div>
                    <div class="field">
                        <label for="p13" id="l13">Temblor generalizado o estremecimiento</label>
                        <input type="number" id="p13" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.13,13,12)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 14</div>
                    <div class="field">
                        <label for="p14" id="l14">Miedo a perder el control</label>
                        <input type="number" id="p14" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.14,14,13)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 15</div>
                    <div class="field">
                        <label for="p15" id="l15">Dificultad para respirar</label>
                        <input type="number" id="p15" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.15,15,14)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 16</div>
                    <div class="field">
                        <label for="p16" id="l16">Miedo a morir</label>
                        <input type="number" id="p16" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.16,16,15)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 17</div>
                    <div class="field">
                        <label for="p17" id="l17">Sobresaltos</label>
                        <input type="number" id="p17" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.17,17,16)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 18</div>
                    <div class="field">
                        <label for="p18" id="l18">Molestias digestivas o abdominales</label>
                        <input type="number" id="p18" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.18,18,17)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 19</div>
                    <div class="field">
                        <label for="p19" id="l19">Palidez</label>
                        <input type="number" id="p19" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.19,19,18)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 20</div>
                    <div class="field">
                        <label for="p20" id="l20">Rubor facial</label>
                        <input type="number" id="p20" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.2,20,19)">
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title">Pregunta 21</div>
                    <div class="field">
                        <label for="p21" id="l21">Sudoración (No debida al calor)</label>
                        <input type="number" id="p21" min="0" max="3" step="1" onkeydown="onKeyDown(event,0.21,21,20)">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="/js/script.js"></script>
</body>
</html>