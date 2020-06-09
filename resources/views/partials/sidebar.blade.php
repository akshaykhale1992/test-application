<div id="sidebar">
    <div class="inner">
        <nav id="menu">
            <header class="major">
                <h2>Menu</h2>
            </header>
            <ul>
                <li><a href="{{ url('') }}">Homepage</a></li>
                <li>
                    <span class="opener">User Pages</span>
                    <ul>
                        <li><a href="{{ url('users/create') }}">Create a New User</a></li>
                        <li><a href="{{ url('users') }}">Show Users</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        @include('partials.footer')

    </div>
</div>