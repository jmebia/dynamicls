@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Pages</h3>
    <a href="/v1/page/builder" class="btn btn-primary btn-sm mb-2">Add Page</a>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->name }}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm disabled">Modify</a>
                        <a href="#" class="btn btn-danger btn-sm disabled">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection