<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>

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
    <h1>Create New Post</h1>
    <form action ="/blogs/store" method="POST">
        @csrf

        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" </input>
        </div>
        @error('slug')
        <div>{{ $message }}</div>
        @enderror
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" </input>
        </div>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
        
        <div>
            <label for="excerpt">Excerpt</label>
            <input type="text" name="excerpt" id="excerpt" </input>
        </div>
        @error('excerpt')
        <div>{{ $message }}</div>
        @enderror
        
        <div>
            <label for="body">Body</label>
            <textarea  name="body" id="body" ></textarea>
        </div>
        @error('body')
        <div>{{ $message }}</div>
        @enderror

        <div>
            <button type="submit">Submit</button>
        </div>

        <p>Return <a href="/">Home</a></p>
    </form>
</body>
</html>