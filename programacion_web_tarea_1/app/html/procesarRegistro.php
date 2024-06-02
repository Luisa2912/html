<?php
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if (filter_var($email, FILTER_VALIDATE_EMAIL) && $password1 === $password2) {  echo "Usuario registrado correctamente";
} else {
  echo "Error: Correo electrónico inválido o las contraseñas no coinciden";
}
?>
