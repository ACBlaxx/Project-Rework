<?php
require_once "connection.php";

$email = stripslashes($_POST['email']);
$pass = $_POST['pass'];

$shapassword = sha1($pass);

$sql =mysqli_query($connect,"SELECT * FROM sellers");

while((($row=mysqli_fetch_row($sql))!=FALSE))
{
    $dbmail = $row[2];
    $dbpass = $row[3];

    if(($dbmail == $email)&&($dbpass ==$shapassword))
    {
        session_start();
        $_SESSION['email'] = $row[2];
        $_SESSION['pass'] = $row[3];
        $_SESSION['phone'] = $row[5];
        $_SESSION['loc'] = $row[6];
        $_SESSION['name'] = $row[1];
        $_SESSION['id'] = $row[0];

        break;
    }
}

if(isset($_SESSION['name']))
{
 header('location:dashboard.php');  
}

else
{
    echo "
    <script>
    var x = confirm('Account is not registered. Register?');
    if(x==true)
        window.location('register.php');
        else if(x==false)
        window.location('welcome.php');
    </script>
    ";
}
?>