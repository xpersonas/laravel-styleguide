@extends('styleguide::layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <h1>Colors</h1>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="form-group">
            <a href="{{ route('color.create') }}" class="btn btn-primary">Add color</a>
        </div>

        @if(!$colors->isEmpty())
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Class</td>
                <td>Description</td>
                <td>Color</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($colors as $color)
                <tr>
                    <td>{{$color->id}}</td>
                    <td>{{$color->class}}</td>
                    <td>{{$color->description}}</td>
                    <td>{{$color->hex}}</td>
                    <td><a href="{{ route('color.edit', $color->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('color.destroy', $color->id)}}" method="post">
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
