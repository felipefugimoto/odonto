<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../public/css/stely.css">

    <title>Login Odonto</title>
</head>

<body>
    <div class="container login">
        <div class="row">
            <form action="../models/home.php" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="first_name login" type="text" class="validate" name="login">
                       
                        <label for="first_name">Login</label>
                    </div>
                    <div class="input-field col s12 ">
                        <input id="last_name senha" type="password" class="validate" name="senha">
                        <label for="last_name">Senha</label>
                    </div>
                </div>
                <button class="waves-effect waves-light btn" name="enviar">Logar</button>
            </form>
        </div>

    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>