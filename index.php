<?php

if(isset($_COOKIE['tamany'])) $tamany = $_COOKIE['tamany'];
else $tamany = 20;

if(isset($_COOKIE['color'])) $color = $_COOKIE['color'];
else $color ='black';
?>

<html>

<body>

<p style="font-size: <?php echo $tamany;?>; color: <?php echo $color ?>">
<?php
echo "Benvingut!";
echo "<table><tr>";
echo "<td><a href='preferencies.php'>editar preferencies </td>";
echo "<td><a href='desconnectar.php'>Desconnectar</td>";
echo "</tr></table>";   
?>


La meva aplicació
</p>

</body>
</html>
