@extends('layouts.app')

@section('content')

<div class="container"> 

	<h3>Edit Data Artist</h3>
	<form action="{{ url('/mahasiswa/' . $row->mhsw_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">  
		 @csrf
		 <table>
		 	<tr>
		 		<td>ID</td>
		 		 <td><input type="text" name="artist_id" value="{{ $row>artist_id }}"></td> 
		 	</tr>
		 	<tr>
		 		<td>NAME ARTIST</td>
		 		 <td><input type="text" name="artist_name" value="{{ $row>artist_name }}"></td> 
		 	</tr>
		 </table>
	</form>
</div>

 @endsection 