@extends('layouts.admin')
@section('title')
  All Posts
@endsection
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
            <td colspan=6><a href="{{ route('posts.create')}}" class="btn btn-primary">Add Post</a></td>
        </tr>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Keyword</td>
          <td>Description</td>
          <td>Heading</td>
          <td>Short Story</td>
          <td>Full Story</td>
          <td>Image</td>
          <td>Category ID</td>
          <td>User ID</td> 
          <td>Status</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->heading}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->status}}</td>
            <td><a href="{{ route('posts.edit',$item->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('posts.destroy', $item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
