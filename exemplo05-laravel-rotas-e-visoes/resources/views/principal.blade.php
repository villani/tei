<!-- Diretiva usada para estender um layout. -->
@extends('template1')

<!-- Definindo conteúdo das regiões estabelecidas no layout que está sendo estendido. -->
@section('title', 'Página principal')

<!-- Maneira alternativa para definir conteúdos extensos de regiões estabelecidas no layout que está sendo estendido. -->
@section('container')

	<div class="row">
		<div class="col-md-12">
			<h1>Principais equipes do estado</h1>

            <!-- Diretivas blade para definir estruturas de controle -->
			@foreach($clubes as $clube)
				@if($clube == 'corinthians')
					@continue
				@endif
				<p>Equipe: {{ $clube }}</p>
			@endforeach

		</div>
	</div>

<!-- Para a maneira alternativa é necessário usar a diretica de fim de seção. -->
@endsection
