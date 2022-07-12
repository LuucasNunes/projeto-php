   <?php
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);
        $result;
   
    if($imc < 18.5){
        echo "você está abaixo do peso";
    }
    else if($imc <= 24.9){
        echo "você está com o peso normal";
    }
    else if($imc <= 29.9){
        echo "você está com sobrepeso";
    }
    else if($imc <= 34.9){
        echo "você está com sobrepeso I";
    }
    else if($imc <= 39.9){
        echo "você está com sobrepeso II";
    }
    else {
        echo "você está com sobrepeso III";
    }
    header("refresh:5;url=index.php");
   ?>
