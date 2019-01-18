
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Movies</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Movies</h1>
    <form>
        <div class="row">
              <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="movie_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Movie </span> Title:</label>
               </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="movie_title" name="movie_title" placeholder="Enter Movie Title" >
                </div>
            </div>


                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="movie_address" class="float-md-right"> <span class="d-sm-none d-md-inline"> Movie </span> Address:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                        </div>
                        <input type="text" class="form-control" id="movie_link" name="movie_link" placeholder="Enter Movie Link" >
                    </div>
                </div>
        </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="movie_year" class="float-md-right"> <span class="d-sm-none d-md-inline"> Movie </span> Year:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                        </div>
                        <input class="form-control" id="movie_year" name="movie_year" placeholder="Enter Movie Year">
                    </div>
                </div>
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="movie_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Movie </span> Image:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-image"></i></div>
                        </div>
                        <input class="form-control" type="file" id="movie_img" name="movie_img">
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <button type="submit" name="insert_movie" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
                </div>

            </div>

            <div class="row my-5">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <button type="button" name="update_movie" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Edit </button>
                </div>
            </div>
                <div class="row my-6">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <button type="button" name="delete_movie" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Delete </button>
                </div>
            </div>

    </form>
</div>
</body>
</html>