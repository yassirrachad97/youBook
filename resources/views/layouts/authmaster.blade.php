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
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-85">
        <div class="container-fluid">
          <a href="{{route('books.index')}}" class="material-symbols-outlined" style="text-decoration:none"><span style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;   color :orange">You</span><span style="color :orange">auto_stories</span></a>
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> --}}
            {{-- <span class="navbar-toggler-icon"></span> --}}
          {{-- </button> --}}
          
        </div>
      </nav>


@yield('name')





<footer class="bg-body-tertiary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>    
</body>
</html>