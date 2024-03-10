@extends("base")

@section("title", "Dashboard")

@section("content")
<main id="dashboard">
    <input id="search" name="search" type="text" placeholder="Search">

    <p class="y-notif">Note: If a friend has created a friend group, ask them to invite you and the group will appear 
        below
    </p>

    <h1>{{ Auth::user()->username }}</h1>
    <button class="p-btn">Create New Friend Group</button>

    <h2>My Friend Groups</h2>
</main>
@stop