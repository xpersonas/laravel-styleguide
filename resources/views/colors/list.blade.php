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
                <td class="align-middle">ID</td>
                <td class="align-middle">Class</td>
                <td class="align-middle">Description</td>
                <td class="align-middle">Color</td>
                <td class="align-middle">Preview</td>
                <td class="align-middle" colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($colors as $color)
                <tr>
                    <td class="align-middle">{{$color->id}}</td>
                    <td class="align-middle">{{$color->class}}</td>
                    <td class="align-middle">{{$color->description}}</td>
                    <td class="align-middle">{{$color->hex}}</td>
                    <td class="align-middle"><span style="display: block; background: {{$color->hex}}; width: 100%;">&nbsp;</span></td>
                    <td class="align-middle"><a href="{{ route('color.edit', $color->id)}}" class="btn btn-primary">Edit</a></td>
                    <td class="align-middle">
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
