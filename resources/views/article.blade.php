<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

        <div>
            <form action="/public/article-add" method="get">
                <div class="mb-3">
                    <label for="authorID" class="form-label">Author ID</label>
                    <input type="text" class="form-control" id="authorID" name="authorID">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Article title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Article content</label>
                    <textarea class="form-control" id="content" rows="4" name="content"></textarea>
                </div>                        
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>
</html>
