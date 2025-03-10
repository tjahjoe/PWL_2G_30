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

        a {
            text-decoration: none;
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

        .product-categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .product-category {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
            transition: transform 0.2s ease;
        }

        .product-category:hover {
            transform: translateY(-5px);
        }

        .product-category h2 {
            color: #d81b60;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .product-category img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .product-category p {
            color: #555;
            font-size: 0.9em;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: static;
                transform: translateX(0);
                height: auto;
            }

            .sidebar.hidden {
                display: none;
            }

            .main-content {
                margin-left: 0;
            }

            #toggle-sidebar {
                display: block;
                margin-bottom: 10px;
            }

            .product-category {
                width: 90%;
                max-width: none;
            }
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
        <div class="product-categories">
            <a href="{{ route('babyKid') }}">
                <div class="product-category">
                    <img src="https://cdn-icons-png.flaticon.com/512/4836/4836691.png" alt="Baby & Kid">
                    <h2>Baby & Kid</h2>
                    <p>Products for babies and children.</p>
                </div>
            </a>
            <a href="{{ route('beautyHealth') }}">
                <div class="product-category">
                    <img src="https://cdn-icons-png.flaticon.com/512/2637/2637957.png" alt="Beauty & Health">
                    <h2>Beauty & Health</h2>
                    <p>Beauty and health products.</p>
                </div>
            </a>
            <a href="{{ route('foodBeverage') }}">
                <div class="product-category">
                    <img src="https://cdn-icons-png.flaticon.com/512/1047/1047244.png" alt="Food & Beverage">
                    <h2>Food & Beverage</h2>
                    <p>Food and beverage items.</p>
                </div>
            </a>
            <a href="{{ route('homeCare') }}">
                <div class="product-category">
                    <img src="https://cdn-icons-png.flaticon.com/512/3081/3081829.png" alt="Home Care">
                    <h2>Home Care</h2>
                    <p>Products for home care.</p>
                </div>
            </a>
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