@extends('layouts.app')

@section('content')
<h1 class="text-center fw-bold" style="margin-top:100px;">List Of Articles</h1>
<div class="container mt-5 d-flex align-items-center justify-content-center">
    <div class="row">
        <table class="table table-striped table-bordered align-middle d-flex align-items-center justify-content-center text-center my-auto " style="width:100%">
            <tr class="bg-warning text-black">
                <th class="align-middle">Author</th>
                <th class="align-middle">Title</th>
                <th class="align-middle">Content</th>
                <th class="align-middle">Photo</th>
                <th class="align-middle">View Article</th>
            </tr>
            @foreach ($articles as $article)
            <tr class="bg-black text-white">
                @if (Auth::id() === $article->user_id)
                <td class="align-middle">{{$article->name}}</td>
                <td class="align-middle">{{$article->title}}</td>
                <td class="align-middle">{{$article->content}}</td>
                <td class="align-middle"><img src="{{ asset('upload/photo/' . $article['image']) }}" style="width:300px;"></td>
                <td class="d-flex flex-column align-items-center align-middle" style="height: 500px;">
                    <a href="{{url('/view-article') . '/' . $article->id}}" name="next-page" class="btn btn-primary text-white my-auto">View</a>
                    <a href="{{url('/edit-article') . '/' . $article->id}}" name="next-page" class="btn btn-success text-white my-auto">Update</a>
                    <form action="{{url('/delete-article') . '/' . $article->id}}" method="POST" class="d-inline my-auto">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
        <a href="{{ url('/home') }}" name="next-page" class="btn btn-primary text-white mt-3" style="width: 71%; margin-left: 190px;">Go to Home Page</a>
    </div>
</div>
@endsection

