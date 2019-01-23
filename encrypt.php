<?php
define ("DB_SERVER","localhost");
define ("DB_USER", "root");
define ("DB_PASS", "");
define ("DB_NAME", "traffic_offence");
define ("TBL_USERS", "admin");
define ("FLD_USER", "Username");
define ("FLD_PASS", "Password");

set_magic_quotes_runtime (0) ;
$connection = mysqli_connect ('localhost', 'root', '' ) or die (mysqli_error());
mysqli_select_db ( 'traffic_offence', $connection) or die (mysqli_error());

$q = "SELECT Password, Username FROM admin";
$result = mysqli_query ($q, $connection);

$total = 0;
$enc = 0;

$doencrypt = false;
if(@$_REQUEST["do"] == "encrypt")
    $doencrypt = true;

while($data = mysqli_fetch_array($result))
{
    if($doencrypt)
    {
        $total++;
        if (!encrypted($data[0]))
        {
            $q = "UPDATE admin SET Password = .md5($data[0]) WHERE Username = '' ";
            str_replace("'", "''",$data[1])."'";
            mysqli_query ($q, $connection);
        }
        $enc++;
    }
 /*   else
    {
        $total++
        //if (encrypted($data[0])) 
        $enc++
    }
*/
}
function encrypted ($str)
{
    if (strlen($str)!=32)
        return false;
    
    for ($i=0; $i<32; $i++)
        if ((ord($str[$i])<ord('0') || ord($str[$i])>ord('9')) && (ord($str[$i])<ord('a') || ord($str[$i])>ord('f')))
        return false;

return true;
}
?>

<html>
<head><title>Encrypt passwords</title></head>
<body>
Total passwords in the table - <?php echo $total; ?><br>
<?php if($enc==$total && $total>0) { ?>
All passwords are encrypted.
<?php } else if($total>0) { ?>
Unencrypted - <?php echo $total-$enc; ?><br><br>
Click "GO" to encrypt <?php echo $total-$enc; ?> passwords.<br>
WARNING! There will be no way to decipher the passwords.<br>
<input type=button value="GO" onclick="window.location='encrypt.php?do=encrypt';">
<?php } ?>
</body>
</html>