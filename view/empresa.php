<?php include("../config/db.php");

if (isset($_POST['alterar'])) {
    $id_empresa = $_POST['empresa'];


} else {

    //COLOCAR O ID DA EMPRASA DE ACORDO COM O CADASTRO DO FUNCIONARIO
    $id_empresa = 1;
}



?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/stely.css">
    <title>Empresa</title>
</head>

<body>

    <?php include_once('../models/menu.php') ?>
    <div class="container " style="margin-top: 5% ;">
        <form action="empresa.php" method="post">
        <button type="submit" class="btn btn-success mb-5 " name="alterar">Alterar</button>
            <div class="row g-2 justify-content-center">
                
                <!-- EMPRESA -->
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect uf" name="empresa"
                            aria-label="Floating label select example">

                            <?php
                            $sql = "SELECT * FROM empresa";
                            $resultado = mysqli_query($con, $sql);
                            if (mysqli_num_rows($resultado)) {
                                while ($dados = mysqli_fetch_array($resultado)) {
                            ?>
                            <option value="<?php echo $dados['id'] ?>">
                                <?php echo $dados['empresa'] ?>
                            </option>
                            <?php
                                }
                            }

                            ?>


                        </select>
                        <label for="floatingSelect">Empresa</label>
                    </div>
                </div>
                



        </form>
        <?php
                $sql = "SELECT * FROM empresa where id= $id_empresa";
                $resultado = mysqli_query($con, $sql);
                $dados = mysqli_fetch_array($resultado);
                ?>
        <!-- CNPJ -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" name="cnpj" disabled value="<?php echo $dados['cnpj'] ?>">
                <label for="floatingInputGrid">CNPJ</label>
            </div>
        </div>
        <!--EMAIL-->
        <div class="col-md-12">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputGrid" disabled value="<?php echo $dados['email']?>">
                <label for="floatingInputGrid">Email</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" name="endereco" disabled value="<?php echo $dados['endereco']?>" >
                <label for="floatingInputGrid">Endereço</label>
            </div>
        </div>
        <!-- NUMERO -->
        <div class="col-md-1">
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInputGrid" disabled value="<?php echo $dados['numeroEndereco']?>">
                <label for="floatingInputGrid">Nº</label>
            </div>
        </div>
        <!-- BAIRRO -->
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" disabled value="<?php echo $dados['bairro']?>">
                <label for="floatingInputGrid">Bairro</label>
            </div>
        </div>
        <!-- ESTADOS -->
        <?php
        $id_uf = $dados['id_uf'];
                $estados_uf = "SELECT * FROM uf where id= $id_uf ";
                $resultado_uf = mysqli_query($con, $estados_uf);
                $dados_uf = mysqli_fetch_array($resultado_uf);
                ?>
        <div class="col-md-1">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" disabled value="<?php echo $dados_uf['uf']?>">
                <label for="floatingInputGrid">UF</label>
            </div>
        </div>
        <!-- CEP -->
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" disabled value="<?php echo $dados['cep']?>">
                <label for="floatingInputGrid">CEP</label>
            </div>
        </div>
        <!--MUNICIPIO-->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" disabled value="<?php echo $dados['municipio']?>">
                <label for="floatingInputGrid">Municipio</label>
            </div>
        </div>
        <!-- TELEFONE -->
        <div class="col-md-3">
            <div class="form-floating">
                <input type="tel" class="form-control" id="floatingInputGrid" disabled value="<?php echo $dados['tel']?>">
                <label for="floatingInputGrid">Telefone</label>
            </div>
        </div>
        <!-- CELULAR -->
        <div class="col-md-3">
            <div class="form-floating">
                <input type="tel" class="form-control " id="floatingInputGrid" disabled value="<?php echo $dados['cel']?>">
                <label for="floatingInputGrid">Celular</label>
            </div>
        </div>



    </div>

    </div>
   








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>