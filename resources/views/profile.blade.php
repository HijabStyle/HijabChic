<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

@include('components.navbar')

<section class="w-full min-h-[90vh] py-20 flex items-center justify-center bg-gradient-to-b from-purple-700 to-white">
    
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <a href="#">
        <img class="rounded-t-lg" src="{{ $profile->photo }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $profile->name }}</h5>
        </a>
        <p class="font-normal text-gray-700">{{ $profile->nim }}</p>
        <p class="font-normal text-gray-700">{{ $profile->class }}</p>
        <p class="mb-3 font-normal text-gray-700">{{ $profile->univ }}</p>
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $profile->email }}</h5>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

</section>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>