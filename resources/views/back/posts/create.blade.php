@extends('layouts.admin')
@section('title')
  Add Post
@endsection
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
  <a href="{{ route('posts.index')}}"> All Posts</a>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="text">Keyword</label>
              <input type="text" class="form-control" name="keyword"/>
          </div>
          <div class="form-group">
              <label for="text">Description</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="text">Heading</label>
              <input type="text" class="form-control" name="heading"/>
          </div>
          <div class="form-group">
              <label for="text">Short Story</label>
              <input type="text" class="form-control" name="shortstory"/>
          </div>
          <div class="form-group">
              <label for="text">Full Story</label>
              <input type="text" class="form-control" name="fullstory"/>
          </div>
          <div class="form-group">
              <label for="image">Feature Image :</label>
              <input type="file" class="form-control" name="files"/>
          </div>
          <div class="form-group">
              <label for="text">Category</label>
              <select name="category_id">
              @foreach($cats as $item)
              <option value= " {{ $item->id }} ">{{ $item->name }}  </option>
              
              @endforeach
              </select>
          </div>
        
          <div class="form-group">
              <label for="quantity">Status</label>
              <input type="text" class="form-control" name="status"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection