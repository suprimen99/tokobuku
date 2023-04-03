@extends('layouts.main')
@section('title', 'Edit categories')
@section('content')

<h1>Category</h1>

<div class="my-5">
    <div class="mt-3 d-flex justify-content-end">
        <a href="/category-add" class="btn btn-primary me-5">Add new</a>
        <a href="category-deleted" class="btn btn-secondary">View Deleted Data </a>
    </div>
    <div class="mt-1 col-lg-6">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Category as $categories)
            <tr><td>{{ $loop->iteration }}</td>
                <td>{{ $categories->name }}</td>
                <td>
                    <a class="btn btn-primary" href="/category-edit/{{ $categories->slug }}">edit</a>
                    <a  class="btn btn-danger" href="/category-delete/{{ $categories->slug }}">delete </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
