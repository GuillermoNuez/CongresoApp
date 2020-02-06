@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
        @if (Auth::user()->type != "Asistente")
            <h3> Lista Pagos </h3>
            <br>
            <div align="right">
            
            </div>
        <table class="table">
          <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">iduser</th>
                <th scope="col">document</th>
                <th scope="col">Verified</th>

                @if (Auth::user()->type == 'Comite' || Auth::user()->type == 'Admin')
                    <th scope="col">Edit</th>    
                @endif
                

            </tr>

            @foreach ($pagos as $pago)
           <tr>
                <td>{{$pago->id}}</td>
                <td>{{$pago->iduser}}</td>
                <td>{{$pago->document}}</td>
                <td>{{$pago->verified}}</td>
              
      @if (Auth::user()->type == 'Comite' || Auth::user()->type == 'Admin')
           <td><a href="{{ url('User/' . $pago->id . '/edit') }}">Edit</a></td>
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