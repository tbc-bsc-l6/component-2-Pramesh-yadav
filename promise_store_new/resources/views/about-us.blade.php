
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/images/favicon.png" type="">
      <title>Promise Store</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css') }}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css') }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css') }}" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    @include('home.header')
    <style>
        body {
            background-color: #f8f9fa; 
            color: #343a40; 
            font-family: 'Arial', sans-serif;
            padding-top: 80px;
        }

        .container {
            background-color: #ffffff; 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff; 
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="{{url('about-us') }}">Promise Store</a>
    </nav>

    <div class="container mt-5">
        <h1>About Promise Store</h1>
        <p class="lead">Welcome to Promise Store, your trusted destination for a delightful online shopping experience. We are passionate about offering top-quality products and providing exceptional customer service. Our ecommerce store is designed to cater to your diverse needs, offering a wide array of products to enhance your lifestyle.</p>

        <div class="row">
            <div class="col-lg-6">
                <p>Why Choose Promise Store?</p>
                <ul>
                    <li><strong>Premium Quality Products:</strong> We believe in delivering the best, ensuring that our curated selection meets or exceeds your expectations.</li>
                    <li><strong>Variety and Trends:</strong> Explore the latest trends and a diverse range of products, including fashion, electronics, home essentials, and unique gifts.</li>
                    <li><strong>Hassle-Free Shopping:</strong> Enjoy a user-friendly and secure online shopping environment with a smooth checkout process.</li>
                    <li><strong>Local Choice:</strong> Proudly based in Sanepa, we understand the unique preferences and needs of our local community.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <p>Contact Information:</p>
                <ul>
                    <li><strong>Address:</strong> Sanepa</li>
                    <li><strong>Phone:</strong> 9801326496</li>
                </ul>
            </div>
        </div>

        <p class="lead">Promise Store is more than just an ecommerce platform; it's a promise of quality, reliability, and a delightful shopping experience. We are grateful for your trust and look forward to being your preferred online shopping destination.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
