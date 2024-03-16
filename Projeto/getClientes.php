<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')/*So ira permitir GET*/{

    $token = $_GET['token'];
    echo $token;

    if ($token == "daazi2024"){
        ##Lé somente uma vez
        include_once "db_modelo.php";
        ## $variavel 
        $statemente = $pdo->prepare("SELECT * FROM cliente");
        ##Manda execultar a valor da variavel como um comando SQL
        $statemente->execute();

        /*fetchAll -> desassocia os valores da variavel em um array*/
        $results = $statemente->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>".print_r($results)."</pre";
        $json = json_encode($results); /*Retorna um json*/
echo $json;
    }else{
        echo "Não autorizado";
    }

}else{
    echo "Acesso Negado";
}
