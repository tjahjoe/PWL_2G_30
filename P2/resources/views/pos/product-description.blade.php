<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
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

        .product-card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            display: flex; 
            width: 500px; 
            position: relative; 
        }

        .product-card img {
            max-width: 200px; 
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            margin-right: 20px; 
        }

        .product-details {
            text-align: left;
        }

        .product-card h2 {
            color: #d81b60;
            margin-bottom: 10px;
        }

        .product-card .stars {
            color: #ffc107;
            margin-bottom: 10px;
        }

        .product-card p {
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
            position: absolute; 
            top: 20px; 
            left: 20px; 
        }

        .back-button:hover {
            background-color: #c2185b;
        }
    </style>
</head>

<body>
    <a href="{{ route('home') }}" class="back-button">Back</a> 
    <div class="product-card">
        <img src="{{ $imgUrl }}" alt="{{ $name }}">
        <div class="product-details">
            <h2>{{ $name }}</h2>
            <div class="stars">
                @for ($i = 0; $i < $maxStars; $i++)
                    @if ($i < $stars)
                        &#9733;
                    @else
                        &#9734;
                    @endif
                @endfor
            </div>
            <p>{{ $description }}</p>
        </div>
    </div>
</body>

</html>