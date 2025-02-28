<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <style>
        * {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <center style="margin-top: 100px;">
        <img src="{{ asset('/public/images/404.png') }}" alt="404">
        <p>
            Thật tiếc trang của bạn yêu cầu không tồn tại.<br>
            Vui lòng thử một trang khác hoặc liên hệ trực tiếp với <a href="https://fb.me/fattiesoftware">Fatties
                Software</a>
            nhé!
        </p>
        <a href="/">Trang chủ</a>
    </center>
    <script>
        console.log("Error from PHP: {{ $error }}");
    </script>
</body>

</html>
