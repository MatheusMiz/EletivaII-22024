<?php require("cabecalho.php");?>

<h1>Exercício 6 </h1>
<form action="exer6.php" method="POST">
<div class="row">
    <div class="col-6">
        <label  for="horas_prev"> Horas previstas para o projeto: </label>
        <input type="number" id="horas_prev"
            name="horas_prev" class="form-control">
            <br><br>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <label for="taxa_hora" class="form-label"> Taxa por hora do funcionário R$ </label>
        <input type="number" id="taxa_hora"
            name="taxa_hora" class="form-control">
            <br><br>
    </div>
</div>
<div class="row">    
    <div class="col-6">
        <label for="custos_adic" class="form-label"> Custos adicionais: </label>
        <input type="number" id="custos_adic"
            name="custos_adic" class="form-control">
            <br><br>
    </div>
    
</div>


<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-success">Calcular valor total do projeto</button>
        <br><br>
    </div>
</div>
</form>

<?php
require( "funcao.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horas_prev = $_POST['horas_prev'];
    $taxa_hora = $_POST['taxa_hora'];
    $custos_adic = $_POST['custos_adic'];
    custo_total($horas_prev,  $custos_adic, $taxa_hora);
   
}
  require("rodape.php"); ?>