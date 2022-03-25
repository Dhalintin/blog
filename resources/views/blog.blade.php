<html>
    <head>
        <title>Blog Site</title>

    <style>
        body{
            font-family:Cambria;
        }
        h1{
            color:Blue;
            
        }
    </style>
    </head>

    <body>
      
        <article>
            <h1>
                {{$post->title}}
            </h1>
            <p>{{$post->body}}</p>
        </article>
      
       
    <p>Return <a href="/">Home</a></p>
    </body>
</html>