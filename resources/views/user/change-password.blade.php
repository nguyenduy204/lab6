<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            max-width: 500px;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border: 1px solid #b2dfdb;
        }
        h1 {
            color: #00796b;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        div {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #00796b;
        }
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #80cbc4;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="password"]:focus {
            border-color: #00796b;
            box-shadow: 0 0 8px rgba(0, 121, 107, 0.2);
            outline: none;
        }
        button {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            color: #ffffff;
            background-color: #00796b;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
        }
        button:hover {
            background-color: #004d40;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            button {
                padding: 10px 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Change Password</h1>
        <form action="{{ route('user.change-password.post') }}" method="POST">
            @csrf
            <div>
                <label for="current_password">Current Password</label>
                <input type="password" id="current_password" name="current_password" required>
            </div>
            <div>
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div>
                <label for="new_password_confirmation">Confirm New Password</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
            </div>
            <button type="submit">Change Password</button>
        </form>
    </div>
</body>
</html>
