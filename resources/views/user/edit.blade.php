<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border: 1px solid #ddd;
        }
        h1 {
            color: #00796b;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.2em;
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
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #b2dfdb;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #00796b;
            box-shadow: 0 0 8px rgba(0, 121, 107, 0.2);
            outline: none;
        }
        button {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            color: white;
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
                padding: 15px;
            }
            button {
                padding: 10px 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="{{ route('user.update') }}" method="POST">
            @csrf
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" value="{{ $user->fullname }}" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div>
                <label for="avatar">Avatar</label>
                <input type="text" id="avatar" name="avatar" value="{{ $user->avatar }}">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
