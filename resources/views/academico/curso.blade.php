@if(session('logged'))
    @extends('home')

    @section('action_btn')

        <div class="header">
            <h2>Lista de cursos</h2>
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

        @foreach ($cursos as $curso)
            <div class="card">
                    <div class="card-body" style="text-align: left">
                        <?php $codcurso  = $curso['codigo_curso']?>
                        {{$curso['nombre_curso']}}
                        @foreach ($bimestres as $bimestre)
                        <?php $codbimestre  = $bimestre['codigo_bimestre']?>
                        <a href="{{ route('matricula', [$coddocente,$codcurso,$codbimestre] )}}" class="btn btn-success"> {{$bimestre['nombre_bimestre']}}</a>
                        @endforeach
                    </div>
            </div>
        @endforeach

    @endsection
@endif