<?php
require '../includes/funciones.php';
$auth = estaAutenticado();


if(!$auth) {
    header('Location: / ');
}
//importar la conexion

require '../includes/config/database.php';
$db = conectarDB();

//escribir el query
$query = "SELECT * FROM bienesraices_crud.propiedades;";

//consultar la DB
$resultadoConsulta = mysqli_query($db, $query);

//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        //Eliminar archivo
        $query ="SELECT `imagen` FROM `bienesraices_crud`.`propiedades` WHERE `id` = '$id'";

        $resultado = mysqli_query($db, $query); 
        $propiedad = mysqli_fetch_assoc($resultado);

         unlink('../imagenes/' . $propiedad['imagen']);



        // Eliminar propiedad
        $query = "DELETE FROM `bienesraices_crud`.`propiedades` WHERE `id` = '$id'";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /admin?resultado=3');
        }

    }
}




 incluirTemplate('header');
 ?>

    <main class="contenedor seccion">
        <h1>Administrador de Servicios</h1>
        <?php if ( intval($resultado) === 1): ?>
            <p class=  "alerta exito">Anuncio creado correctamente</p>
            <?php elseif(intval( $resultado ) === 2): ?>
            <p class=  "alerta exito">Anuncio Actualizado correctamente</p>
            <?php elseif(intval( $resultado ) === 3): ?>
            <p class=  "alerta exito">Anuncio Eliminado correctamente</p>
            <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody><!-- Mostrar los resultados-->
                <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"></td>
                    <td><?php echo $propiedad['precio']; ?></td>
                    <td>
                        <form method="POST" class="W-100">
                         
                        <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">

                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form> 

                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>"class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php

//cerrar la conexion
mysqli_close($db);

incluirTemplate('footer');
 ?>