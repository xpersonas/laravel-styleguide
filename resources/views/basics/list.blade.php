@extends('styleguide::layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <h1>Basic Settings</h1>
    <div class="uper">
        @if(count($basics))
            You have settings.
            <a href="{{route('basics.edit', $basics[0]->id)}}">Edit Settings</a>
        @else
            You don't have any basic settings yet.
            <a href="{{route('basics.create')}}">Create Settings</a>
        @endif
    <div>
@endsection
