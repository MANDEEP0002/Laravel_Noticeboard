<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }
        .container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
        }
    </style>
    <title>Notice Board</title>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Notice Board</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                       
                        @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link active" href="/logout">Logout</a>
                        </li>
                        @else
                        <li class="nav-item">
                          <a class="nav-link active" href="/login">Login</a>
                        </li>
                        @endif
                  
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="d-flex justify-content-center align-items-center">
        <div class="container">
          <!-- Dynamic Content -->
          {{ $slot }}
        </div>
      </main>

    <!-- Footer -->
    <footer class="footer">
        &copy; <?php echo date('Y'); ?> Notice Board. All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

