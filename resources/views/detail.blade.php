<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Detail Of Article</title>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center text-center">
        <div class="row">
            <h1>{{$viewArticle->title}}</h1>
            <h4 class="mb-5">Penulis: {{$viewArticle->name}}</h4>
            <img src="{{ asset('upload/photo/' . $viewArticle['image']) }}" class="mb-5 mx-auto" style="width:300px;">
            <p>{{$viewArticle->content}}</p>
            <a href="{{ route ('list-article') }}" name="next-page" class="btn btn-primary text-white">Go to the prev Page</a>
        </div>
    </div>
</body>
</html>