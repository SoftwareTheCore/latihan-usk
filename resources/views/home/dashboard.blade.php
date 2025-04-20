<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Bank Digital</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome to Dashboard</h1>
        <p>You are logged in!</p>
        <a href="{{ url('/logout') }}" class="logout-button">Logout</a>
    </div>
</body>
</html>