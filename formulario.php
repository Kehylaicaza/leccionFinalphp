<html>
<head>
	<meta charset="utf-8">
	<title>Formulario </title>
<link href="css/bootstrap.css" rel="stylesheet">
          
</head>
<body>
    <header>
        <h1>Formulario</h1>

     </header>
    <div>
                <h1>Datos</h1>
                <form class="login" method="post" action="save_formulario.php">
                    <label >Nombre </label>
                    <input type="text" name="nombre">

                    <br>

                    <label>Parcial</label>
                   <input type="text" name="parcial">
                     <br>
                      <label>Final</label>
                   <input type="text" name="finall">
                     <br>
                      <label>Parcial</label>
                   <input type="text" name="mejoramiento">
                    
                  

                    <br><br>
                    <button type="submit">Ingresar</button>

                </form>
        <a href="read_alumnos.php">mostrar</a>
            </div>
    </body>
</html>
