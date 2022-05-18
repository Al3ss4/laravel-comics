@extends('layouts.app')
@section('title','Current Series')

@section('content')
    <h1>Current Series</h1>
    <div class="container-comics-card">
        <div class="container-comics">
        
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
@endsection




    