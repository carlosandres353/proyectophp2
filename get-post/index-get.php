<?php
// Si se ha enviado el formulario por GET
if (isset($_GET['search']) && !empty($_GET['search'])) {
    // Mostramos el valor de la variable search
    echo "El libro buscado es: {$_GET['search']}";
} else {
    echo "El campo buscar está vacío";
}
?>

<!-- Formalario para la busqueda de libros por GET -->
<form action="index.php" method="get">
    <input type="text" name="search" placeholder="Buscar libro">
    <input type="submit" value="Buscar">
</form>