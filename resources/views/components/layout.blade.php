<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-gray-200">
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/jobs" :active="request()->is('job')">Jobs</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>



<div class="py-24 sm:py-4">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $heading ?? '' }}</h2>
    <div class="mx-auto max-w-2xl lg:mx-0">
      <p class="mt-2 text-lg/8 text-gray-600">{{ $slot ?? '' }}</p>
        <p class="mt-2 text-lg/8 text-gray-600">{{ $jobs ?? '' }}</p>
    </div>
  </div>
</div>

</body>
</html>