@extends('layouts.main')
@section('title','dashboard')

@section('content')

<h1>Welcome, {{ Auth::user()->username }}</h1>

<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card books">
            <div class="row">
                <div class="col-6"><i class="bi bi-journal-bookmark-fill"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="desc">books</div>
                    <div class="count">{{ $books_count }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card category">
            <div class="row">
                <div class="col-6"><i class="bi bi-list-ol"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="desc">category</div>
                    <div class="count">{{ $category_count }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card user">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-content-end">
                    <div class="desc">user</div>
                    <div class="count">{{ $user_count }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <h3>#Rent Log</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Books Title</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" style="text-align:center;">Not Found</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
