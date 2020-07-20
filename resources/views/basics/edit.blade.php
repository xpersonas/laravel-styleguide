@extends('styleguide::layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <h1>Edit Basic Settings</h1>
    <div class="card uper">
        <div class="card-header">
            Edit Styleguide Basic Settings
        </div>
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

            @isset($basics)
                <form method="post" action="{{ route('basics.update', $basics->id ) }}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        @foreach($fillable as $value)
                            <div class="form-check">
                                @if($basics->$value)
                                    <input type="checkbox" class="form-check-input" name="basics[]" value="{{$value}}" checked="checked"/>
                                @else
                                    <input type="checkbox" class="form-check-input" name="basics[]" value="{{$value}}"/>
                                @endif

                                <label  class="form-check-label"for="{{$value}}">{{$value}}</label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-primary">Update Basic</button>
                </form>
            @else
                <form method="post" action="{{ route('basics.store') }}">
                    @csrf

                    <div class="form-group">
                        @foreach($fillable as $value)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="basics[]" value="{{$value}}"/>
                                <label  class="form-check-label"for="{{$value}}">{{$value}}</label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-primary">Add Settings</button>
                </form>
            @endif

        </div>
    </div>
@endsection
