@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
   <title>Confirmacion Ponencia</title>
</head>
<body>
   <div class="row">
      <div class="column">
         <br>
         <h3>Añadir datos</h3>
         <br>
         
      <form method="post" action="{{url('User')}}">
        @csrf
        <div class="form-group">
            <select name="type">
                 <option value="Asistente">Asistente</option>
                 <option value="Ponente">Ponente</option>
                 <option value="Comite">Comite</option>
                 <option value="Admin">Admin</option>
            </select>
         </div>
         <div class="form-group">
               <input type="text" name="name" class="form-control" placeholder="Name"/>
         </div>
         
         <div class="form-group">
               <input type="email" name="email" class="form-control" placeholder="Email"/>
         </div>
         
         <div class="form-group">
               <input type="password" name="password" class="form-control" placeholder="Password"/>
         </div>

         <div class="form-group">
               <input type="submit"/>
         </div>
      </form>
      </div>
   </div>
@endsection
