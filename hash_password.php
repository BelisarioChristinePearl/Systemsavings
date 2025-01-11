<?php
// Replace 'YourDesiredPassword' with the actual password you want to hash
$password = 'Passwordito1'; 
echo password_hash($password, PASSWORD_DEFAULT);
?>
