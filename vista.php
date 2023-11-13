<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORROTO LIBRARY</title>
    <style>
        body {
            background-color: darkslategrey; 
            display: flex;
            flex-direction: column;
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1, h2 {
            color: chocolate; 
            text-decoration: underline;
        }

        .green-text {
            color: #006400; 
        }

        .red-text {
            color: #8b0000; 
        }

        .material-container {
            background-color: #fff;
            border: 1px solid #dcdcdc;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>Biblioteca</h1>

    <div class="material-container">
        <h2>Libros antes de ser prestados</h2>
        <?php echo $materiales[0]; ?>
        <?php echo $materiales[1]; ?>
    </div>

    <div class="material-container">
        <h2>DVDs antes de ser prestados</h2>
        <?php echo $materiales[2]; ?>
        <?php echo $materiales[3]; ?>
    </div>

    <div class="material-container">
        <h2>Prestamos el libro</h2>
        <?php echo $materiales[0]->prestar(); ?>
        <?php echo $materiales[0]; ?>
    </div>

    <div class="material-container">
        <h2>Prestamos el DVD</h2>
        <?php echo $materiales[3]->prestar(); ?>
        <?php echo $materiales[3]; ?>
    </div>

    <div class="material-container">
        <h2>Intentamos volver a tomar prestado el mismo DVD</h2>
        <?php echo $materiales[3]->prestar(); ?>
        <?php echo $materiales[3]; ?>
    </div>

    <div class="material-container">
        <h2>Devolvemos los materiales</h2>
        <?php echo $materiales[0]->devolver(); ?>
        <?php echo $materiales[0]; ?>
        <?php echo $materiales[3]->devolver(); ?>
        <?php echo $materiales[3]; ?>
    </div>

    <div class="material-container">
        <h2>Intentamos devolver material no prestado</h2>
        <?php echo $materiales[2]->devolver(); ?>
        <?php echo $materiales[2]; ?>
    </div>
</body>

</html>
