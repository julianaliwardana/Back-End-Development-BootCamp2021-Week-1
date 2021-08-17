@section('content3')
<div class="row" id="addReply">
    <div class="col-xl-8 col-md-8 col-sm-10 mt-3 m-auto mb-3">
        <form action="{{url('/article') . '/' . $viewArticle->id}}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-xl-11 col-md-10 col-sm-10 col-10 p-1">
                    <textarea class="form-control w-100" id="commentInput" name="content" placeholder="Comment"></textarea>
                    {{-- @error('content') is-invalid @enderror --}}
                    {{-- @error('content')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror --}}
                </div>
                <div class="col-xl-1 col-md-2 col-sm-2 col-2 p-1">
                    <button type="submit" class="btn btn-primary w-120 h-100" id="">Submit</button>
                </div>
            </div>
        </form>
        <a href="{{ route ('list-article') }}" name="next-page" class="btn btn-primary text-white mt-3">Go to Article Page</a>
    </div>
</div>
@endsection
