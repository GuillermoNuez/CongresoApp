@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
   <title>Edit user</title>
</head>
<body>
   <div class="row">
      <div class="column">
         <br>
         <h1>Verificar pago</h1>
         <br>
         
<form action="{{ url('Pago/' . $pago->id) }}" method="post" class="form" id="form" enctype="multipart/form-data">
         @csrf
        @method('PUT')
         <div class="form-group">
         <h3>Verified</h3>
            @if ($pago->verified==0) 
                <td><input name="verified" type="checkbox"/></td>
            @endif
            
            @if ($pago->verified==1) 
                <td><input name="verified" type="checkbox" checked/></td>
            @endif
         </div>


         <div class="form-group">
                <input type="submit" value="Confirm Changes" id="form-button" class="btn btn-primary">
         </div>
      </form>
      </div>
   </div>
@endsection