<?php
print_r($_POST);
session_start();
require_once('config/_db.php');


switch($_POST['type']):
    case 'register':
        $statement = "INSERT INTO users (name, email, password, facname) VALUES(:name, :email, :password, :facname)"; 

        $insert = $conn->prepare($statement);
        $insert->bindValue(':name', $_POST['name']);
        $insert->bindValue(':email', $_POST['email']);
        $insert->bindValue(':password', $_POST['password']);
        $insert->bindValue(':facname', $_POST['facname']);
        $insert->execute();

    break;

    case 'login':
        $statement = "SELECT * FROM users WHERE email = '".$_POST['email']."';"; 
        $query = $conn->query($statement);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $row = $query->fetch();

        if(empty($row))
        {
            $_SESSION['err'] = 'User does not exist';
            go();
        }

        if($row['password'] == $_POST['password'])
        {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['user'] = $row['name'];
        } else
        {
            $_SESSION['err'] = 'Wrong Password';
        }
        go();
        
        break;

        case 'logout':
            session_destroy();
            unset($_SESSION);

        break;

    default:
        die('Invalid Action. Please report this incident.');

endswitch;
go();

function go()
{
    header('Location: index.php');
}
?>