<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRBEP Notes - View</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f7fc;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: #007bff;
    }
    .search-bar {
      max-width: 800px;
      margin: 20px auto;
    }
    .search-bar .form-control {
      border-radius: 50rem;
      padding-right: 3rem;
    }
    .search-bar .input-group-text {
      border: none;
      background: transparent;
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 10;
    }
    .note-card {
      max-width: 800px;
      margin: 20px auto;
      border-radius: 1.5rem;
    }
    .note-card .card-body {
      padding: 1.5rem;
    }
    .note-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .note-actions .left {
      color: #dc3545;
      font-weight: 500;
    }
    .note-actions .right a {
      text-decoration: none;
      margin-left: 15px;
      font-weight: 500;
      color: #20c997;
    }
    
    /* Form create */
    .card-note {
      max-width: 800px;
      margin: 50px auto;
      border-radius: 2rem;
      padding: 2rem;
    }
    .form-control.rounded-pill {
      border-radius: 50rem !important;
      background-color: #e9edf5;
      border: none;
    }
    .btn-submit {
      background-color: #007bff;
      border: none;
      border-radius: 50rem;
      padding: .5rem 1.5rem;
      font-weight: 600;
    }
    .btn-submit:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="{{ route('todo.index') }}">
      <img src="https://cdn-icons-png.flaticon.com/512/1827/1827272.png" alt="logo" width="32" class="me-2">
      <strong>TODOAPP</strong>
    </a>
    <div class="ms-auto dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
        Hi, There
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="/todo/create">New Todo</a></li>
        <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
