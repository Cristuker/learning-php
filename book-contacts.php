<?php 


require_once './contato.php';


$contatos = array();
$option = 9;

while($option != 0 ){
    echo "\n";
    echo <<<MENU
    Livro de contatos

    1. Adicionar contato.
    2. Deletar contato.
    3. Listar todos os contatos.
    4. Editar contato.
    0. Sair.
    MENU;

    echo "\n";
    echo "-> ";

    $option = readline();
    
    switch ($option) {
        case 1:
            echo "\n";
            echo "Adicionar contatos\n\n";
            echo "Digite o nome: \n";
            $nome = readline();
            echo "Digite o telefone: \n";
            $telefone = readline();
            echo "Digite o email: \n";
            $email = readline();
            echo "Digite a data de nascimento no formato (11/01/1999): \n";
            $nasc = readline();
            $novoContato = new Contact($nome, $telefone, $email, $nasc);
            echo "\n \n";
            echo "Contato criado com sucesso \n";
            array_push($contatos, $novoContato);
            $novoContato->getInfos();

            break;
        case 2:
            echo "Deletar contato";
            break;
        case 3:
            echo "Listar todos os contatos";
            echo "\n\n";
            for ($i=0; $i < sizeof($contatos) ; $i++) { 
                echo "\n";
                echo $contatos[0]->getInfos();
            }
            
            break;
        case 4:
            echo "Editar contato";
            break;
        case 0:
            exit();
            break;
        default:
            echo "Digite uma opção válida";
            break;
    }
}


