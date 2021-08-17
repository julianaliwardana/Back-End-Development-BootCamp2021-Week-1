@section('content2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning">
                    Comments
                </div>
                <div class="card-body bg-black text-white">
                    @foreach ($comments as $comment)
                    <div class="user mt-2">Author: {{$comment->user['name']}}</div>
                    <div class="content mb-2">Comment: {{$comment->content}}</div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
