@extends('layout')
@section('content')
<div>

    <section class="relative">

        <img alt="A beautifully set dining table with gourmet dishes and elegant tableware"
            class="w-full h-96 object-cover" src="{{ asset('images/chef.png') }}" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold">
                    Welcome to Our Restaurant
                </h1>
                <p class="mt-4 text-lg md:text-2xl">
                    Experience the best dining experience
                </p>
                <a class="mt-6 inline-block bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600"
                    href="{{ url('menu') }}">
                    Explore Menu
                </a>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="py-12 bg-gray-100" style="color:black">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold">
                    New offers
                </h2>
                <p class="mt-4 text-gray-600">
                    Discover our story and the passion behind our food
                </p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('images/corousel1.png') }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Himalayan Biryani</h2>
                            <p>A brief description of the dish and its ingredients.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/corousel4.png') }}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Chhole Bhature</h2>
                            <p>A brief description of the dish and its ingredients.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/corousel3.png') }}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Aglio Oglio Pasta</h2>
                            <p>A brief description of the dish and its ingredients.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Menu Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold">
                    Our Menu
                </h2>
                <p class="mt-4 text-gray-600">
                    Explore our diverse and delicious menu
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/food3.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Donute
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A sweet snack.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $10.00
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/food1.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Sushi
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A japanese food item.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $12.00
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="A gourmet dish with a beautifully arranged presentation" class="w-full h-48 object-cover"
                        src="{{ asset('images/food2.png') }}" />
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            Lobster
                        </h3>
                        <p class="mt-2 text-gray-600">
                            A seafood dish.
                        </p>
                        <p class="mt-4 text-red-500 font-bold">
                            $18.00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection