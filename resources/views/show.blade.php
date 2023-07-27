@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1>{{$project->name}}</h1>
        <p>{{$project->description}}</p>
        <ul class="list-unstyled">
            <li>{{$project->start_date}}</li>
            <li>{{$project->end_date}}</li>
            <li>{{$project->difficulty}}</li>
            <li>{{$project->type->name}}</li>
        </ul>
    </div>
@endsection
