<h1>welcome back</h1>
<form method='post' action='/logout'>
    @csrf
    <button class='border-2 border-slate-400 p-2' action='/logout' method='post'>logout</button>
</form>

<div class="content">
    <h1>create a post</h1>
    <form action='/spost' method='post'>
        @csrf
        <input class='input' type='text' name='title' placeholder='title' />
        <input class='input' type='text' name='content' placeholder='content' />
        <button>submit</button>
    </form>
</div>