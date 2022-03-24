<?php
session_start();
if (!empty($_SESSION['nom'])){
    echo "bonjour ".$_SESSION['nom']." heureux de te revoir";
?>
<ul>
    <li>Sommaire</li>
    <li>Merci</li>
    <li>De rien</li>
</ul>
 
<?php    
}
else
{
    echo "Erreur de Login </br>";
    
    echo "<a href='login.html'> Retour login</a>";

}
?>