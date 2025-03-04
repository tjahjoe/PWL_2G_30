<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #fce4ec;
        }

        .user-card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .user-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #d81b60;
        }

        .user-card h2 {
            color: #d81b60;
            margin-bottom: 10px;
        }

        .user-card p {
            color: #333;
            margin-bottom: 20px;
        }

        .back-button {
            background-color: #d81b60;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: #c2185b;
        }
    </style>
</head>

<body>
    <div class="user-card">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="User Profile">
        <h2>User Profile</h2>
        <p><strong>User ID:</strong> {{ $id }}</p>
        <p><strong>Username:</strong> {{ $name }}</p>
        <a href="{{ route('home') }}" class="back-button">Back to Home</a>
    </div>
</body>

</html>