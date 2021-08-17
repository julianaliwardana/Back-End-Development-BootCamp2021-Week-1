@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 fw-bold">Form Artikel</h1>
    <div class="container d-flex align-items-center justify-content-center" style="margin-top:50px;">
        <div class="jumbotron">
            <form action="{{ route('get-article') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Name</p>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter your Name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Article Title</p>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="Enter your article title">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Article Content</p>
                    <textarea name="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror"
                        placeholder="Enter your article content"></textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4">
                    <p class="mb-2 mt-4 fw-bold">Choose Image</p>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="formFile">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary mb-3 mt-4"
                    onclick="alert('Terima kasih, artikel anda sudah kami save')" class="button">Submit</button>
            </form>
            <a href="{{ route('list-article') }}" name="next-page" class="btn btn-primary text-white mb-5" class="a">Go
                to the next Page</a>
        </div>
    </div>
@endsection
