<h1>Objetos</h1>
<?php 

class Pessoa {
    public $idade = 21;

    function andar(){
        echo nl2br("andando... \n");
    }

    public function getIdade(){
        return $this->idade;
    }

    public function falar() {
        echo "falando...";
    }
}

$cristian = new Pessoa();
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

class Pessoa2 extends Pessoa {

}
?>
