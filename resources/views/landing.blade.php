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
         
    @else

    @endauth
    <h1 class='text-red'>crud landing</h1>
    <form action="/landing/register" method='POST'>
        @csrf
        <input class='border-2 border-slate-400 p-2' name='name' type='text' placeholder="whatever">
        <input class='border-2 border-slate-400 p-2' name='email' type='text' placeholder="whatever">
        <input class='border-2 border-slate-400 p-2' name='password' type='text' placeholder="whatever">
        <button class='border-2 border-slate-400 p-2' type="submit">submit</button>
    </form>
</body>
</html>