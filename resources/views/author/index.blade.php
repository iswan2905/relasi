@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Authors</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Authors
		<div class="panel-title pull-right"><a href="/author/create">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($author as $data)
					<tr>
						<td>{{$data->name}}</td>
						<td>
							<a class="btn btn-warning" href="/author/{{$data->id}}/edit">Edit</a>
						</td>
						<td>
							<a class="btn btn-primary" href="/author/{{$data->id}}/">Show</a>
						</td>
						<td>
							<form action="{{route('author.destroy', $data->id)}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" value="Delete" class="btn btn-danger">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
@endsection