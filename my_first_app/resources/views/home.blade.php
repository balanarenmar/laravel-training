<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @auth
        <!--If user is logged in with a cookie and a session-->
        <p>CONGRATS! You are Logged In.</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>

        <div style="border: 3px solid black;">
            <h2>Create a new post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="post title">
                <textarea name="body" placeholder="blog content"></textarea>
                <button>Save Post</button>
            </form>
        </div>

        <div style="border: 3px solid black;">
            <h2>ALL POSTS</h2>
            @foreach($posts as $post)
                <div style="background-color: gray; padding: 10px; margin: 10px;">
                    <h2>{{$post['title']}} by <i>{{$post->user->name}}</i> </h2>
                    {{$post['body']}}
                    <p><a href="/edit-post/{{$post->id}}">EDIT</a></p>
                    <form action="/delete-post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>DELETE</button>
                    </form>
                </div>
            @endforeach
        </div>

    @else
        <!--If user is NOT logged in-->
        <div style="border: 3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="name">
                <input name="email" type="text" placeholder="email">
                <input name="password" type="password" placeholder="password">
                <button>Register</button>
            </form>
        </div>
        <div style="border: 3px solid black;">
            <h2>Log in</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="name">
                <input name="loginpassword" type="password" placeholder="password">
                <button>Log In</button>
            </form>
        </div>

    @endauth


</body>
</html>