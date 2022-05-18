@extends('layouts.app')
@section('title','Current Series')

@section('content')
   
    <div class="container-comics-card">
        <div class="container-card">
            <div class="card-comics">
        
            @foreach($series as $serie)
            
                
                <img src="{{ $serie['thumb']}}" alt="{{ $serie['title']}}">
                
                <h2>
                    <a href=""> {{ $serie['series']}} </a>
                </h2>
            
                
            @endforeach
        
            </div>
     
        </div>
        <div class="text-container">
      <a href="#">
        <h3 class="txt">LOAD MORE</h3>
      </a>
    </div>
    </div>

@endsection




    