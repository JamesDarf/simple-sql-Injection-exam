<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WorkTable1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50vh;
    }

    .login-form {
      width: 350px;
      padding: 20px;
      border-radius: 8px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      margin-bottom: 20px;
      padding: 15px;
      font-size: 16px;
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      font-size: 18px;
    }

    header {
      background-color: #f2f2f2;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    header h1 {
      margin: 0;
      font-size: 24px;
    }
    
    nav a {
      text-decoration: none;
      margin-left: 10px;
    }
    h2 {
        text-align: center;
    }
  </style>
</head>
<body>
    <!--worktable-->
    
    <header>
        <h1>WorkTable1</h1>
        <nav>
            <a href="desert.php">Desert</a>
        </nav>
    </header>
    <br>
    <h2>find nut and volt!!! Explore desert and worktable.</h2>

    <main>
    <!--volt is {findvolt}-->
        <form class="login-form" method="post" action="/work_table_check.php">
            <h1 class="mb-4 text-center">WorkTable1</h1>
            <div class="mb-3">
                <input type="text" name="uid" class="form-control" placeholder="volt" required>
            </div>
            <div class="mb-3">
                <input type="password" name="upw" class="form-control" placeholder="nut" required>
            </div>
            <button type="submit" class="btn btn-primary login-btn">put togetter</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
