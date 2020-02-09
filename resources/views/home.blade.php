@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    @if (Auth::user()->type == 'Admin')
                    
                    Logged as Admin

                    @endif
                    
                      @if (Auth::user()->type == 'Comite')
                    
                        Logged as Comite
                    
                    @endif
                    
                    @if (Auth::user()->type == 'Ponente')
                    
                        Logged as Ponente
                    
                    @endif
                    
                    @if (Auth::user()->type == 'Asistente')
                    
                        Logged as Asistente
                    
                    @endif
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>

                    
            
        </div>
        
    </div>
    
    <br><br>
    @if (Auth::user()->type == 'Admin')
    
    <a href="{{route('User.index')}}">View Users</a>
    <br><br>
    <a href="{{route('Congreso.index')}}">View Congreso</a>
    <br><br>
    <a href="{{route('Ponencia.index')}}">View Ponencias</a>
    <br><br>
    <a href="{{route('Pago.index')}}">View Pagos</a>
    
    @endif
    
    @if (Auth::user()->type ==  'Ponente')
        <a href="{{route('User.index')}}">View Asistenes</a>
        <br><br>
        <a href="{{route('Ponencia.index')}}">View Ponencias</a
    @endif

    @if (Auth::user()->type ==  'Comite')
    <a href="{{route('Ponencia.index')}}">View Ponencias</a>
    <br><br>
    <a href="{{route('User.index')}}">View Users</a>
    <br><br>
    <a href="{{route('Pago.index')}}">View Pagos</a>
    @endif
    
    @if (Auth::user()->type ==  'Asistente')
        <a href="{{route('Ponencia.index')}}">View Ponencias</a>
    @endif

</div>
@endsection
