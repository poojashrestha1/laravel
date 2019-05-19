@extends('layouts.admin')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('posts.update', $posts->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Title:</label>
          <input type="text" class="form-control" name="title" value={{ $posts->title }} />
        </div>
        <div class="form-group">
          <label for="name">Keyword:</label>
          <input type="text" class="form-control" name="keyword" value={{ $posts->keyword }} />
        </div>

        <div class="form-group">
          <label for="price">Description:</label>
          <input type="text" class="form-control" name="description" value={{ $posts->description }} />
        </div>
        <div class="form-group">
              <label for="text">Heading</label>
              <input type="text" class="form-control" name="heading" value={{ $posts->heading}} />
          </div>
          <div class="form-group">
              <label for="text">Short Story</label>
              <input type="text" class="form-control" name="shortstory" value={{ $posts->shortstory }}/>
          </div>
          <div class="form-group">
              <label for="text">Full Story</label>
              <input type="text" class="form-control" name="fullstory" value={{ $posts->fullstory }} />
          </div>
        <div class="form-group">
          <label for="quantity">Status:</label>
          <input type="text" class="form-control" name="status" value={{ $posts->status}} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection