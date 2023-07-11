<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ex06</title>
</head>
<body>
        <?php
            $dividendo = $_GET["d1"] ?? 0;
            $divisor = $_GET["d2"] ?? 1;
        
        ?>


    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="" min="0" value="<?=$dividendo?>" step="0.01">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="" min="1" value="<?=$divisor?>" step="0.01">
            <input type="submit" value="dividir">

    
        </form>


    </main>

    <section>
        <h2>Estrutura da Divisão</h2>

        <?php 
            $quociente = intdiv($dividendo,$divisor);
            $resto = $dividendo %  $divisor ;
          
        
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>

    </section>
</body>
</html>
