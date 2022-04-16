<!DOCTYPE HTML>
<html lang="{{str_replace('_' , '-',app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>
　  </head>
    <body>
      <h1>Blog name</h1>
      <form action="/posts/{{$post->id}}" method="POST">
          @csrf
          @method('PUT')
          <div class ="title">
              <h2>Title</h2>
             <input type="text" name="post[title]" placeholder="タイトル"value="{{$post->title}}">
          </div>
          <div class ="body">
             <h2>Body</h2>
             <textarea type="text" name="post[body]" placeholder="I enjoyed playing baseball">{{$post->body}}</textarea>
          </div>
          <input type="submit" value="update"/>
      </form>
      <div class ='back'>[<a href="/posts/{{$post->id}}">back</a>] </div>
    </body>
</html>
