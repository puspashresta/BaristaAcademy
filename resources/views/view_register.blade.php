@extends('base.master')
@section('content')
<table border='1'>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>image</th>
		<th>gender</th>
		<th>birthDate</th>
		<th>mothersName</th>
		<th>fathersName</th>
		<th>currentAddress</th>
		<th>permanentAddress</th>
		<th>contact</th>
		<th>course</th>
		<th colspan="2">Action</th>
	</tr>
	@foreach($registration as $reg)
	<tr>
		<td>{{$reg->id}}</td>
		<td>{{$reg->name}}</td>
		<td>{{$reg->image}}</td>
		<td>{{$reg->gender}}</td>
		<td>{{$reg->birthDate}}</td>
		<td>{{$reg->mothersName}}</td>
		<td>{{$reg->fathersName}}</td>
		<td>{{$reg->currentAddress}}</td>
		<td>{{$reg->permanentAddress}}</td>
		<td>{{$reg->contact}}</td>
		<td>{{$reg->course_id}}</td>
		<td colspan="2"><a href="update">Update</a></td>
	</tr>
	@endforeach
</table>
@endsection