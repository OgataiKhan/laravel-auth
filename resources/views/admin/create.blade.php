@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Add New Project</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="technologies">Technologies</label>
                <input type="text" class="form-control" id="technologies" name="technologies">
            </div>
            <div class="form-group mb-3">
                <label for="url">Project URL</label>
                <input type="url" class="form-control" id="url" name="url">
            </div>
            <div class="form-group mb-3">
                <label for="image_url">Image URL</label>
                <input type="text" class="form-control" id="image_url" name="image_url">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
