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
            <div class="col-12 show-height text-center">
                <div class="card h-100 ">
                    <div class="card-body" style="background-color: {{$category->color}}">
                        <h5 class="card-title">{{$category->name}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row justify-content-around">
                    <div class="col-3">
                        <a href="{{route('admin.categories.show', $category->id - 1)}}">
                            <button class="btn btn-success">Previus</button>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{route('admin.categories.edit', $category)}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                    </div>
                    <form action="{{route('admin.categories.destroy', $category)}}" class="col-3 blackhole" method="POST" category-name="{{ucwords($category->name)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    <div class="col-3">
                        <a href="{{route('admin.categories.show', $category->id + 1)}}">
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
            userConfirm = window.confirm(`Are You Sure To Delate ${this.getAttribute('category-name')}`);
            if(userConfirm) {
                this.submit();
            }
        })
    });
    </script>
@endsection
