// jaga 

//hi
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'My Page')</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Header -->
  <header class="bg-dark text-white text-center py-3">
    <h1>My First Webpage</h1>
    <p class="mb-0">Welcome, {{ session('username') }}</p>
  </header>

  <!-- Navbar -->
  <nav class="navbar navbar-white bg-blue">
    <div class="container">
      <a class="navbar-brand" href="#">MySite</a>
      <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/employee') }}">Employee</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/employee_profile') }}">Profile</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container my-4">
    @yield('content')
  </main>

  <!-- Footer -->
<footer class="bg-dark text-white text-center py-2 fixed-bottom">
  @my last webpage
</footer>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
