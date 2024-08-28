<?php require("cabecalho.php");?>

<h1>Exercício 7 - Desempenho do projeto</h1>
<form action="exer7.php" method="POST">
<div class="row">
    <div class="col-6">
        <label  for="prazo_proj"> Quantidade de dias previstos para o projeto: </label>
        <input type="number" id="prazo_proj"
            name="prazo_proj" class="form-control">
            <br><br>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <label for="total_ativ" class="form-label"> Total de atividades do projeto </label>
        <input type="number" id="total_ativ"
            name="total_ativ" class="form-control">
            <br><br>
    </div>
</div>
<div class="row">    
    <div class="col-6">
        <label for="atividade_realiz" class="form-label"> Total de atividades realizadas</label>
        <input type="number" id="atividade_realiz"
            name="atividade_realiz" class="form-control">
            <br><br>
    </div>   
</div>

<div class="row">    
    <div class="col-6">
        <label for="atividade_dia" class="form-label"> Total de atividades realizadas pela equipe ao dia</label>
        <input type="number" id="atividade_dia"
            name="atividade_dia" class="form-control">
            <br><br>
    </div>   
</div>


<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-success">Calcular o desempenho do projeto</button>
        <br><br>
    </div>
</div>
</form>

<?php
require( "funcao.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prazo_proj = $_POST['prazo_proj'];
    $total_ativ = $_POST['total_ativ'];
    $atividade_realiz = $_POST['atividade_realiz'];
    $atividade_dia = $_POST['atividade_dia'];
    desempenho_projet($prazo_proj, $total_ativ, $atividade_realiz, $atividade_dia);
   
}
  require("rodape.php"); ?>