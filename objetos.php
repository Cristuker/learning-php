<h1>Objetos</h1>
<?php 

class Pessoa {
    public $idade;

    public function __construct($nome,$idade, $cidade)
    {
        $this->idade = $idade;
        $this->nome = $nome;
        $this->cidade = $cidade;
    }

    function andar(){
        echo nl2br("andando... \n");
    }

    public function getIdade(){
        return "<br>" . PHP_EOL . $this->idade;
    }

    public function falar() {
        echo "falando...";
    }

    public function getNome() {
        return "<br>" . PHP_EOL . $this->nome;
    }

    public function getCidade() {
        return "<br>" . PHP_EOL . $this->cidade;
    }
}

$cristian = new Pessoa("Cristian", 21, "Guarujá");
$cristian->andar();

echo nl2br($cristian->idade . "\n");
echo $cristian->getIdade();
class Foo
{
    public $bar = 'propriedade';

    public function bar() {
        return 'métod';
    }
}


$obj = new Foo();
echo "teste" . PHP_EOL . "teste2";
echo "salve";
echo "<br><br>";
$pessoa2 = new Pessoa("Laiane", 21, "Guarujá");
echo nl2br("Pessoa2:\n");
echo $pessoa2->nome , PHP_EOL. $pessoa2->idade , PHP_EOL , $pessoa2->cidade;
# PHP_EOL funcina só no terminal
class Pessoa2 extends Pessoa {
    public function getTudo() {
        echo parent::getCidade();
        echo parent::getIdade();
        echo parent::getNome();
    }
    public function andar(){
        echo "andando pra cacete";
    }
}

echo "<br><br>";
$person2 = new Pessoa2("Neide", 40, "Osasco");
echo $person2->getTudo();
echo "<br>";
echo $person2->andar();
echo "<br><br>";
$nameT = readline("nome: ");
echo nl2br("$nameT \n");
?>
