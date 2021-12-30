<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <header>
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                </svg>
                <span class="font-semibold text-xl tracking-tight">Tailwind</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                        Docs
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                        Examples
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                        Blog
                    </a>
                </div>
                <div>
                    @auth
                    <a href="{{ url('dashboard') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Dashboard</a>
                    @else
                    <a href="{{ url('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Iniciar sesión</a>
    
                    <a href="{{ url('register') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Registro</a>
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">

            <h1 class="pt-4 pb-4 text-gray-700 text-center text-xl">Encuentra los eventos de tu interes</h1>
            <p class="text-center text-gray-600">Tenemos eventos para todo tipo de personas</p>    
            <!-- lisa de citas -->        
            <!-- Fin de listas de citas -->

            @yield('content')

            <!-- Contenido de 3 columnas -->
            <div class="columns-3">
                <img class="aspect-square" src="https://www.solucionesrp.com.mx/assets/img/logo.png" alt="">                    
                <img class="aspect-square" src="https://www.solucionesrp.com.mx/assets/img/logo.png" alt="">                    
                <img class="aspect-square" src="https://www.solucionesrp.com.mx/assets/img/logo.png" alt="">                    
            </div>
        </div>
    </main>

    <footer class="bg-teal-500 border-t border-gray-200 pt-4">
        <div
          class="
            container
            flex flex-col flex-wrap
            px-4
            py-16
            mx-auto
            md:items-center
            lg:items-start
            md:flex-row md:flex-nowrap
          "
        >
          <div
            class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left"
          >
            <a
              class="
                flex
                items-center
                justify-center
                text-4xl
                font-bold
                text-blue-700
                md:justify-start
              "
            >
              Logo
            </a>
            <p class="mt-2 text-sm text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
              at sequi cum, impedit fuga in placeat illo eum minima possimus est
              perferendis distinctio explicabo eos natus consequuntur blanditiis
              odio optio?
            </p>
          </div>
          <div class="justify-between w-full mt-4 text-center lg:flex">
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
              <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                Useful Links
              </h2>
              <ul class="mb-8 space-y-2 text-sm list-none">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Home</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">About Us</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Blogs</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
              <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                Useful Links
              </h2>
              <ul class="mb-8 space-y-2 text-sm list-none">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Home</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">About Us</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Blogs</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="w-full px-4 lg:w-1/3 md:w-1/2">
              <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                Useful Links
              </h2>
              <ul class="mb-8 space-y-2 text-sm list-none">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Home</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">About Us</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Blogs</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <p class="text-base text-gray-400">
            All rights reserved by @ company 2021
          </p>
        </div>
      </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>