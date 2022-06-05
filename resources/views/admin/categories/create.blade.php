@extends('layouts.app')

@section('title', 'New Category')

@section('content')

<form action="{{ route('admin.categories.store') }}" method='POST' class="my-height">
@csrf
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12">
                    <label for="name" class="size-label">Name Category</label>
                    <input type="text" class="m-3" name="name" id="name">
                    @error('name')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="color" class="form-label">Color picker</label>
                    <input type="color" class="form-control form-control-color" id="color" value="#000000" title="Choose your color category" name="color">
                    @error('color')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-4 text-center">
                    <input type="submit" class="btn btn-warning" value="Submit">
                </div>
            </div>
        </div>

</form>

@endsection
