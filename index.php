<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Search Movie</title>
    <style>
        body,
        html {
            margin: 0;
        }

        body {
            background-image: url("assets/bg.jpg");
            height: 100%;
            background-position: top;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center" style="font-size: 5em;">Search Movie <img src="https://img.icons8.com/external-anggara-glyph-anggara-putra/64/000000/external-movie-media-anggara-glyph-anggara-putra-2.png" /></h1>

                <div class="input-group mb-0">
                    <input type="text" class="form-control" placeholder="Please Type a Movie Title" id="search-input">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button" id="search-button">Search</button>
                    </div>
                </div>
                <small class="text-secondary">Example : doraemon, naruto, spiderman, etc</small>
            </div>
        </div>
        <div class="row" id="movie-list">

        </div>
        <p class="text-center mt-5"> Support by OMDb API (The Open Movie Database) </p>
        <div class="text-center" style="font-size: 30px; margin:0px;">
            <a href="https://www.facebook.com/marizka.maulidina"><i class="bi bi-facebook" style=" color:black"></i></a>
            <a href="https://instagram.com/marizkaaa25"><i class="bi bi-instagram" style=" color:black"></i></a>
            <a href="https://wa.me/6282229337599"><i class="bi bi-whatsapp" style=" color:black"></i></a>
            <a href="https://twitter.com/marizkaaa25"><i class="bi bi-twitter" style=" color:black"></i></a>
            <a href="https://github.com/marizkaaa25"><i class="bi bi-github" style=" color:black"></i></a>
        </div>
        <p class="text-center"> &copy; 2022 Marizka Maulidina</p>


    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Movie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>