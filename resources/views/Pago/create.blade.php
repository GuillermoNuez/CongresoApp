@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
   <title>Crear Pago</title>
</head>
<body>
   <div class="row">
      <div class="column">
         <br>
         <h3>Pagar entrada</h3>
         <br>
         
      <form method="post" action="{{url('Pago')}}" enctype="multipart/form-data">
         @csrf

         <h4>Introduzca el recibo de su pago en formato pdf</h4>
         <div class="form-group">
               <input type="file" name="document"/>
         </div>
         
         <div class="form-group">
               <input type="submit" value="Pagar"/>
         </div>
      </form>
      </div>
   </div>
@endsection