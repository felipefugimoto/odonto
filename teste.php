<?php
if (isset($_POST['selecionar'])) {
    $checar = $_POST['admin'];
    

        foreach ($checar as $value) {
        echo $value."<br>";

       

        if ($value == 1) {
            echo "um!<br>";
            
        } else if($value==2){
            echo "dois<br>";

        } else if ($value == 3) {
            echo "tres<br>";

        }

    }
 
}
?>


<form action="#" method="post">
    <!-- <select class="form-select" id="floatingSelect uf" name="uf" aria-label="Floating label select example">

        <option value="1">Mark</option>
        <option value="2">Jacob</option>
        <option value="3">Larry the Bird</option>


    </select> -->
    <!-- <input type="radio" name="sexo" id="fem" value="1"><label for="fem">Feminino</label>
    <input type="radio" name="sexo" id="masc" value="2"><label for="masc">Masculino</label> -->

    <input class="form-check-input" type="checkbox" name="admin[]" id="admin_visualizar" value="1">
    <label class="form-check-label me-5" for="admin_visualizar">
        Visualizar
    </label>

    <input class="form-check-input" type="checkbox" name="admin[]" id="admin_alterar" value="2">
    <label class="form-check-label me-5" for="admin_alterar">
        Alterar
    </label>

    <input class="form-check-input" type="checkbox" name="admin[]" id="admin_deletar" value="3">
    <label class="form-check-label me-5" for="admin_deletar">
        Deletar
    </label>
    <button type="submit" name="selecionar">selcionar</button>
</form>