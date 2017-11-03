@extends('layouts.app')

@section('content')
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
    </div>
</div>
@endsection
