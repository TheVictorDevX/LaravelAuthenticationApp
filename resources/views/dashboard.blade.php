<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f0f0f0; flex-direction: column; }
        .dashboard-container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); text-align: center; }
        .logout-form { margin-top: 20px; }
        button { background-color: #dc3545; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #c82333; }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome to the Dashboard!</h2>

        {{-- Display the logged-in user's name --}}
        @auth
            <p>Hello, {{ Auth::user()->name }}!</p>
        @endauth

        <form class="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf {{-- Cross-Site Request Forgery protection --}}
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
