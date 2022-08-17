<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .divButton .buttonDefault{
            background-image: linear-gradient(
                to right,
                #0ba360,
                #3cba92,
                #30dd8a,
                #2bb673
            );
            box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);

            color: var(--textColor);
            border: none;
            border-radius: 3px;

            width: 50vw;
            height: 5vh;

            cursor: pointer;

            padding: 1vh;
        }
        .divButton .buttonDefault:hover{
            transition: width 0.5s ease-in-out;
            width: 55vw;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" id="nome" placeholder="Digite o gênero: ">
        <button class="buttonDefault">Enviar</button>
    </form>
</body>
</html>
<?php
    include('biblioteca.php');

    if($_POST){
        $resultado = CadastrarGenero($_POST['nome']);
        if($resultado['erro']){
          echo "Gênero inválido!!";
        } else{
            echo '/FOI KRAI';           
        }
    }
      
?>