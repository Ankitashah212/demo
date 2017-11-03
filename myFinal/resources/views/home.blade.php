@extends('layouts.app')

@section('content')
<style>
.new-post{
 padding: 16px 0;
 border-bottom: 1px solid #ccc;
}

.new-post header,
.posts header

{
    margin-bottom: 20px;
}
.posts .post {
    padding-left: 10px;
    border-left: 3px solid red;
    margin-bottom: 30px;
}

.posts .post .info {
    color: #aaa;
    font-style: italic;
}
</style>
<div class="container">
    <div class="row new-post">
       <div class="col-md-6 col-offset-3">
           <header>
               <h2>Create a New Post</h2>
           </header>
           <form action="" method="post">
               <div class="form-group">
                   <textarea class="form-control" name="newPost" id="newPost" rows="5"></textarea>
               </div>
               <button class="btn btn-primary" type="submit"> Post</button>
           </form>
       </div>
    </div>


    <div class="row post">
        <div class="col-md-6 col-offset-3">
            <header><h2>Other Posts</h2></header>
            <article class = "post">
                <p>some text</p>
                <div class="info">
                    posted By
                </div>
                <div class ="interactions">
                    <a href="http://">Like</a> |
                    <a href="http://">edit</a> |
                    <a href="http://">Delete</a> |
                    <a href="http://">flag</a>


                </div>
            </article>
        </div>
    </div>
</div>
@endsection
