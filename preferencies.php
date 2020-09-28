<form action ="<?php echo( $_SERVER['PHP_SELF']); ?>" method = "post">
 
    Entra el tamany de la font:<br>
    <select name='tamany'>
    <option value='10'>10</option>
    <option value='12'>12</option>
    <option value='14'>14</option>
    <option value='20'>20</option>
    </select> <br>
    Entra el color de la font:<br>
    <input type = "radio" name = "color" value = "red">Vermell
    <input type = "radio" name = "color" value = "green">Verd
    <input type = "radio" name = "color" value = "blue">Blau
    <br><br>
    <input type = "submit" name="enviar" value = "Enviar">
    </form> 


<?php
 if(isset($_POST['enviar']))
 {
    if(isset($_POST['tamany']) )  
               setcookie('tamany',$_POST['tamany'],time()+60*60*24*365);
    
    if(isset($_POST['color']) && $_POST['color']!="")  
               setcookie('color',$_POST['color'],time()+60*60*24*365);
    
    header('Location: index.php');
    
 }
 
 ?>