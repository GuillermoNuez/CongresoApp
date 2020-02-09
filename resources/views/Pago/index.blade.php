@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
        @if (Auth::user()->type != "Asistente" && Auth::user()->type != "Ponente")
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
                <td><a href="assets/pagos/{{$pago->document}}">{{$pago->document}}</a></td>
                @if ($pago->verified==0) 
                    <td><input type="checkbox" onclick="return false;"/></td>
                @endif
                
                @if ($pago->verified==1) 
                    <td><input type="checkbox" checked onclick="return false;"/></td>
                @endif


                
              
      @if (Auth::user()->type == 'Comite' || Auth::user()->type == 'Admin')
           <td><a href="{{ url('Pago/' . $pago->id . '/edit') }}">Edit</a></td>
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