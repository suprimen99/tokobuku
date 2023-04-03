@extends('layouts.main')
@section('title', 'Edit categories')
@section('content')

<h1>list Category deleted</h1>
<div class="mt-5 d-flex justify-content-end">
    <a href="categories" class="btn btn-primary"> back</a>
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
            @foreach ($deletedcategory as $categories)
            <tr><td>{{ $loop->iteration }}</td>
                <td>{{ $categories->name }}</td>
                <td>
                    <a class="btn btn-primary" href="category-restore/{{ $categories->slug }}">back</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
