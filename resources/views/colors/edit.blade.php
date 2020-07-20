@extends('styleguide::layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <h1>Edit Color</h1>
    <div class="card uper">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('color.update', $color->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Class:</label>
                    <input type="text" class="form-control" name="class" value="{{ $color->class }}"/>
                </div>
                <div class="form-group">
                    <label for="symptoms">Description:</label>
                    <textarea rows="5" columns="5" class="form-control" name="description">{{ $color->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="symptoms">Hex:</label>
                    <input type="text" class="form-control" name="hex" value="{{ $color->hex }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Color</button>
            </form>
        </div>
    </div>
@endsection
