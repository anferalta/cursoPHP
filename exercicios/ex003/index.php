<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário = Octal
        // $num = 010;
        // $num = 300;
        // echo "O valor da variável é $num"

        // $v = "gustavo";
        // var_dump($v)
        // $num = 3e2;
        // echo "O valor é $num"
        // var_dump($num);
        // $num = "950";
        // $num = (int) "950";
        // var_dump($num);

        //$vet = [6, 2.5, "Maria", 3, false];
        //var_dump($vet)

        // class Pessoa {
        //    private string $nome;
        //}
        //$p = new Pessoa;
        //var_dump($p)

        const CANAL = "Curso em Video \u{1F499}";
        echo "Eu adoro o " . CANAL; 
        echo "estamos no ano de " . date('Y');
    ?>
</body>
</html>