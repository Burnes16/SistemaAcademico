@if(session('logged'))
    @extends('home')

    @section('action_btn')

        <div class="header">
            <h2>Registro de Notas</h2>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h4 class="card-title">Docente: {{$datos}}</h4>
                <h5 class="card-subtitle mb-2 text-muted">Bimestre: {{$nombimestre}}</h6>
                <h5 class="card-subtitle mb-2 text-muted">Curso: {{$nomcurso}}</h6>
                <h5 class="card-subtitle mb-2 text-muted">Grado: {{$nomgrado}}</h6>
            </div>
          </div>
        <!-- Lista de Alumno -->
          <div class="info">
            <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Apellidos y Nombres</th>
                            <th>Examen Escrito</th>
                            <th>Examen Oral</th>
                            <th>Exposición</th>
                            <th>Practica</th>
                            <th>Tarea</th>
                            <th>Promedio Final</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>    
                        @foreach ($notas as $nota)    
                        <form action="{{route('registro')}}" method="POST">
                            @csrf
                            <tr>
                                <th style="display: none">
                                    <input type="text" class="form-control" name="codigo_bimestre" value="{{$codbimestre}}">
                                </th>
                                <th style="display: none">
                                    <input type="text" class="form-control" name="codigo_curso" value="{{$codcurso}}">
                                </th>
                                <th style="display: none">
                                    <input type="text" class="form-control" name="codigo_alumno" value="{{$nota->codigo_alumno}}">
                                </th>
                                <th>
                                    <p>{{$nota->apellido1_alumno." ".$nota->apellido2_alumno.", ".$nota->nombre1_alumno." ".$nota->nombre2_alumno}}</p>
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_examenescrito" value="{{$nota->nota_examenescrito}}">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_examenoral" value="{{$nota->nota_examenoral}}">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_exposicion" value="{{$nota->nota_exposicion}}">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_practica" value="{{$nota->nota_practica}}">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="nota_tarea" value="{{$nota->nota_tarea}}">
                                </th>
                                <th>
                                    <input type="number" class="form-control" name="promedio_final" value="{{$nota->promedio_final}}" disabled>
                                </th>
                                <td colspan="2">
                                    <button class="btn btn-primary">Guardar</button>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
            </table>
    </div>

    @endsection
@endif