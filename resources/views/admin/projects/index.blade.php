@extends('layouts.admin')

@section('content')
    <div class="container pt-4">
        <header class="mb-2">
            <h1>Projects list</h1>
            <a rel="stylesheet" href="{{ route('admin.projects.create') }}" role="button" class="btn btn-primary">Create new
                project</a>
        </header>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">slug</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a rel="stylesheet" href="{{ route('admin.projects.show', $project) }}" role="button"
                                class="btn btn-info btn-sm">show</a>
                            <a rel="stylesheet" href="" role="button" class="btn btn-primary btn-sm">edit</a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
