<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>DangoBros</title>
</head>

<body>
    <br>
    <h1>!Hola!</h1>
    <form action="savingDn.php" method="post">
        <br>
        <div class="form-floating mb-3">
            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Felipe">
            <label for="floatingInput">¿cual es tu nombre?</label>
        </div>
        <hr>
        <h2>Escoje a un Dango</h2>
        <section class="layout">
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pngitem.com/pimgs/m/408-4089594_dango-daikazoku-png-6-png-image-dango.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Juan</h5>
                        <p class="card-text">te voy a resumir mi México así que guarda un segundo, tenemos una de la 7 maravillas del mundo infeliz aquí somos la tierra del maíz</p>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Juan">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Quiero este!
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8l7-Rghh1aAqDlVK0fuQcGR29E0nWQzGubcg2FfFWwMIjDhoxzN6adoFmhGa0oTe4SSc&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pedro</h5>
                        <p class="card-text">te voy a resumir mi México así que guarda un segundo, tenemos una de la 7 maravillas del mundo infeliz aquí somos la tierra del maíz</p>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Pedro">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Quiero este!
                        </label>
                        <!-- <a type="submit" href="" class="btn btn-primary">Seleccionar</a> -->
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="https://pbs.twimg.com/profile_images/627163286002384896/eXdAlnUH_400x400.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vladimir</h5>
                        <p class="card-text">te voy a resumir mi México así que guarda un segundo, tenemos una de la 7 maravillas del mundo infeliz aquí somos la tierra del maíz</p>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Vladimir">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Quiero este!
                        </label>
                        <!-- <a type="submit" href="" class="btn btn-primary">Seleccionar</a> -->
                    </div>
                </div>
            </div>
        </section>
        <button type="submit" class="btn btn-primary">Aceptar!</button>
    </form>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>