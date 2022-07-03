<?php

$conexion = mysqli_connect('localhost', 'root', '', 'dango');

$server = "localhost";
$user = "root";
$passW = "";
$name = "";
$flexRadioDefault = "";

try {
    $conection = new PDO("mysql:host=$server;dbname=dango", $user, $passW);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Poco sexo" . $error;
}
if ($_POST) {
    $name = (isset($_POST['name'])) ? $_POST['name'] : "";
    $flexRadioDefault = (isset($_POST['flexRadioDefault'])) ? $_POST['flexRadioDefault'] : "";
    $sql = "INSERT INTO `personas` (`id`, `name`, `img`) VALUES (NULL, '$name', '$flexRadioDefault');";
    $conection->exec($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Tabla de Dangos</title>
</head>

<body>
    <h1>Lista de DangoBros</h1>
    <table class='table'>

        <tr>

            <th>#</th>

            <th>Nombre</th>

            <th>Dango</th>

        </tr>
        <?php
        $sql = "SELECT * FROM personas";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['name'] ?></td>
                <td><?php switch ($mostrar['img']) {
                        case 'Juan':
                            echo "<img style='width: 60px; height: 60px;' src='https://i.linio.com/p/bbf09fe95a7bd4d5a21735aabc124b41-product.jpg' alt=''>";
                            break;
                        case 'Pedro':
                            echo "<img style='width: 60px; height: 60px;' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8l7-Rghh1aAqDlVK0fuQcGR29E0nWQzGubcg2FfFWwMIjDhoxzN6adoFmhGa0oTe4SSc&usqp=CAU' alt=''>";
                            break;
                        case 'Vladimir':
                            echo "<img style='width: 60px; height: 60px;' src='https://pbs.twimg.com/profile_images/627163286002384896/eXdAlnUH_400x400.png' alt=''>";
                            break;
                        default:
                            echo "tas bien menso a la verga";
                            break;
                    }
                    ?></td>
            </tr>
        <?php } ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>