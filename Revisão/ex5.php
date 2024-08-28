<?php require("cabecalho.php");?>

<h1>Exercício 5 - Calculo de férias</h1>
<form action="exer5.php" method="POST">
<div class="row">
    <div class="col-6">
        <label for="nome_func"> Nome do funcionário:</label>
        <input type="text" id="nome_func"
            name="nome_func" class="form-control">
            <br>
    </div>
</div> 

<div class="row">
    <div class="col-6">
        <label for="dias_trab"> Informe a quantidade de dias trabalhados</label>
        <input type="number" id="dias_trab"
            name="dias_trab" class="form-control">
            <br>
    </div>
</div> 
    
<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-success">Calcular dias de férias</button>
    </div>
</div>
</form>

<?php
require( "funcao.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dias_trab = intval($_POST['dias_trab']);
    $nome_func = $_POST['nome_func'];
    calcular_ferias($dias_trab, $nome_func);
   
}
  require("rodape.php"); ?>