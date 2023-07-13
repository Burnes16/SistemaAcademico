<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Matricula;
use App\Models\Curso;
use App\Models\Grado;
use App\Models\Bimestre;
use App\Models\NotaBimestre;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Switch_;

class CursoController extends Controller
{
    public function index($coddocente)
    {
        if (!session('logged')) {
            return redirect('/')->withErrors(['ERROR' => 'Debes logearte primero']);
        }

        $docente = Docente::where('codigo_docente', $coddocente)->first();
        if (!$docente) {
            return redirect('/')->withErrors(['ERROR' => 'No se encontró el docente']);
        }
        $datos = $docente->nombre1_docente . " " . $docente->apellido1_docente . " " . $docente->apellido2_docente;

        $cursos = $docente->cursos;
        $title = 'Lista Cursos';

        $bimestres = Bimestre::all();

        return view('academico.curso', compact('cursos', 'title', 'coddocente', 'datos', 'bimestres'));
    }

    public function matricula($coddocente, $codcurso, $codbimestre)
    {
        if (!session('logged')) {
            return redirect('/')->withErrors(['ERROR' => 'Debes logearte primero']);
        }

        $docente = Docente::where('codigo_docente', $coddocente)->first();
        if (!$docente) {
            return redirect('/')->withErrors(['ERROR' => 'No se encontró el docente']);
        }
        $datos = $docente->nombre1_docente . " " . $docente->apellido1_docente . " " . $docente->apellido2_docente;

        $matricula = Matricula::where('codigo_docente', $coddocente)->first();
        if (!$matricula) {
            return redirect('/')->withErrors(['ERROR' => 'No se encontró ninguna matrícula para el docente']);
        }
        $codmatricula = $matricula->codigo_matricula;

        $curso = Curso::where('codigo_curso', $codcurso)->first();
        $nomcurso = $curso->nombre_curso;
        $codcurso = $curso->codigo_curso;

        $grado = Grado::where('codigo_grado', $matricula->codigo_grado)->first();
        $nomgrado = $grado->nombre_grado . " " . $grado->seccion_grado;

        $bimestre = Bimestre::where('codigo_bimestre', $codbimestre)->first();
        $nombimestre = $bimestre->nombre_bimestre;
        $codbimestre = $bimestre->codigo_bimestre;
        
        // Obtener el mes actual
        $mesActual = date('F');

        // Validación del bimestre según el mes actual
        if ($codbimestre === 1 && $mesActual !== 'April') {
            return back()->withErrors(['ERROR' => 'El bimestre ya no está disponible, se encuentra fuera del tiempo establecido']);
        } elseif ($codbimestre === 2 && $mesActual !== 'May') {
            return back()->withErrors(['ERROR' => 'El bimestre ya no está disponible, se encuentra fuera del tiempo establecido']);
        } elseif ($codbimestre === 3 && $mesActual !== 'June') {
            return back()->withErrors(['ERROR' => 'El bimestre ya no está disponible, se encuentra fuera del tiempo establecido']);
        } elseif ($codbimestre === 4 && $mesActual !== 'July') {
            return back()->withErrors(['ERROR' => 'El bimestre ya no está disponible, se encuentra fuera del tiempo establecido']);
        }
        

        $notas = DB::table('alumnos AS a')
        ->select(
            'b.codigo_bimestre',
            'c.codigo_curso',
            'a.codigo_alumno',
            'a.nombre1_alumno',
            'a.nombre2_alumno',
            'a.apellido1_alumno',
            'a.apellido2_alumno',
            'nb.nota_examenescrito',
            'nb.nota_examenoral',
            'nb.nota_practica',
            'nb.nota_exposicion',
            'nb.nota_tarea',
            'nb.promedio_final'
        )
        ->leftJoin('notasbimestres AS nb', function ($join) use ($codbimestre, $codcurso) {
            $join->on('a.codigo_alumno', '=', 'nb.codigo_alumno')
                ->where('nb.codigo_bimestre', $codbimestre)
                ->where('nb.codigo_curso', $codcurso);
        })
        ->leftJoin('matriculas AS m', 'a.codigo_matricula', '=', 'm.codigo_matricula')
        ->leftJoin('docentes AS d', 'm.codigo_docente', '=', 'd.codigo_docente')
        ->leftJoin('bimestres AS b', 'b.codigo_bimestre', '=', 'nb.codigo_bimestre')
        ->leftJoin('cursos AS c', 'c.codigo_curso', '=', 'nb.codigo_curso')
        ->where('d.codigo_docente', $coddocente)
        ->get();


        $title = 'Registro de Notas';

        return view('academico.nota', compact('datos', 'nomcurso', 'nomgrado', 'title', 'coddocente', 'notas', 'nombimestre', 'codbimestre', 'codcurso'));
    }



    
    public function registro(Request $request)
{
    if (!session('logged')) {
        return redirect('/')->withErrors(['ERROR' => 'Debes logearte primero']);
    }

    $request->validate([
        'codigo_bimestre' => 'required',
        'codigo_curso' => 'required',
        'codigo_alumno' => 'required',
        'nota_examenescrito' => 'required|numeric|min:0|max:20',
        'nota_examenoral' => 'required|numeric|min:0|max:20',
        'nota_exposicion' => 'required|numeric|min:0|max:20',
        'nota_practica' => 'required|numeric|min:0|max:20',
        'nota_tarea' => 'required|numeric|min:0|max:20',
    ]);

    $codigoBimestre = $request->input('codigo_bimestre');
    $codigoCurso = $request->input('codigo_curso');
    $codigoAlumno = $request->input('codigo_alumno');
    $notaExamenEscrito = $request->input('nota_examenescrito');
    $notaExamenOral = $request->input('nota_examenoral');
    $notaExposicion = $request->input('nota_exposicion');
    $notaPractica = $request->input('nota_practica');
    $notaTarea = $request->input('nota_tarea');

    $suma = $notaExamenEscrito + $notaExamenOral + $notaExposicion + $notaPractica + $notaTarea;
    $promedioFinal = $suma / 5;

    $nota = NotaBimestre::updateOrCreate(
        ['codigo_bimestre' => $codigoBimestre,'codigo_curso' => $codigoCurso, 'codigo_alumno' => $codigoAlumno],
        [
            'nota_examenescrito' => $notaExamenEscrito,
            'nota_examenoral' => $notaExamenOral,
            'nota_exposicion' => $notaExposicion,
            'nota_practica' => $notaPractica,
            'nota_tarea' => $notaTarea,
            'promedio_final' => $promedioFinal
        ]
    );
    
    return redirect()->back();
}

    
}
