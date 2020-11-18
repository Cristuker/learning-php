<h1>Tipos</h1>
<?php
    $nome = "cristian";
    echo "boolean = ". true ."<br>";
    echo "<br>";
    echo "no php true e false não existem é 0 ou 1 <br>";
    echo "<br>";
    echo "Para checar o tipo e valor de uma expressão, utilize a função var_dump(). <br>";
    var_dump(true);
    echo "<br>";
    echo "gettype ".gettype($nome); #pega o tipo da variavel,as é apenas para ter representação legivel
    echo "<br>";
    if (is_string($nome)){
        echo "meu nome é uma string";
    }
    echo "<br>";
    if(!is_int($nome)){
        echo("meu nome não é uma string");
    }
    echo "<br>";
    $val = 12;
    echo "O tipo de val é " . gettype($val);
    echo "<br>";
    settype($val, "boolean"); #Não preciso settar em nehuma variavel
    echo "O tipo de val agora é " . gettype($val);
    echo "<br>";
    echo "Valor maximo de int é " . PHP_INT_MAX;
    echo "<br>";
    echo "Valor minimo de int é " . PHP_INT_MIN;
    $idade = 21;
    echo "<br>";
    if($idade === 21) {
        echo "velho";
    }
    echo "<br>";
    var_dump((bool) "");        // bool(false)
    echo "<br>";
    var_dump((bool) 1);         // bool(true)
    echo "<br>";
    var_dump((bool) -2);        // bool(true)
    echo "<br>";
    var_dump((bool) "foo");     // bool(true)
    echo "<br>";
    var_dump((bool) 2.3e5);     // bool(true)
    echo "<br>";
    var_dump((bool) array(12)); // bool(true)
    echo "<br>";
    var_dump((bool) array());   // bool(false)
    echo "<br>";
    var_dump((bool) "false");   // bool(true)
    echo "<br>";
    echo "textro \n tex \t tanbdo \r escapes  $idade";
    echo "<br>";
    echo <<<EOD
    Exemplo de uma string
    distribuída $idade em várias linhas
    utilizando a sintaxe heredoc.
    
    EOD;
    $nome = "cristian";
    echo "<br>";
    echo "Meu nome é ${nome}o";
    echo " {$nome[-2]} ";
    
?>
