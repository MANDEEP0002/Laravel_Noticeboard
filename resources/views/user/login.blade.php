
<x-userlayout><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-4">
                <h2 class="text-center mb-4">User Login</h2>
                <form method="POST" action="">
                    <!-- Username Input -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input 
                            type="text" 
                            name="username" 
                            id="username" 
                            class="form-control" 
                            placeholder="Enter your username" 
                            required>
                    </div>
                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control" 
                            placeholder="Enter your password" 
                            required>
                    </div>
                    <!-- Registration Link -->
                    <div class="mb-3 text-center">
                        <a href="/register" class="text-decoration-none">Register User</a>
                    </div>
                    <!-- Login Button -->
                    <button type="submit" class="btn btn-dark w-100">Login</button>
                </form>
            </div>
        </div>
    
   

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-userlayout>
