@extends("base")

@section("title", "Create New Group")

@section("content")
<main id="creategroup" class="centered">
    <img src="{{asset('images/friend-hug.png')}}" class="w-30" alt="Illustration of friends hugging">
    <h1>Create Friend Group</h1>
    
    <form action="/newgroup" method="POST" class="centered-block">
        @csrf 
        
        <p class="y-notif inline-notif">Your unique ID is {{ Auth::user()->id }}</p>
        <input id="groupName" name="groupname" type="text">
        <p id="groupAvail">Group name is not available ❌</p>
        <input id="submit" type="submit" value="Create" class="p-btn" disabled>
    </form>
</main>

@vite("resources/js/newgroup.js")

@stop