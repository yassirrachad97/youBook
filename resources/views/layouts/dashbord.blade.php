<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>youbook</title>
</head>

<body>

  <div class="col-2 position-fixed d-flex flex-column justify-content-between" style="background-color: #f6f6f6; height: 100vh">
    <div>

        <a href="{{route('books.index')}}" class="material-symbols-outlined" style="text-decoration:none"><span style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;   color :orange">You</span><span style="color :orange">auto_stories</span></a>

      <hr class="mx-3" />
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #f6f6f6;">
                statistiques
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><a class="dropdown-item my-4" href="?uri=admin/statistique">voir les statistiques</a></li>


                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #f6f6f6;">
                books
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><a class="dropdown-item my-4" href="?uri=category">liste des book dispo</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: #f6f6f6;">
                reservation
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><a class="dropdown-item my-4" href="">book resrver</a></li>
                </ul>
              </div>
            </div>
          </div>
       
        </div>
    </div>
    <div>

    </div>
  </div>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-85">
        <div class="container-fluid">
          <a href="{{route('books.index')}}" class="material-symbols-outlined" style="text-decoration:none"><span style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;   color :orange">You</span><span style="color :orange">auto_stories</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li> <a class="btn col-md-2 "  data-bs-toggle="modal" data-bs-target="#addModal">add book</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">add book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{route('books.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                         <div class="form-group">
                            <label for="author">Author:</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                        </div>

                        <div class="form-group">
                            <label for="content">description:</label>
                            <textarea class="form-control" id="content" name="description" required></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" value="addwiki" name="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
  
    </div>

  </div>