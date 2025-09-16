@extends('layout.app')

@section('content')
<div class="container">
  <form action="{{ route('todo.handleEdit', $todo->id) }}" method='POST'>
    <div class="card shadow-sm card-note bg-white">
      @csrf
      @method('PUT')
      <h4 class="fw-bold">Share and Save Your Notes</h4>
      <p class="text-muted mb-4">Write down the things that are important to you</p>
  
      <div class="mb-3">
        <label class="form-label fw-semibold">Title</label>
        <input type="text" value="{{ old('title', $todo->title) }}" class="form-control rounded-pill" placeholder="Enter your title" name='title'>
        @error('title')
          <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label class="form-label fw-semibold">Note</label>
        <textarea class="form-control" rows="5" placeholder="Write your note here..." name='body'>{{ old( 'body', $todo->body) }}</textarea>
        @error('body')
          <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
      </div>
  
      <button type="submit" class="btn btn-submit">Submit Note</button>
    </div>
  </form>
</div>
@endsection