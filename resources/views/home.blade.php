@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@if($tovars)
					@foreach($tovars as $one)
					<h2>{{$one->name}}</h2>
					<div>{{$one->body}}</div>
					<div>{{$one->price}}</div>
					<hr/>
					@endforeach
					{!!$tovars->render()!!} <!-- постраничная навигация -->
					{!!$tovars->total()!!} <!-- кол-во записей -->
					
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
