<?php
require_once('recaptchalib.php');

$privkey = "6LcGAxkTAAAAAO7QrgeoFiht6BQlsB2S6GXhnaaY"; 
$verify = recaptcha_check_answer($privkey, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);

if ($verify->is_valid) {  
  echo "<h2>Gracias por comentar</h2>";
 
}
else {  
  echo "<h2>Eres un Spamer</h2>";
  echo '<h2><a href="Index.php">Clic aqui para regresar</a></h2>';
}
?>

