@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
            <h3>  Lista ponencias </h3>
            <br>
            <div align="right">
                     @if (empty($pago))
 <a style="Color:White;" href="{{route('Pago.create')}}" class="btn btn-primary" type="submit"> Pagar</a>
      @endif
                 
            </div>
            <br>

            <div align="right">
               
            @if (Auth::user()->type == 'Admin' || Auth::user()->type == 'Ponente')
            <a href="{{route('Ponencia.create')}}">Crear</a>
            @endif
            </div>
            <table class="table">
               <tr>
                  <th>Id</th>
                  <th>IdUser</th>
                  <th>Title</th>
                  <th>Video</th>
                  <th>See</th>
                  @if (Auth::user()->type == 'Admin')
                  <th>Remove</th>
                  @endif
               </tr>
            @foreach ($ponencias as $ponencia)
               <tr>
                  <td>{{$ponencia->id}}</td>
                  <td>{{$ponencia->iduser}}</td>
                  <td>{{$ponencia->title}}</td>
                  <td>{{$ponencia->video}}</td>
                  <td><a href="{{route('Ponencia.show',$ponencia->id)}}">Ver</a></td>
                  @if (Auth::user()->type == 'Admin')
                  <td><a href="{{route('Ponencia.destroy',$ponencia->id)}}">X</a></td>
                  @endif
               </tr>
            @endforeach
            </table>
            </div>
      </div>
   </div>
</div>
@endsection