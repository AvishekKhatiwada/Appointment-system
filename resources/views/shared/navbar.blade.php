<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appointment System</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-3 dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="#" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">AMS</span>
            </a>
            <div class=" justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-lg md:font-medium">
                    <li>
                        <a href="{{ route ('index-officer') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 
                            hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 
                            md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 
                            dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Officer</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 
                            hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 
                            md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 
                            dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Activity</a>
                    </li>
                    <li>
                        <a href="{{ route ('index-visitor') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50
                             md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 
                             dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 
                             dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Visitor</a>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>
    <div class="justify-center">
          @yield('content')
      </div>
      <script src="{{ mix('js/app.js') }}"></script>
      <script src="{{ asset('js/flowbite.js') }}"></script>
      <script src="{{ asset('js/jquery.js') }}"></script>
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</body>
</html>
