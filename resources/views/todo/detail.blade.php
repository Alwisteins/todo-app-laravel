@extends('layout.app')

@section('content')
<div class="container mt-4">
  <div class="text-center">
    <h4 class="fw-bold">Yeah, Here's your note ✨🎉</h4>
    <p class="text-muted">This record will be deleted 1x24 hours after you submit unless you have an account</p>
  </div>

  <!-- Note Card -->
  <div class="card shadow-sm note-card">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <img src="https://cdn-icons-png.flaticon.com/512/1827/1827272.png" width="32" class="me-2">
        <div>
          <div class="fw-bold">{{ $todo->title }}</div>
          <small class="text-muted">{{ $todo->updated_at->diffForHumans() }}</small>
        </div>
      </div>
      <div class="mb-3">
        {!! $todo->body !!}
      </div>
      <div class="note-actions">
        <div class="left">
          <form action="{{ route('todo.handleDelete', $todo->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-0 bg-transparent">
              <p class="text-red-600"><i class="bi bi-trash me-1 text-red-600"></i> Delete</p>
            </button>
          </form>
        </div>
        <div class="right">
          <a href="{{ route('todo.edit', $todo->id) }}"><i class="bi bi-pencil me-1"></i>Edit</a>
          {{-- <a href="#"><i class="bi bi-share me-1"></i>Share</a> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection