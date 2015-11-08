<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Bee</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="/">Home</a></li>
                @if ($loggedInUser)
                    {{--<li>{!! link_to('resources', 'Res1', $attributes = [], $secure = null) !!}</li>--}}
                    <li>{!! link_to_action('ResourcesController@index', 'Resources', $parameters = [], $attributes = []) !!}</li>
                    {{--<li>{!! link_to_route('resources_route', 'Res3', $parameters = [], $attributes = []) !!}</li>--}}
                    {{--<li><a href="{!! url('resources', $parameters = [], $secure = null) !!}">Res4</a></li>--}}
                    {{--<li><a href="{!! route('resources_route', $params = []) !!}">Res5</a></li>--}}
                    {{--<li><a href="{!! action('ResourcesController@index', $params = []) !!}">Res6</a></li>--}}
                    {{--<li><a href="/resources">Res7</a></li>--}}
                @endif
                <li>{!! link_to_action('ContactController@index', 'Contact', $parameters = [], $attributes = []) !!}</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--LoggedInUser is needed on every page. Defined in a view composer.--}}
                @if (!$loggedInUser)<li><a href="/auth/login">Login</a></li>@endif
                @if ($loggedInUser)<li><a href="/auth/logout">Logout</a></li>@endif
                @if (!$loggedInUser)<li><a href="/auth/register">Register</a></li>@endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>