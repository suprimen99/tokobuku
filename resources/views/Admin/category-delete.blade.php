@extends('layouts.main')
@section('title', 'Category Delete')

@section('content')
<h2>Are you sure to delete category {{ $category->name }}</h2>
<div class="mt-3">
    <a href="/category-destroy/{{ $category->slug }}" class="btn btn-danger me-5">YES</a>
    <a href="/categories" class="btn btn-primary">NO</a>
</div>
@endsection
