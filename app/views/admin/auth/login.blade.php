<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Quản trị Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mb-3">Đăng nhập</h2>
        @if (isset($error))
            <div class="alert alert-danger">{{ $error }}</div>
        @endif
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Nhập tên đăng nhập" class="form-control"
                value="{{ $_POST['username'] }}" required>
            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu"
                value="{{ $_POST['password'] }}" required>
            <button class="btn btn-primary" type="submit">Đăng nhập</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
