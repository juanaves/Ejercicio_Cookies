<?php 

include 'head.php';
$usuario="";
$pass="";

if(isset($_REQUEST['entrar']))//si has pulsado el boton entrar
{
    
        if($_REQUEST['guardar_clave'])//si has pulsado el ckeck
        {
            setcookie('user', $_REQUEST['usuario'], + time() + 3600); //cookie para el usuario
            setcookie('clave', $_REQUEST['clave'], time() + 3600);//cookie para la clave
        }
    
}//fin de entrar
if(isset($_COOKIE['user']))   
    {
       
        $usuario= $_COOKIE['user'];
        $pass= $_COOKIE['clave'];
    }
    

    

echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'" required></td>
</tr><tr>
<td>Clave:</td>
<td><input type="password" name="clave" value="'.$pass.'" required></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" value="Entrar" name="entrar"></td>
</tr>
</table>
</form> ';



include 'pie.php';