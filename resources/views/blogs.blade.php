<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<style>
        body{
            font-family:Cambria;
        }
        h1{
            color:Blue;
            
        }
        .tablink {
            background-color: Blue;
            color: white;
            float: right;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 8px;
            font-size: 17px;
            width: 15%;
        }
        .tablink:hover {
             background-color: #7777;
        }
    </style>
<body>
        
        <div><a href="/blogs/create"><button class="tablink" >Create new blog</button></a></div>
    
    @foreach($posts as $posts)
    <article>
        <h1>
            <a href="/blog/{{ $posts->slug }}">{{$posts->title}}</a>
        </h1>
        <p>{{$posts->excerpt}}</p>
    </article>
    @endforeach
    
</body>
</html>