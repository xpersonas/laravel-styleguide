@extends('styleguide::layout')

@section('content')
    <div class="styleguide-container">
        <div class="simple-styleguide--site-styles">
            <h1>Styleguide Components</h1>
            <p>This page displays all the default components found in the styleguide. You will need to place this within your own app to apply your css styles.</p>
            <p>
                To place within your own blade template files use the component <code>&lt;x-styleguide-base /&gt;</code>.
            </p>
        </div>

        <x-styleguide-base />
    </div>
@endsection
