<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
               <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                  <div class="card-body">
                    <form method='post' action='loginvalid.php'>
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder=" Enter password" required>
                        </div>

                        <div class="text-center d-grid gap-2">
                            <button class="btn btn-primary" id="login">LOGIN</button>

                        </div>
                        <p class="mt-3">Don't have an account? <a href="register.html" data-toggle="modal">Register here</a></p>
                    </form>
                  </div>
               </div>
            </div>
        </div>
    </div>