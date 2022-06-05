@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

<form action="{{ route('admin.categories.update', ['category' => $category]) }}" method='post' class="my-height">
@csrf
@method('PUT')
    <div class="container h-100 ">
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12">
                    <label for="name" class="size-label">Name Category</label>
                    <input type="text" class="m-3" name="name" value="{{$category->name}}" id="name">

                </div>
                <div class="col-12">
                    <label for="color" class="form-label">Color picker</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="{{$category->name}}">

                </div>
                <div class="col-4 text-center">
                    <input type="submit" class="btn btn-warning" value="Submit">
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
