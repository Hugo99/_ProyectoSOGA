@extends('plantilla')

@section('secion')

	<h1>Perfil</h1>
	<h1>Este es el equipo de trabajo</h1>

	@foreach($equipo as $item)
		<a href="{{route('ventana3',$item)}}" class="h4 text-daner">{{ $item}}</a><br>
	@endforeach

	@if(!empty($nombre))

		@switch($nombre)

			@case($nombre == 'Hugo')
				<h2 class="mt-5">El nombre es {{$nombre}}</h2>
				<p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, recusandae! Aliquam quidem, laudantium veritatis voluptatem asperiores illo. Sapiente officia voluptas quam aperiam enim, natus assumenda quaerat, ut distinctio deserunt saepe.</p>
				@break

			@case($nombre == 'mariana')
				<h2 class="mt-5">El nombre es {{$nombre}}</h2>
				<p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, recusandae! Aliquam quidem, laudantium veritatis voluptatem asperiores illo. Sapiente officia voluptas quam aperiam enim, natus assumenda quaerat, ut distinctio deserunt saepe.</p>
				@break

			@case($nombre == 'otros')
				<h2 class="mt-5">El nombre es {{$nombre}}</h2>
				<p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, recusandae! Aliquam quidem, laudantium veritatis voluptatem asperiores illo. Sapiente officia voluptas quam aperiam enim, natus assumenda quaerat, ut distinctio deserunt saepe.</p>
				@break

		@endswitch

	@endif

@endsection
