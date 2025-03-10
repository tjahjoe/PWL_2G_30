<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif; 
            display: flex;
            height: 100vh;
            margin: 0;
            background-color: #fce4ec; 
        }

        .sidebar {
            width: 200px;
            background-color: #e1bee7;
            color: #333;
            padding: 10px;
            position: fixed;
            height: 100%;
            top: 0;
            left: 0;
            transition: transform 0.3s ease;
        }

        .sidebar.hidden {
            transform: translateX(-200px);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            margin: 8px 0;
        }

        .sidebar a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 8px;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background-color: #ba68c8; 
            color: white;
        }

        .main-content {
            flex: 1;
            margin-left: 200px;
            padding: 20px;
            transition: margin-left 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .user-profile {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #d81b60;
        }

        .user-profile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #toggle-sidebar {
            background-color: #d81b60;
            color: white;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .main-content h1 {
            text-align: center;
            margin-top: 20px;
            color: #d81b60;
        }
    </style>
</head>

<body>
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('category') }}">Category</a></li>
            <li><a href="{{ route('transaction') }}">Transaction</a></li>
        </ul>
    </div>
    <div class="main-content" id="main-content">
        <header>
            <button id="toggle-sidebar">☰</button>
            <a href="{{ url('/user/'.$id.'/name/'.$name) }}" class="user-profile">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="User">
            </a>
        </header>
        <h1>Welcome {{ $name }}</h1>
    </div>
    <script>
        const toggleBtn = document.getElementById('toggle-sidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            mainContent.style.marginLeft = sidebar.classList.contains('hidden') ? '0' : '200px';
        });
    </script>
</body>

</html>