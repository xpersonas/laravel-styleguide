@extends('styleguide::layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <h1>Patterns</h1>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="form-group">
            <a href="{{ route('pattern.create') }}" class="btn btn-primary">Add pattern</a>
        </div>

        @if(!$patterns->isEmpty())
        <table class="table table-striped">
            <thead>
            <tr>
                <td class="align-middle">ID</td>
                <td class="align-middle">Title</td>
                <td class="align-middle">Description</td>
                <td class="align-middle" colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($patterns as $pattern)
                <tr>
                    <td class="align-middle">{{$pattern->id}}</td>
                    <td class="align-middle">{{$pattern->title}}</td>
                    <td class="align-middle">{{$pattern->description}}</td>
                    <td class="align-middle"><a href="{{ route('pattern.edit', $pattern->id)}}" class="btn btn-primary">Edit</a></td>
                    <td class="align-middle">
                        <form action="{{ route('pattern.destroy', $pattern->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @endif
    <div>
@endsection
