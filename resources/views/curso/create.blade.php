<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<h1>Crear cursos</h1>

<form action="{{route('curso.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombree:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>
<label >Adjuntar archivo PDF</label>
<br>
<input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">
<br>

<button type="submit">Enviar Formulario:</button>
</form>




</body>
</html>
