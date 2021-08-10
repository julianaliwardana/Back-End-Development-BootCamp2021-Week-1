<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Edit Article</title>
</head>
<body>
    <h1 class="text-center mt-5 fw-bold">Edit Artikel</h1>
    <div class="container d-flex align-items-center justify-content-center" style="margin-top:50px;">
        <div class="jumbotron">
            <form action="{{url('/update-article') . '/' . $article->id}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Name</p>
                    <input type="text" name="name" class="form-control" placeholder="Enter your Name" value="{{$article->name}}">
                </div>
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Article Title</p>
                    <input type="text" name="title" class="form-control" placeholder="Enter your article title" value="{{$article->title}}">
                </div>
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Article Content</p>
                    <input type="text" name="content" class="form-control" placeholder="Enter your article content" value="{{$article->content}}">
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <p class="custom-file-text mb-2 mt-4 fw-bold">Choose your Image</p>
                        <input type="file" name="image" class="costum-file-input" placeholder="Enter your Name">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-success mb-3 mt-4" onclick="alert('Terima kasih, artikel anda sudah kami update')" class="button">Update</button>
            </form>
            <a href="{{ route ('list-article') }}" name="next-page" class="btn btn-primary text-white" class="a">Back</a>
        </div>
    </div>
</body>
</html>