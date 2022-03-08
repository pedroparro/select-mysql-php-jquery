<?php
namespace Controllers;

require("../vendor/autoload.php");
use \Models\ClassDB;

class ControllerSelect
{
    public function selectController()
    {
        //instancia
        $obj = new ClassDB();
        $row=$obj->selectDB(
            "*",
            "cliente",
            "",
            array());

        //while do banco 
        while($rows = $row->fetch(\PDO::FETCH_ASSOC)){
            $id = $rows['id'];
            $nome = $rows['nome'];
            $sobrenome = $rows['sobrenome'];
            $email = $rows['email'];
            //var_dump($rows['id']);
            
            //linhas da tabela
            echo '<tr>
                <td>'.$id.'</td>
                <td>'.$nome.'</td>
                <td>'.$sobrenome.'</td>
                <td>'.$email.'</td>
            </tr>';
        } 
          
    }
}
$obj = new ControllerSelect();
$obj->selectController();
?>

