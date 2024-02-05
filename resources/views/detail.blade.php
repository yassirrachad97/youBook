@extends('layouts.master')
@section('name')


  <div class="container">
    <header>
        <h1>{{$book->title}}</h1>
      </header>
  <div class="row w-80 m-4 ">
    <div class="col-lg-5 col-sm-12">
      <div class="row  image">
        <img src="https://images.unsplash.com/photo-1577627444534-b38e16c9d796?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGJvb2t8ZW58MHx8MHx8fDA%3D" alt="" class="mainImg">
      </div>
    </div>  
  </div>
  
  <div class="row mt-3">
    <div class="col-12">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Impedit voluptatibus aut quos maiores reprehenderit iure
         quasi fugit illo magni cum eaque eius tenetur odit nemo
          illum voluptate magnam dicta, in praesentium! Modi deserunt 
          iste repellendus repellat non eius ad at quibusdam dolor eligendi 
          iusto tempore, accusamus accusantium nam cumque, molestias error 
          porro laudantium maiores eaque veritatis! Error corporis enim pariatur 
          optio omnis praesentium. Consectetur optio inventore nesciunt amet, 
          commodi facilis asperiores illo saepe libero. Ex, excepturi adipisci
           eligendi nesciunt architecto nulla doloribus incidunt modi tempore, 
           neque commodi repudiandae, aperiam necessitatibus? Illo laboriosam ad iste
            enim impedit sunt cumque consequatur incidunt perspiciatis, fuga velit sit veritatis, 
            libero facere, at soluta veniam ullam eaque necessitatibus. Voluptatum voluptates amet soluta
             laboriosam iste asperiores tempora quaerat suscipit fugit assumenda, cupiditate esse minus repellat
              architecto cum sed mollitia eaque totam impedit enim! Aspernatur quod natus ab voluptas atque labore
               cumque laudantium hic sit officiis, placeat dignissimos et neque. Consequatur id dolore voluptate quisquam
                iste ut delectus excepturi corporis odit repellendus? Fuga quam rem dolor, rerum nobis placeat in tenetur
                 ut sequi eligendi est fugit nemo mollitia dicta! Totam explicabo modi magnam, velit,
         unde tempore exercitationem vero aliquid maxime perferendis inventore ea provident dolorem nulla illum!
      </p>
    </div>
  </div>
<div class="d-flex gap-2">
<form action="{{route("books.destroy",["book"=>$book->id])}}" method="POST">
@csrf
@method("DELETE")
<button class="btn  btn-danger " type="submit">delete</button>
</form>
@if ($book->reservation==0)
    
<form action="{{route('reserver',['id'=>$book->id])}}" method="POST">
    @csrf
    @method("PATCH")
    <button class="btn  btn-success " type="submit">reserver</button>
    </form>
    
@else
<form action="{{route('recuperer',['id'=>$book->id])}}" method="POST">
    @csrf
    @method("PATCH")
    <button class="btn btn-success " type="submit">recuperer</button>
    </form>  
@endif
    

  <a class="btn  btn-primary "  data-bs-toggle="modal" data-bs-target="#updateModal">update book</a>

  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">update book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{route('books.update',["book"=>$book->id])}}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required value="{{old("title",$book->title ?? null)}}">
                    </div>
                     <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" id="author" name="author" required value="{{old("author",$book->author ?? null)}}">
                    </div>

                    <div class="form-group">
                        <label for="content">description:</label>
                        <textarea class="form-control" id="content" name="description" required  > {{$book->description}} </textarea>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" value="update" name="submit" class="btn btn-primary">update</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
</div>
  <div class="row mt-3">
    <div class="col-12">
      <hr>
      <p class="text-start">Auteur : <span class="text-dark" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">{{$book->author}}</span></p>

    </div>
  </div>
  </div>




@endsection