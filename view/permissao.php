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
    <title>Permissões</title>
</head>

<body>

    <?php include_once('../models/menu.php') ?>

    <div class="container mt-5">
        <form action="#" method="post">
            <div class="row g-2 justify-content-center">
                <!-- Nome -->
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect uf" name="uf"
                            aria-label="Floating label select example">
                            <option value=""></option>
                            <option value="1">ADMINISTRATIVO</option>
                            <option value="2">ATENDENTE</option>
                            <option value="3">COMERCIAL </option>
                            <option value="4">ESTAGIARIO</option>
                            <option value="5">FINANCEIRO</option>

                        </select>
                        <label for="floatingInputGrid">Funcionario</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="cnpj" disabled>
                        <label for="floatingInputGrid">CPF</label>
                    </div>
                </div>

                <div class="col-md-12 my-4">
                    <p class="h6"> Administrador</p>

                    <input class="form-check-input" type="checkbox" name="administrador[]" id="admin_visualizar"
                        value="1">
                    <label class="form-check-label me-5" for="admin_visualizar">
                        Visualizar
                    </label>

                    <input class="form-check-input" type="checkbox" name="administrador[]" id="admin_alterar" value="2">
                    <label class="form-check-label me-5" for="admin_alterar">
                        Alterar
                    </label>

                    <input class="form-check-input" type="checkbox" name="administrador[]" id="admin_deletar" value="3">
                    <label class="form-check-label me-5" for="admin_deletar">
                        Deletar
                    </label>

                </div>
                <hr>
                <div class="col-md-12 my-4">
                    <p class="h5"> Financeiro</p>

                    <input class="form-check-input" type="checkbox" name="financeiro[]"
                        id="financeiro_visialisar" value="4">
                    <label class="form-check-label me-5" for="financeiro_visialisar">
                        Visualizar
                    </label>

                    <input class="form-check-input" type="checkbox" name="financeiro[]" id="financeiro_alterar"
                        value="5">
                    <label class="form-check-label me-5" for="financeiro_alterar">
                        Alterar
                    </label>

                    <input class="form-check-input" type="checkbox" name="financeiro[]" id="financeiro_deletar"
                        value="6">
                    <label class="form-check-label me-5" for="financeiro_deletar">
                        Deletar
                    </label>

                </div>
                <hr>
                <div class="col-md-12 my-4">
                    <p class="h5"> Pacintes</p>

                    <input class="form-check-input" type="checkbox" name="paciente[]"
                        id="pacientes_visualizar" value="7">
                    <label class="form-check-label me-5" for="pacientes_visualizar">
                        Visualizar
                    </label>

                    <input class="form-check-input" type="checkbox" name="paciente[]" id="pacientes_alterar"
                        value="8">
                    <label class="form-check-label me-5" for="pacientes_alterar">
                        Alterar
                    </label>

                    <input class="form-check-input" type="checkbox" name="paciente[]" id="pacientes_deletar"
                        value="9">
                    <label class="form-check-label me-5" for="pacientes_deletar">
                        Deletar
                    </label>

                </div>
                <hr>
                <div class="col-md-12 my-4">
                    <p class="h5"> Doutores</p>

                    <input class="form-check-input" type="checkbox" name="doutor[]" value="10"
                        id="doutores_visualizar">
                    <label class="form-check-label me-5" for="doutores_visualizar">
                        Visualizar
                    </label>

                    <input class="form-check-input" type="checkbox" name="doutor[]" id="doutores_alterar"
                        value="11">
                    <label class="form-check-label me-5" for="doutores_alterar">
                        Alterar
                    </label>

                    <input class="form-check-input" type="checkbox" name="doutor[]" id="doutores_deletar"
                        value="12">
                    <label class="form-check-label me-5 " for="doutores_deletar">
                        Deletar
                    </label>

                </div>
                <hr>
                <div class="col-md-12 my-4">
                    <p class="h5"> Horarios de atendimento</p>

                    <input class="form-check-input" type="checkbox" name="hr_atendimento[]"
                        id="hr_atendimento_visualizar" value="13">
                    <label class="form-check-label me-5" for="hr_atendimento_visualizar">
                        Visualizar
                    </label>

                    <input class="form-check-input" type="checkbox" name="hr_atendimento[]"
                        id="hr_atendimento_alterar" value="14">
                    <label class="form-check-label me-5" for="hr_atendimento_alterar">
                        Alterar
                    </label>

                    <input class="form-check-input" type="checkbox" name="hr_atendimento[]"
                        id="hr_atendimento_deletar" value="15">
                    <label class="form-check-label me-5" for="hr_atendimento_deletar">
                        Deletar
                    </label>

                </div>
                <hr>
                <div class="col-md-12 my-4">
                    <p class="h5"> Relatórios</p>

                    <input class="form-check-input" type="checkbox" name="relatorio[]"
                        id="relatorio_visualizar" value="16">
                    <label class="form-check-label me-5" for="relatorio_visualizar">
                        Visualizar
                    </label>

                    <input class="form-check-input" type="checkbox" name="relatorio[]" id="relatorio_alterar"
                        value="16">
                    <label class="form-check-label me-5" for="relatorio_alterar">
                        Alterar
                    </label>

                    <input class="form-check-input" type="checkbox" name="relatorio[]" id="relatorio_deletar"
                        value="17">
                    <label class="form-check-label me-5" for="relatorio_deletar">
                        Deletar
                    </label>

                </div>

            </div>
            <div class="continer-fluid">
                <div class="row justify-content-end" style="margin-top: 2% ;  margin-left:80%;">
                    <div class="col-4 ">
                        <button type="submit" class="btn btn-success" name="salvar">Salvar</button>
                    </div>
                </div>
            </div>



        </form>
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