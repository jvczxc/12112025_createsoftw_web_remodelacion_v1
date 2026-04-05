<?php
function validar_email($email)
{
    $disponibles = array('gmail.com', 'hotmail.com', 'hotmail.es', 'yahoo.com', 'yahoo.es', 'outlook.com', 'msn.com', 'outlook.es');
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        return false;
    }

    $atPos = strpos($email, '@');
    if ($atPos === false) {
        return false;
    }

    $emailDomain = strtolower(substr($email, $atPos + 1));
    return in_array($emailDomain, $disponibles, true);
}

if (isset($_POST['email'])) {
    $email = trim((string) $_POST['email']);

    if (!validar_email($email)) {
        echo "<h2 class='text-uppercase section-heading peligro' id='emerg'>Ingrese un Email correcto (Yahoo, Gmail, Hotmail, msn o outlook) otros no son admitidos.</h2>";
        die("<script>
(function() {
setInterval(function(){
  var el = document.getElementById('emerg');
  if(el.className == 'text-uppercase section-heading peligro'){
      el.className = 'text-uppercase section-heading peligro on';
  }else{
      el.className = 'text-uppercase section-heading peligro';
  }
},500);
})();
</script>");
    }

    echo "<h2 class='text-uppercase section-heading exito' id='blink'>Correo disponible</h2>";
    die("<script>
(function() {
setInterval(function(){
  var el = document.getElementById('blink');
  if(el.className == 'text-uppercase section-heading exito'){
      el.className = 'text-uppercase section-heading exito on';
  }else{
      el.className = 'text-uppercase section-heading exito';
  }
},500);
})();
</script>");
}