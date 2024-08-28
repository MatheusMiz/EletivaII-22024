<?php require("cabecalho.php");?>

<h1>Exercício 2- Salário semanal</h1>
<form action="exer2.php" method="POST">
<div class="row">
    <div class="col-6">
        <label for="horas_mensal"> Digite a quantidade de horas trabalhadas no mês</label>
        <input type="number" id="horas_mensal"
            name="horas_mensal" class="form-control">
            <br>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <label for="valor_hora" class="form-label"> Informe o valor da hora:</label>
        <input type="number" id="valor_hora"
            name="valor_hora" class="form-control">
            <br>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-success">Calcular o valor semanal</button>
        <br>
    </div>
</div>

</form>

<?php
require( "funcao.php"); 
 if($_POST){
    $horas_mensal = $_POST['horas_mensal'];
    $valor_hora = $_POST['valor_hora'];
    valor_semanal($horas_mensal, $valor_hora);
}
  
  require("rodape.php"); ?>