<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard | Artisan Barber Academy</title>
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap"
    rel="stylesheet"
  />
  <style>
    :root {
      --background: #fffff8;
      --foreground: #111;
      --font-serif: "Newsreader", serif;
    }
    body {
      background: var(--background);
      color: var(--foreground);
      font-family: var(--font-serif);
    }
  </style>
</head>

<body class="antialiased">

@include('student.header')
<main>
 @yield('content')
 </main>
@include('layouts.footer')
</body> 
</html>