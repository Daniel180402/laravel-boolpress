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
            @forelse ( $categories as $category )
            <a class="text-decoration-none text-black" href="{{route('admin.categories.show', $category)}}">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body" style="background-color: {{$category->color}}">
                            <h5 class="card-title">{{$category->name}}</h5>
                        </div>
                    </div>
                </div>
            </a>
            @empty
                <div class="col">
                    <h4>There are no category</h4>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
