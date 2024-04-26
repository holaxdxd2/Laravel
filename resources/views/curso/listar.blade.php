<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1>Listar cursos</h1>
<table>
    @foreach ($cursos as $curso)
    <tr>
        <br>
        <td>{{$curso->name}}</td>
        <td>{{$curso->descripcion}}</td>
        <td>{{$curso->urlPdf}}</td>
        <td> <iframe src="{{ 'http://localhost/laravel/public/storage/imagenes/' .$curso->urlPdf }}"  frameborder="0"></iframe></td>
        <td> <a href="{{ route('curso.show', $curso ->id) }}"> Mostrar </a></td>
        <td>
        <td> <a href="{{ route('curso.edit',$curso->id)}}">Editar</a></td>
    </td>
        <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
            @csrf
            @method('delete')

         </form>
         <button type="submit" class="btn btn-danger">Eliminar</button>
         <a href="{{ url('cursos/create') }}" class="btn btn-primary">Crear Nuevo</a>
<!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearModal">
    Crear Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearModalLabel">Crear Nuevo Curso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Aquí se cargará el contenido de la vista de creación -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Cuando se hace clic en el botón "Crear Nuevo"
        $('button[data-target="#crearModal"]').click(function() {
            // Realizar una petición Ajax para obtener la vista de creación
            $.get("{{ route('curso.create') }}", function(data) {
                // Insertar la vista de creación en el cuerpo del modal
                $('#crearModal .modal-body').html(data);
            });
        });
    });
</script>
    </tr>@endforeach
</table>
</body>
</html>
