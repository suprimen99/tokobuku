@extends('layouts.main')

@section('title', 'Edit Category')

@section('content')
<h1>Edit Category</h1>

<div class="mt-3"></div>

<div class="col-lg-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
@endif
    <form action="/category-edit/{{$category->slug}}" method="POST">
        @csrf
        @method('put')
            <div class="w-50">
                <label for="name">Name Categories</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Input Name" value="{{ $category->name}}">
            </div>

            <div class="mt-3 ">
                <button class="btn btn-success" type="submit"> <span><i class="bi bi-check2-square"></i></span> Update</button>
            </div>
    </form>
</div>
@endsection
