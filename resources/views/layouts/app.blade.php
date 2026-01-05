<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oil Change Checker</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: 0 auto; }
        label { display:block; margin-top: 12px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 6px; }
        .btn { display:inline-block; margin-top: 16px; padding: 10px 14px; background:#222; color:#fff; text-decoration:none; border-radius:6px; }
        .btn-secondary { background:#666; }
        .error { background:#ffe6e6; padding: 10px; border: 1px solid #ffb3b3; margin-top: 12px; }
        .card { background:#f7f7f7; padding: 14px; border-radius: 8px; margin-top: 16px; }
        .success { background:#e9ffe9; border: 1px solid #b3ffb3; padding: 12px; border-radius: 8px; }
        .warning { background:#fff3cd; border: 1px solid #ffeeba; padding: 12px; border-radius: 8px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Oil Change Checker</h1>
        @yield('content')
    </div>
</body>
</html>
