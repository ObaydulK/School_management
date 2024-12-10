<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
   <!-- Styles / Scripts -->
   @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
   @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif


<body>

    <div class="container mx-auto p4-10">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-xl">
            <div class="md:flex">
                <div class="w-full px-6 py-8 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-800">Checkout</h2>
                    <p class="mt-4 text-gray-600">Please fill out the form below to complete your purchase.</p>
                    <form class="mt-6" action="{{route('student.store')}}"  method="POST">
                        @csrf
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                id
                            </label>
                            <input name="id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
                        </div> 
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                Name
                            </label>
                            <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
                        </div> 
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                Roll
                            </label>
                            <input name="roll" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
                        </div> 
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                class
                            </label>
                            <input name="class" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
                        </div> 
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                section
                            </label>
                            <input name="section" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
                        </div> 
                        <div class="mb-6">
                            <label class="block text-gray-800 font-bold mb-2" for="name">
                                address
                            </label>
                            <input name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
                        </div> 

                        
                        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>