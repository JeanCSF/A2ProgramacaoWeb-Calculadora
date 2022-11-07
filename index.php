<?php
            $num1 = 0;
            $num2 = 0;
            $op = '';
            $resultado = 0;
            
            if(isset($_POST['num1'], $_POST['num2'], $_POST['op'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $op = $_POST['op'];

                switch ($op) {
                    case 'soma':
                        $resultado = $num1 + $num2;
                        break;
                    case 'subtracao':
                        $resultado = $num1 - $num2;
                        break;
                    case 'multiplicacao':
                        $resultado = $num1 * $num2;
                        break;
                    case 'divisao':
                        $resultado = $num1 / $num2;
                        break;
                }
            }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <main>
        <form name="calculadora" class="container" method="post">
            <div class="title">Calculadora</div>
            <div class="input">
                <label>Número 1: </label>
                <input required value="<?= $num1 ?>" type="text" name="num1">
            </div>
            <div class="input">
                <label>Número 2: </label>
                <input required value="<?= $num2 ?>" type="text" name="num2">
            </div>
            <div class="input">
                <label>Operação: </label>
                <select name="op">
                    <option value="soma" <?= ($op =='soma')?'Selected':'';?>>Somar</option>
                    <option value="subtracao" <?= ($op =='subtracao')?'Selected':'';?>>Subtrair</option>
                    <option value="multiplicacao" <?= ($op =='multiplicacao')?'Selected':'';?>>Multiplicar</option>
                    <option value="divisao" <?= ($op =='divisao')?'Selected':'';?>>Dividir</option>
                </select>
            </div>
            <input type="submit" value="Calcular" name="calcular" id="calcular">
            <div class="result">
            <?php
				if(empty($resultado)){
					echo "Digite os dois números e escolha a operação!";
				}else{
                echo "</br>".$resultado;
				}
            ?>
        </div>
        </form>
    </main>
</body>
</html>