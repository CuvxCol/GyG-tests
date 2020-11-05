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
        <img src="/img/logo1.png" class="img-thumbnail" alt="Cinque Terre" width="150" height="150">
        <header>Bienvenido</header>
        <div class="form-outer">
            <form method="POST" action="{{ route('surveyed.store') }}" id="formulario_inicio" action="#">           
                @csrf
                <div class="page slidepage">
                        <label for="p21" id="l21">Ingrese su número de identidad</label><br>
                        <input name="id" type="number" id="p21" min="0" step="1" autofocus onkeydown="onKeyDown(event,0.01,1,0)"><br>
                        {!! $errors->first('id','<small style="color:#FF0000">:message</small>') !!}
                        <br><br>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>