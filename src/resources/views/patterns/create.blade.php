@extends('styleguide::layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <h1>Add Custom Pattern</h1>
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
            <form method="post" action="{{ route('pattern.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="country_name">Title:</label>
                    <input type="text" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="symptoms">Description:</label>
                    <textarea rows="5" columns="5" class="form-control" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="symptoms">Pattern:</label>
                    <textarea rows="5" columns="5" class="coder form-control" name="pattern"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Pattern</button>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @parent
    @include('styleguide::codemirror')
@stop
