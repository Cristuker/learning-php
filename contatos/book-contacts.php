<?php 
require_once './contato.php';

$contatos = array();
$option = 9;

while($option != 0 ){
    echo "\n";
    echo <<<MENU
    *********************
    * Livro de contatos *
    *********************

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
            echo "-> ";
            $nome = readline();
            echo "\n";
            echo "Digite o telefone: \n";
            echo "-> ";
            $telefone = readline();
            echo "\n";
            echo "Digite o email: \n";
            echo "-> ";
            $email = readline();
            echo "\n";
            echo "Digite a data de nascimento no formato (11/01/1999): \n";
            echo "-> ";
            $nasc = readline();
            echo "\n";
            $novoContato = new Contact($nome, $telefone, $email, $nasc);
            echo "\n \n";
            echo "Contato criado com sucesso \n";
            array_push($contatos, $novoContato);
            $novoContato->getInfos();
            echo "\n \n";

            break;
        case 2:
            echo "Deletar contato";
            echo "\n\n";
            echo "Passe o id do contato: \n";
            echo "-> ";
            $id = readline();
            unset($contatos[$id]);
            $contatos = array_values($contatos);
            break;
        case 3:
            echo "Listar todos os contatos";
            echo "\n\n";
            for ($i=0; $i < sizeof($contatos) ; $i++) { 
                echo "\nid: $i\n";
                echo $contatos[$i]->getInfos();
                echo "\n";
            }
            
            break;
        case 4:
            echo "Editar contato";
            echo "\n\n";
            echo "Passe o id do contato: \n";
            echo "-> ";
            $id = readline();
            echo "O que você deseja editar?: \n";
            echo <<<OP
            1. Nome
            2. Telefone
            3. Email
            4. Data de Nascimento
            5. Tudo
            OP;
            echo "-> ";
            $option = readline();
            switch ($option) {
                case 1:
                    echo "Novo nome: \n";
                    echo "-> ";
                    $novoNome = readline();
                    $contatos[$id]->setNome($novoNome);
                    break;
                case 2:
                    echo "Novo telefone: \n";
                    echo "-> ";
                    $novoTelefone = readline();
                    $contatos[$id]->setTel($novoTelefone);
                    break;
                case 3:
                    echo "Novo email: \n";
                    echo "-> ";
                    $novoEmail = readline();
                    $contatos[$id]->setEmail($novoEmail);
                    break;
                case 4:
                    echo "Novo Data de Nascimento: \n";
                    echo "-> ";
                    $novoNasc = readline();
                    $contatos[$id]->setNasc();
                    break;
                case 5: 
                    echo "Novo nome: \n";
                    echo "-> ";
                    $novoNome = readline();

                    echo "Novo telefone: \n";
                    echo "-> ";
                    $novoTelefone = readline();

                    echo "Novo email: \n";
                    echo "-> ";
                    $novoEmail = readline();

                    echo "Novo Data de Nascimento: \n";
                    echo "-> ";
                    $novoNasc = readline();

                    $contatos[$id] = new Contact($novoNome, $novoTelefone, $novoEmail, $novoNasc);
                    break;
                
                default:
                    echo "Insira uma opção válida...\n";
                    break;
            }
            echo "\n\n";
            echo "Contato editado com sucesso!";
            break;
        case 0:
            exit();
            break;
        default:
            echo "Digite uma opção válida";
            break;
    }
}


