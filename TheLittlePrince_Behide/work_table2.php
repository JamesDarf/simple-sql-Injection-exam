<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WorkTable2</title>
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
  </style>
</head>
<body>
  <header>
    <h1>WorkTable2</h1>
    <nav>
      <a href="desert.php">Desert</a>
    </nav>
  </header>
<!--plastic1 is {plastic}-->
<main>
        <form class="login-form" method="post" action="/work_table2_check.php">
            <h1 class="mb-4 text-center">WorkTable2</h1>
            <div class="mb-3">
                <input type="text" name="uid" class="form-control" placeholder="plastic1" required>
            </div>
            <div class="mb-3">
                <input type="password" name="upw" class="form-control" placeholder="plastic2" required>
            </div>
            <button type="submit" class="btn btn-primary login-btn">put togetter</button>
        </form>
    </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
