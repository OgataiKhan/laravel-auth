@extends('layouts.admin')

@section('content')
    <ul class="py-4">
      @foreach ($projects as $project)
          <li>
            {{ $project->title }}
          </li>
      @endforeach
    </ul>
@endsection