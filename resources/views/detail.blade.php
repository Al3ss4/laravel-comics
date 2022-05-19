@extends('layouts.app')


@section('detail')
@dump($series)
    <div class="container-comics-card">
        <div class="container-card">


            @foreach($series as $comic)

            <div class="card-comics">
                <img src="{{$comic["thumb"]}}" alt="{{ $comic["title"]}}">

                <h2>
                    <a href="#"> {{ $comic['series']}} </a>
                </h2>
                </div>

            @endforeach



        </div>
        <div class="text-container">
      <a href="/comics">
        <h3 class="txt">BACK COMICS</h3>
      </a>
    </div>
    </div>

@endsection
