@extends('layouts.master')

@section('title')
Welcome!
@endsection

@section('content')

<div class="row">
    <div class="col-6">
      <form action="#" method="post">
          <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" name="email" id="email">
          </div>
          <div class="form-group">
              <label for="screen-name">Screen Name</label>
              <input class="form-control" type="text" name="screen-name" id="screen-name">
          </div>
          <div class="form-group">
              <label for="password">Email</label>
              <input class="form-control" type="password" name="password" id="password">
          </div>
          <button type="submit" class="btn btn-primary"></button>
      </form>
    </div>
</div>
@endsection