<?php

setcookie('color', '', time()-60*60*24*365);
setcookie('tamany', '', time()-60*60*24*365);

header('Location: index.php');

?>
