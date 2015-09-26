<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Homepage</a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav">
            @if(Auth::user())
                <li class="active"><a href="/tournaments/create">Create Tournament</a></li>
                <li class="active"><a href="/user/dashboard">Dashboard</a></li>
            @endif
        </ul>

        <ul class="nav navbar-nav navbar-right">
            @if(Auth::user())
                <li class="active"><a href="/auth/logout">Logout</a></li>
            @else
                <li class="active"><a href="/auth/register">Register</a></li>
                <li class="active"><a href="/auth/login">Login</a></li>
            @endif
        </ul>

    </div><!--/.nav-collapse -->
</div>
</nav>