<?php
    
    function valor_semanal($horas_mensal, $valor_hora)
    {
        $semanal = ($horas_mensal * $valor_hora)/4.5;
        echo "O valor semanal recebido é de: ".number_format($semanal,2,",",".");
    }
    
    function calcular_lucro($lucro_emp, $nome_func, $nota_desemp)
    {
        $lucro_func = ($lucro_emp * $nota_desemp / 100);
        echo "<br> O valor de lucro anual recebido pelo $nome_func é de: " .number_format($lucro_func,2,",",".");
    }

    function verificar($nome_funcionario, $horas_disponiveis, $nivel_experiencia, $nome_tarefa, $horas_tarefa, $complexidade) {
        $horas_necessarias = $horas_tarefa * 1.1;
    
        if ($horas_disponiveis < $horas_necessarias) {
            return "O funcionário $nome_funcionario não tem horas disponíveis suficientes para realizar a tarefa $nome_tarefa.";
        }
    
        if (
            ($nivel_experiencia == "junior" && $complexidade != "baixa") ||
            ($nivel_experiencia == "pleno" && $complexidade == "alta")
        ) {
            return "O funcionário $nome_funcionario não possui nível de experiência suficiente para realizar a tarefa de complexidade $complexidade.";
        }
    
        return "O funcionário $nome_funcionario pode realizar a tarefa $nome_tarefa.";
    }

    function calcular_ferias($dias_trab, $nome_func)
    {
        $dias_ferias = floor($dias_trab / 30);
        if ($dias_ferias > 30){
            $dias_ferias = 30;
        }

        echo "<h6><br>Com $dias_trab dias trabalhados, o funcionário $nome_func tem direito a $dias_ferias dia(s) de férias.</h6>";
    }

    function custo_total($horas_prev,  $custos_adic, $taxa_hora)
    {
        $custo_mao_de_obra = $horas_prev * $taxa_hora;
        $custo_total = $custo_mao_de_obra + $custos_adic;

        echo "<h1>Resultado da estimativa de custo</h1>";
        echo "<p> Custo da mão de obra: R$" .number_format($custo_mao_de_obra, 2, ',', '.') . "</div>";
        echo "<p> Custo total previsto para o projeto: R$" .number_format($custo_total, 2, ',', '.') . "</div>";
    }

    function desempenho_projet($prazo_proj, $total_ativ, $atividade_realiz, $atividade_dia)
    {
       $atividade_rest = $total_ativ - $atividade_realiz ;
       $dias_para_concluir = ceil($atividade_rest / $atividade_dia);

       $dias_restantes = $prazo_proj - (floor($atividade_realiz / $atividade_dia));
    
        echo "<h3>Avaliação do Desempenho do Projeto</h3>";
        echo "<p>Total de atividades: $total_ativ</p>";
        echo "<p>Atividades concluídas: $atividade_realiz</p>";
        echo "<p>Atividades restantes: $atividade_rest</p>";
        echo "<p>Produtividade da equipe: $atividade_dia atividades por dia</p>";
        echo "<p>Dias necessários para concluir o projeto: $dias_para_concluir</p>";
        echo "<p>Prazo restante: $dias_restantes dias</p>";
        
        if ($dias_para_concluir <= $dias_restantes) {
            echo "<p>Status do projeto: Dentro do prazo</p>";
        } else {
            echo "<p>Status do projeto: Atrasado</p>";
        }
}