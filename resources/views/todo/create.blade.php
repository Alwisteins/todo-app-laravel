@extends('layout.app')

@section('content')
<div class="container">
    <div class="card shadow-sm card-note bg-white">
      <h4 class="fw-bold">Share and Save Your Notes</h4>
      <p class="text-muted mb-4">Write down the things that are important to you</p>
  
      <div class="mb-3">
        <label class="form-label fw-semibold">Title</label>
        <input type="text" class="form-control rounded-pill" placeholder="Enter your title">
      </div>
  
      <div class="mb-3">
        <label class="form-label fw-semibold">Note</label>
        <textarea class="form-control" rows="5" placeholder="Write your note here..."></textarea>
      </div>
  
      <button type="button" class="btn btn-submit">Submit Note</button>
    </div>
  </div>
@endsection