@extends('layouts.master')
@section('name')
    

<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-warning w-20" role="alert">
            {{session()->get('message')}}
          </div>
    @endif
    <div class="row gap-3 m-3" id="books">
        <h2>book disponible :</h2>
        @foreach($bookDispo as $b)
            <a href="{{route('books.show',["book"=>$b->id])}}" class="card" style="width: 18rem ;height: 25rem ; text-decoration:none; background-image: url('https://images.unsplash.com/photo-1577627444534-b38e16c9d796?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGJvb2t8ZW58MHx8MHx8fDA%3D'); background-size: cover;">
                <div class="card-body">
                    <h5  class="card-title" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color :white">{{$b->title}}</h5>
                    <p class="text-start" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: black">Auteur :  <p class="card-text" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color :white">
                        {{$b->author}} 
                    </p>
                </p>
                <p class="text-start" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color: black">description :<p class="card-text" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color :white">
                        {{$b->description}} 
                    </p>
                </p>
                </div>
                
            </a>
           
           
        @endforeach




        <h2>book reserver:</h2>
        @foreach($bookReserv as $b)
            <a href="{{route('books.show',["book"=>$b->id])}}" class="card" style="width: 18rem ;height: 25rem ; text-decoration:none; background-image: url('https://images.unsplash.com/photo-1577627444534-b38e16c9d796?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGJvb2t8ZW58MHx8MHx8fDA%3D'); background-size: cover;">
                <div class="card-body">
                    <h5  class="card-title" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color :white">{{$b->title}}</h5>
                    <p class="text-start" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: black">Auteur :  <p class="card-text" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color :white">
                        {{$b->author}} 
                    </p>
                </p>
                <p class="text-start" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color: black">description :<p class="card-text" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color :white">
                        {{$b->description}} 
                    </p>
                </p>
                </div>
                
            </a>
           
           
        @endforeach
    </div>
</div>
@endsection








