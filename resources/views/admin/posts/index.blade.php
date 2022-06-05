@extends('layouts.app')

@section('content')

<div class="my-height overflow-scroll">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @if (session('deleted-message'))
            <div class="alert alert-warning col-12">
                {{ session('deleted-message') }}
            </div>
            @endif
            @forelse ( $posts as $post )
            <a class="text-decoration-none text-black" href="{{route('admin.posts.show', $post)}}">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{$post->image_url}}" class="card-img-top" alt="{{$post->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->content}}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{$post->updated_at}}</small>
                    </div>
                    </div>
                </div>
            </a>
            @empty
                <div class="col">
                    <h4>There are no posts</h4>
                </div>
            @endforelse
            <div class="col-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
