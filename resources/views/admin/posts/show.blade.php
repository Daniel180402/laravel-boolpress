@extends('layouts.app')

@section('content')
<div class="my-height overflow-scroll">
    <div class="container">
        <div class="row justify-content-center">
                @if (session('message'))
            <div class="alert alert-success col-12">
                {{ session('message') }}
            </div>
            @endif
            <div class="col-6 show-height">
                <div class="card h-100">
                    <img src="{{$post->image_url}}" class="card-img-top" alt="{{$post->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <pre class="card-text"> {{ $post->user_id }}</pre>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{$post->updated_at}}</small>
                </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row justify-content-around">
                    <div class="col-3">
                        <a href="{{route('admin.posts.show', $post->id - 1)}}">
                            <button class="btn btn-success">Previus</button>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{route('admin.posts.edit', $post)}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                    </div>
                    <form action="{{route('admin.posts.destroy', $post)}}" class="col-3 blackhole" method="POST" post-title="{{ucwords($post->title)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    <div class="col-3">
                        <a href="{{route('admin.posts.show', $post->id + 1)}}">
                            <button class="btn btn-success">Next</button>
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-6">
                @foreach ($post->user->posts as $realtedPost)
                <a href="{{route('admin.posts.show', $realtedPost)}}">
                    <pre>{{$realtedPost->title}}</pre>
                </a>
                @endforeach
            </div> --}}
        </div>
    </div>
</div>

@endsection


@section('script-footer')
    <script defer>
    const blackHole = document.querySelectorAll('.blackhole');
    blackHole.forEach(singleForm => {
        singleForm.addEventListener('submit', function (event) {
            event.preventDefault(); //acchiappo l'invio del form
            userConfirm = window.confirm(`Are You Sure To Delate ${this.getAttribute('post-title')}`);
            if(userConfirm) {
                this.submit();
            }
        })
    });
    </script>
@endsection
