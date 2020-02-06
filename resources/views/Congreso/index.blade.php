@extends('layouts.app')
@section("content")
<div class="container">
   <div class="row">
      <div class="col-12">
            <h3>  Lista Congresos </h3>
            <br>
            <div align="right">
            </div>
            <table class="table">
               <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Price</th>
               </tr>
            @foreach ($congresos as $congreso)
               <tr>
                  <td>{{$congreso->id}}</td>
                  <td>{{$congreso->title}}</td>
                  <td>{{$congreso->description}}</td>
                  <td>{{$congreso->price}}</td>
               </tr>
            @endforeach
            </table>
            </div>
      </div>
   </div>
</div>
@endsection