@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('page.store') }}">
        @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label">Page Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="inputName" name="name" aria-describedby="inputName" required>
            <div id="nameHelp" class="form-text small">Page name must be unique!</div>
        </div>
        <div class="mb-3">
            <label for="inputContent" class="form-label">Page Body <span class="text-danger">*</span></label>
            <textarea type="text" class="form-control form-control" rows="6" id="inputContent" name="content" aria-describedby="inputContent" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection