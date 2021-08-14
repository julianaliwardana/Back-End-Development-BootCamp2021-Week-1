<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>List Of Article</title>
</head>
<body class="m-auto">
    <h1 class="text-center fw-bold" style="margin-top:100px;">List Of Articles</h1>
    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <div class="row">
            <table class="table table-striped table-bordered align-middle d-flex align-items-center justify-content-center text-center" style="width:100%">
                <tr class="bg-warning text-black">
                    <th>Nama Penulis</th>
                    <th>Judul Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Photo</th>
                    <th>View Article</th>
                </tr>
                @foreach ($articles as $article)
                <tr class="bg-black text-white">
                    <td>{{$article->name}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->content}}</td>
                    <td><img src="{{ asset('upload/photo/' . $article['image']) }}" style="width:300px;"></td>
                    <td class="d-flex flex-column align-items-center" style="height: 500px;">
                        <a href="{{url('/view-article') . '/' . $article->id}}" name="next-page" class="btn btn-primary text-white my-auto">View</a>
                        <a href="{{url('/edit-article') . '/' . $article->id}}" name="next-page" class="btn btn-success text-white my-auto">Update</a>
                        <form action="{{url('/delete-article') . '/' . $article->id}}" method="POST" class="d-inline my-auto">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <a href="{{ route ('form-article') }}" name="next-page" class="btn btn-primary text-white" style="width: 71%; margin-left: 190px;">Go to the prev Page</a>
        </div>
    </div>
</body>
</html>