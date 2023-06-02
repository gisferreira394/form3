<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
        <div class="row">
            <div class= "col 6 mx-auto text-center " >
            <h2> Tabuada </h2>
        <input type = "number" placeholder = "..." name ="numero"><br>
        <button type="submit" name ="verificar">calcular</button>
        </div></div>

    </form>

    <?php
    if(isset($_POST["verificar"])){
        $n = $_POST["numero"];

    for ($i = 1; $i<=10; $i++){
        $resultado = $n * $i;

        echo "$n  X  $i  =  $resultado <br>";
    }
}




?>



</body>
</html>