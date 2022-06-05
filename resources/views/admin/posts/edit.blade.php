@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

<form action="{{ route('admin.posts.update', ['post' => $post]) }}" method='post' class="my-height">
@csrf
@method('PUT')
    <div class="container h-100 ">
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12">
                    <label for="image_url" class="size-label">Image URL</label>
                    <input type="text" class="m-3" name="image_url" value="{{$post->image_url}}">
                </div>
                <div class="col-12">
                    <label for="author" class="size-label">Author</label>
                    <input type="text" class="m-3" name="author" value="{{$post->author}}">
                </div>
                <div class="col-12">
                    <label for="title" class="size-label">Title</label>
                    <input type="text" name="title" class="m-3" value="{{$post->title}}">
                </div>

                <div class="col-12 d-flex">
                    <label for="content" class="size-label align-self-center">Content</label>
                    <textarea name="content" class="m-3">{{$post->content}}</textarea>
                </div>
                <div class="col-4 text-center">
                    <input type="submit" class="btn btn-warning" value="Submit">
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
