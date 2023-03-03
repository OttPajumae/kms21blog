<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl" href="{{route('public.index')}}">{{config('app.name')}}</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{route('articles.index')}}">Articles</a></li>
        </ul>
    </div>
</div>
