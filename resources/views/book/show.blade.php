@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Book
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('book.update', $book->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Title</label>
					<input type="text" name="a" value="{{$book->title}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Author</label>
						<input type="text" name="a" value="{{$book->author->name}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Amount</label>
					<input type="number" name="c" value="{{$book->amount}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<input type="text" name="d" value="{{$book->cover}}" class="form-control" readonly="">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection