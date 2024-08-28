<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #fff !important;
        }
        .card {
            border-radius: 10px;
        }
        .btn-primary, .btn-warning, .btn-danger {
            border-radius: 20px;
        }
        .form-control, .form-select {
            border-radius: 10px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .container {
            margin-top: 30px;
        }
        footer {
            margin-top: 20px;
            padding: 10px 0;
            text-align: center;
            background-color: #343a40;
            color: #fff;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('items.index') }}">Inventory Management</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2024 Inventory Management</p>
        </div>
    </footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
