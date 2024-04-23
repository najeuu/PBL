

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.tailwindcss.com/3.4.1" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/public/styles/flowbite.min.css/flowbite.min.css">

    <link rel="stylesheet" href="/public/styles/tailwind 3.4.1.js/tailwind 3.4.1.js">
    <link rel="stylesheet" href="/public/styles/my_style.css">
  </head>
<body>
    <header> 
        @include('components.header')
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--h1>Dashboard</h1>
                <p>Welcome to the furniture web dashboard!</p>
                Tambahkan konten lainnya di sini sesuai kebutuhan-->
            </div>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
    <<Tambahkan script JavaScript atau CDN lainnya di sini-->
</body>
    <footer>
        @include('components.footer')
    </footer>
</html>
    

<!--<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Furniture</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
</head>
<body>

<header class="bg-white shadow">
  <div class="container mx-auto px-4 py-4">
    <div class="flex justify-between items-center">
      <a href="/" class="text-3xl font-bold text-gray-800">Web Furniture</a>
      <nav class="hidden md:flex space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-700">Home</a>
        <a href="#" class="text-gray-600 hover:text-gray-700">About</a>
        <a href="#" class="text-gray-600 hover:text-gray-700 active">Product</a>
        <a href="#" class="text-gray-600 hover:text-gray-700">Contact</a>
      </nav>
      <button type="button" class="md:hidden text-gray-600 focus:outline-none" id="dropdownMenuButton" aria-expanded="false">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16v12H4zM4 12c0 2.21 1.79 4 4 4s4-1.79 4-4-1.79-4-4-4z"></path></svg>
      </button>
      <div class="hidden md:block" id="dropdownMenu" aria-labelledby="dropdownMenuButton">
        <ul class="absolute bg-white z-50 shadow rounded-md py-2 text-base font-medium text-gray-700" aria-labelledby="dropdownMenuButton">
          <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Home</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">About</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Product</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

<main class="container mx-auto px-4 py-4">

  <section class="hero mb-4">
    <div class="container mx-auto px-4 flex items-center h-screen">
      <div class="w-full md:w-1/2 text-white">
        <h1 class="text-4xl font-bold mb-4">Discover Your Perfect Furniture</h1>
        <p class="text-lg mb-8">Furnish your home with our wide selection of stylish and affordable furniture.</p>
        <a href="#" class="btn btn-primary">Shop Now</a>
      </div>
      <div class="w-full md:w-1/2 hidden md:block">
        <img src="images/hero-banner.jpg" alt="Hero Banner" class="h-full object-cover rounded-lg">
      </div>
    </div>
  </section>

  <section class="mb-4">
    <h2 class="text-2xl font-bold text-gray-800">Product Furniture -->

