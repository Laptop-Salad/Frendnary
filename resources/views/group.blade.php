@extends("base")

@section("title", "Dashboard")

@section("content")
<main id="group">
    <form action="/group/groupname/searchdef" method="GET">
        <input id="searchDef" type="text" name="searchdef" placeholder="Search for definitions">
    </form>

    <form action="/group/groupname/adddef" method="POST">
        <input id="addDef" type="text" name="adddef">
        <input id="submit" type="submit" value="Add Definition">
    </form>

    <section>
        <div class="flex-container">
            <h1>Group Name</h1>
            <a href="group/groupname/invitefriend" class="p-btn">Invite Friend</a>
        </div>

        <section>
            <div>
                <div>
                    <h2>Some definition</h2>
                    <p>Saturday, December 16 2023</p>
                    <button class="r-btn">Delete</button>    
                </div>
                
                <p>"I would like some eggs" - Somecooldude</p>
            </div>
            
        </section>
    </section>
</main>
@stop