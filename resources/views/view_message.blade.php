@extends('base.master')
@section('content')

<table border='1'>
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Messages</th>
	</tr>
	@foreach($messageList as $mess)
	<tr>
		<td>{{$mess->id}}</td>
		<td>{{$mess->name}}</td>
		<td>{{$mess->email}}</td>
		<td>{{$mess->message}}</td>

	</tr>
	@endforeach
</table>

@endsection