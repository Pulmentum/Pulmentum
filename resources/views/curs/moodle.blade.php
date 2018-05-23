@extends ('layouts.app')

@section('content')
<section>
<link href="{{ asset('css/estilsCursos.css') }}" rel="stylesheet">
<div class="contingut">

<div class="col-3 menu">
  <ul>
    <li>Curs 1</li>
    <li>Curs 2</li>
    <li>Curs 3</li>
    <li>Curs 4</li>
    <li>Curs 5</li>
    <li>Curs 6</li>
    <li>Curs 7</li>
    <li>Curs 8</li>
  </ul>
</div>
<div class="col-6">
<div>
  <h1>Cursos</h1>
  <p>Aquí pots veure tots els cursos als que pots accedir.</p>
</div>

<div>
  <h2>Curs 1</h2>
  Aquest curs l'imparteix el Menganito. Es tracten aspectes com la programació orientada a objectes i bases de dades.
</div>
<div>
  <h2>Curs 2</h2>
  Aquest curs l'imparteix el Menganito. Es tracten aspectes com la programació orientada a objectes i bases de dades.
</div>
<div>
  <h2>Curs 3</h2>
  Aquest curs l'imparteix el Menganito. Es tracten aspectes com la programació orientada a objectes i bases de dades.
</div>
</div>


<div class="col-3">
  <div class="aside">
    <h2>Tasca 1</h2>
    Cal entregar-la el dia X
  </div>
  <div class="aside">
    <h2>Tasca 1</h2>
    Cal entregar-la el dia X
  </div>
  <div class="aside">
    <h2>Tasca 1</h2>
    Cal entregar-la el dia X
  </div>
</div>
</div>
</section>
@endsection