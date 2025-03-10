<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
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

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
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

        h1 {
            color: #d81b60;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e1bee7;
            color: #333;
        }

        .total {
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
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
        <div class="container">
            <h1>Transaction History</h1>
            <table>
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $item)
                        <tr>
                            <td>{{ $item['Transaction ID'] }}</td>
                            <td>{{ $item['Date'] }}</td>
                            <td>{{ $item['Product'] }}</td>
                            <td>{{ $item['Quantitiy'] }}</td>
                            <td>{{ $item['Total Price'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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