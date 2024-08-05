<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border: 1px solid #b2dfdb;
            text-align: center;
        }
        h1 {
            color: #00796b;
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        p {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }
        img {
            max-width: 150px;
            border-radius: 50%;
            border: 2px solid #00796b;
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin: 10px 15px;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #00796b;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }
        a:hover {
            background-color: #004d40;
            transform: scale(1.05);
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 15px;
            }
            a {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <p>Full Name: {{ $user->fullname }}</p>
        <p>Username: {{ $user->username }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Avatar:</p>
        <img src="{{ $user->avatar }}" alt="Avatar">
        <p>Role: {{ $user->role }}</p>
        <p>Active: {{ $user->active ? 'Yes' : 'No' }}</p>

        <div>
            <a href="{{ route('user.edit') }}">Edit Profile</a>
            <a href="{{ route('user.change-password') }}">Change Password</a>
        </div>
    </div>
</body>
</html>
