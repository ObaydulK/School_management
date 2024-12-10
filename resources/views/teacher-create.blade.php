<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Teacher </title>

       <!-- Styles / Scripts -->
       @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
       @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif


</head>
<body>
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-10 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Create a new account
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-500 max-w">
                Or
                <a href="#"
                    class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    login to your account
                </a>
            </p>
        </div>
    
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{route('teacher.store')}}">
                    @csrf
                    <div class="mt-6">
                        <label for="username" class="block text-sm font-medium leading-5 text-gray-700">Id</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <span
                                class="inline-flex h-10 items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                Id
                            </span>
                            <input id="username" name="idname" placeholder="Enter your id number" type="text" required=""
                                class="flex-1  border border-gray-300 form-input pl-3 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>    
                    <div class="mt-6">
                        <label for="username" class="block text-sm font-medium leading-5 text-gray-700"> Name</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <span
                                class="inline-flex h-10 items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                Full Name
                            </span>
                            <input id="username" name="name" placeholder=Name" type="text" required=""
                                class="flex-1  border border-gray-300 form-input pl-3 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>    
                    <div class="mt-6">
                        <label for="username" class="block text-sm font-medium leading-5 text-gray-700">Username</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <span
                                class="inline-flex h-10 items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                Profation
                            </span>
                            <input id="username" name="profation" placeholder="Enter our Dagination" type="text" required=""
                                class="flex-1  border border-gray-300 form-input pl-3 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>
    

    
                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Create account
                            </button>
                        </span>
                    </div>
                </form>
    
            </div>
        </div>
    </div>
    
</body>
</html>