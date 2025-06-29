<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; min-height: 100vh; margin: 0; }
        .sidebar {
            width: 220px;
            background-color: #343a40;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
    <h4>Fan Club Admin</h4>
    <hr>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <!-- ✅ Carousel Upload Link -->
    <a href="{{ route('admin.flower-stories.index') }}">Flower Stories uplaod</a>
    <a href="{{ route('admin.country-sections.index') }}">Country Content Sections</a>


    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button class="btn btn-danger btn-sm mt-3">Logout</button>
    </form>
</div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
