<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl" href="{{route('public.index')}}">{{config('app.name')}}</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            @auth
                <li><a href="{{route('articles.index')}}">Articles</a></li>
                <li tabindex="0">
                    <a>
                        {{Auth::user()->name}}
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a href="{{route('profile.edit')}}">Profile</a></li>
                        <li><button form="logout">Logout</button></li>
                        <form id="logout" action="{{route('logout')}}" method="POST">
                            @csrf
                        </form>
                    </ul>
                </li>
            @endauth
            @guest
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
            @endguest
        </ul>
    </div>
</div>
