@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Zarządzanie tripami</h2>
	        </div>
	        <div class="pull-right">
	        	<!-- @permission('admin') -->
	            <a class="btn btn-success" href="{{ route('roles.create') }}">Stwórz trip</a>
	            <!-- @endpermission -->
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>Nr</th>
			<th>Tytuł</th>
			<th>Od</th>
			<th>Do</th>
			<th>Miejsce docelowe</th>
			<th width="280px">Akcja</th>
		</tr>
	@foreach ($trips as $key => $trip)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $trip->name }}</td>
		<td>{{ $trip->from }}</td>
		<td>{{ $trip->to }}</td>
		<td>{{ $trip->destination }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('trips.show',$trip->id) }}">Pokaż</a>
			<!-- @permission('admin') -->
			<a class="btn btn-primary" href="{{ route('trips.edit',$trip->id) }}">Edytuj</a>
			<!-- @endpermission
			@permission('admin') -->
			{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Usuń', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	<!-- @endpermission -->
		</td>
	</tr>
	@endforeach
	</table>
	{!! $trips->render() !!}
@endsection