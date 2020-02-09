@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
        @if (Auth::user()->type != "Asistente")
            <h3> Lista Usuarios </h3>
            <br>
            <div align="right">
                
            @if (Auth::user()->type == 'Admin')
            <a href="{{route('User.create')}}">Crear</a>
            @endif
            
            </div>
        <table class="table">
          <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>

                @if (Auth::user()->type == 'Comite')
                    <th scope="col">Edit</th>    
                @endif
                
                @if (Auth::user()->type == 'Admin')
                    <th scope="col">Edit</th>    
                    <th scope="col">Delete</th>
                @endif

            </tr>

            @foreach ($users as $user)
           <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->type}}</td>
              
      @if (Auth::user()->type == 'Comite')
           <td><a href="{{ url('User/' . $user->id . '/edit') }}">Edit</a></td>
        @endif
                
                @if (Auth::user()->type == 'Admin')
           <td><a href="{{ url('User/' . $user->id . '/edit') }}">Edit</a></td>
           <td><a href="{{route('User.destroy',$user->id)}}">Delete</a></td>
                @endif

           </tr>
            @endforeach
            </table>
            </div>
           @else
                No tiene permisos para ver esto
           @endif
      </div>
   </div>
</div>
@endsection