@extends('layouts.app')

@section('content')

    <div class="container"> 
        <h3>Data Album
        <a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>

        </h3> 


          <table class="table table-bordered"> 
                <tr> 
                     <th>ID ALBUM</th> 
                     <th>NAMA ALBUM</th>
                     <th>EDIT</th>
                </tr> 
             @foreach($rows as $row) 
                 <tr> 
                      <td>{{ $row->album_id}}</td> 
                      <td>{{ $row->album_name }}</td> 
                      <td><a href="{{ url('mahasiswa/' . $row>mhsw_id . '/edit') }}">Edit</a></td> 
                 </tr> 
             @endforeach 
            </table>
    </div>

@endsection