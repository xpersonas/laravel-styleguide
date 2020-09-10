<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('simple-styleguide') }}">Styleguide</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ (Route::currentRouteName() == 'basics.edit') ? 'active' : '' }}" href="{{ route('basics.index') }}">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Route::currentRouteName() == 'pattern.index') ? 'active' : '' }}" href="{{ route('pattern.index') }}">Patterns</a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ (Route::currentRouteName() == 'pattern.create') ? 'active' : '' }}" href="{{ route('pattern.create') }}">Add Pattern</a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link {{ (Route::currentRouteName() == 'color.index') ? 'active' : '' }}" href="{{ route('color.index') }}">Colors</a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ (Route::currentRouteName() == 'color.create') ? 'active' : '' }}" href="{{ route('color.create') }}">Add Color</a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link {{ (Route::currentRouteName() == 'simple-styleguide') ? 'active' : '' }}" href="{{ route('simple-styleguide') }}">Preview</a>
            </li>
        </ul>
    </div>
</nav>
