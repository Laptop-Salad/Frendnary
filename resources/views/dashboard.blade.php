@extends("base")

@section("title", "Dashboard")

@section("content")
<main id="dashboard">
    <input id="search" name="search" type="text" placeholder="Search">

    <p class="y-notif">Note: If a friend has created a friend group, ask them to invite you and the group will appear 
        below
    </p>

    <h1>{{ Auth::user()->username }}</h1>
    <a class="p-btn" href="/newgroup">Create New Friend Group</a>

    <h2>My Friend Groups</h2>
    <div>
        @foreach ($groups as $group)
            <a href="/group/{{ $group }}" class="y-btn">{{ $group }}</a>
        @endforeach
    </div>
</main>
@stop