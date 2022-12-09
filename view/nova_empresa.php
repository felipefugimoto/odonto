<?php include("../config/db.php") ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Administrador</title>
</head>

<body>

    <?php include_once('../models/menu.php') ?>
    <div class="continer-fluid">
        <div class="row justify-content-end" style="margin-top: 5% ; ">
            <div class="col-4 ">
                <a href="cad_empresa.php" class='btn btn-success icon-emprasas mx-2 justify-content-end'><i
                        class="fa-sharp fa-solid fa-plus"></i></a>

            </div>
        </div>
    </div>
    <div class="container ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Empresas</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Configuração</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $sql = "SELECT * FROM empresa";
            $resultado = mysqli_query($con, $sql);
            if (mysqli_num_rows($resultado)) {
                while ($dados = mysqli_fetch_array($resultado)) {
            ?>


                <tr>
                    <th scope="row"><?php echo $dados['id']?></th>
                    <td><?php echo $dados['empresa']?></td>
                    <td><?php echo $dados['cnpj']?></td>
                    <td>
                        <a href="#" class='btn btn-warning icon-emprasas mx-2'>
                            <i class="fa-sharp fa-solid fa-eye"></i>
                        </a>
                        <a href="#" class='btn btn-warning icon-emprasas mx-2'>
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="#" class='btn btn-danger icon-emprasas mx-2'>
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php
                }
            }

                ?>
            </tbody>
        </table>

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