@extends('layouts.app')
@section("content")

<div class="container">
   <div class="row">
      <div class="col-12">
   <title>Document</title>
</head>
<body>
<div align="right">
   <form method="post" action="{{url('UserPonencia')}}">
   @csrf
    <input name="idponencia" value="{{$ponencia->id}}" hidden class="form-control"/>
    @if (empty($userponencia))
          @if (!empty($pago))
           <input class="btn btn-primary" type="submit" value="Asistir"/>
          @endif
    @endif
   </form>
   <br>

</div>
<h1>{{$ponencia->title}}</h1>
<a>Iduser : {{$ponencia->iduser}}</a><br><br>

<br>
<h2>Video</h2>
      @if (!empty($pago))
<iframe width="560" height="315" src="{{$ponencia->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      @endif
      
@if (empty($pago))
      <p>Debe Pagar el congreso para ver el video</p>
@endif
@endsection