<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Landing</title>
</head>
<body>
    @auth
        <x-logged />
        @foreach ($posts as $post)
            <div class="post border-2 border-slate-400 p-4">
                <h1>{{ $post['title']}}</h1>
                <p>{{ $post['content']}}</p>
                <a href='/edit/post/{{$post['id']}}'>edit</a>
                <form action='/delete/post/{{$post['id']}}' method='post'>
                    @csrf
                    @method('DELETE') 
                    <button>submit</button>
                </form>
            </div>
        @endforeach
    @else
    <h1 class='text-center'>register</h1>
    <form class='block m-auto w-1/2 mt-3' action="/register" method='POST'>
        @csrf
        <input class='border-2 border-slate-400 p-2' name='name' type='text' placeholder="username">
        <input class='border-2 border-slate-400 p-2' name='email' type='text' placeholder="email">
        <input class='border-2 border-slate-400 p-2' name='password' type='text' placeholder="password">
        <button class='border-2 border-slate-400 p-2' type="submit">submit</button>
    </form>
    <h1 class='text-center'>login</h1>
    <form class='block m-auto w-1/2 mt-3' action='/login' method='post'>
        @csrf
        <input class='border-2 border-slate-400 p-2' name='luser' type='text' placeholder="username" />
        <input class='border-2 border-slate-400 p-2' name='lpass' type='password' placeholder="password" />
        <button class='border-2 border-slate-400 p-2'>login</button>
    </form>
    @endauth
</body>
</html>