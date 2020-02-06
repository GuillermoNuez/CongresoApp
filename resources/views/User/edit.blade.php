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
         <h1>Editar datos</h1>
         <br>
         
<form action="{{ url('User/' . $user->id) }}" method="post" class="form" id="form" enctype="multipart/form-data">
         @csrf
        @method('PUT')
         <div class="form-group">
         <h3>Name</h3>
         <input type="text" value="{{ old('name', $user->name) }}" name="name" class="form-control" placeholder="Name"/>
         </div>
       <!--<h3>Email</h3>-->
       <!--  <input type="email" value="{{  old('email', $user->email) }}" name="email" class="form-control" placeholder="Email"/>-->

       <!-- <input type="text" value="{{  old('password', $user->password) }}" name="password" class="form-control" placeholder="Password" hidden/>-->
       <!-- <br>-->
         <div class="form-group">
        <h3>Type</h3>
        <select name="type" value="{{ $user->type }}">

            <option value="{{ $user->type }}">{{ $user->type }}</option>
            
            @if ($user->type != 'Asistente')
                        <option value="Asistente">Asistente</option>
            @endif
            @if ($user->type != 'Ponente')
                        <option value="Ponente">Ponente</option>
            @endif
            @if ($user->type != 'Comite')
                        <option value="Comite">Comite</option>
            @endif
            @if ($user->type != 'Admin')
                        <option value="Admin">Admin</option>
            @endif

        </select>
         </div>
         <div class="form-group">
                <input type="submit" value="Confirm Changes" id="form-button" class="btn btn-primary">
         </div>
      </form>
      </div>
   </div>
@endsection