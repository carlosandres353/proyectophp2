<?php
session_start();

$valor1 = isset($_SESSION["valor1"]) ? $_SESSION["valor1"] : 'Valor no establecido';
echo $valor1;
?>



<?php
if (isset($_POST['password'])) {
    $password = $_POST['password'];

    if ($password == 'user' or $password == 'admin' ) {
      
        header('Location: welcome.php');
        exit;
    } else {
        echo "Contraseña incorrecta.";
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Desbloquear">
</form>