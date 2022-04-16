<!DOCTYPE HTML>
<html lang="{{str_replace('_' , '-',app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>
　  </head>
    <body>
      <h1>Blog name</h1>
      <form action="/posts" method="POST">
          @csrf
          <div class ="title">
              <h2>Title</h2>
             <input type="text" name="post[title]" placeholder="Hello" value="{{old("post.title")}}"/>
             <p class ="post__title" style="color:red">{{$errors->first("post.title")}}</p>
          </div>
          <div class ="body">
             <h2>Body</h2>
             <textarea name="post[body]" placeholder="I enjoyed playing baseball">{{old("post.body")}}</textarea>
              <p class ="post__body" style="color:red">{{$errors->first("post.body")}}</p>
          </div>
          <input type="submit" value="create"/>
      </form>
      <div class ="back">[<a href="/">back</a>] </div>
    </body>
</html>
