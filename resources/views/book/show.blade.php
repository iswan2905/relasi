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
			
				<div class="form-group">
					<label class="control-lable">Title</label>
					<input type="text" name="a" value="{{$book->title}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Author</label>
						<input type="text" name="b" value="{{$book->author->name}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Amount</label>
					<input type="number" name="c" value="{{$book->amount}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<img src="{{asset('/img/'.$book->cover.'')}}" width="90" height="120" name="cover">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection