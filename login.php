<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Login form</h2>
                <form action="validation.php" method="post">
                 <div class="form-group">
                  <label>username</label>
                  <input type="text" name="user" class="form-control">
                 </div>
                 <div class="form-group">
                  <label>password</label>
                  <input type="password" name="password" class="form-control">
                 </div>
                 <button type="submit" class="btn btn-primary">Login</button>
                </form>
             
        </div>

        <div class="col-lg-6">
                <h2>Signin form</h2>
                <form action="registration.php" method="post">
                 <div class="form-group">
                  <label>username</label>
                  <input type="text" name="user" class="form-control">
                 </div>
                 <div class="form-group">
                  <label>password</label>
                  <input type="password" name="password" class="form-control">
                 </div>
                 <button type="submit" class="btn btn-primary">signin</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>