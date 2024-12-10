<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher</title>

       <!-- Styles / Scripts -->
       @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
       @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
</head>
<body>
    <div class=" bg-pink-500 px-2 py-2 rounded-xl">
        <div class="flex justify-between gap-5 text-3xl">
            <div class="btn bg-slate-200 rounded px-2">
                <a href="{{route('teacher.list')}}">HOme</a>
            </div>
            <div class="btn bg-slate-200 rounded px-2">
                <a href="{{route('newteacher.list')}}">New Teacher</a>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Id</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">profession</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach ($teachers as $teacher)
                <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"> {{$teacher->idname}}  </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$teacher->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"> {{ $teacher->profation}}  </td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <form action="{{route('teacher.delete', $teacher->id)}}" method="post">
                            @csrf
                            @method('DELETE');
                            <button type="submit" class ="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                        </form>
                    </td>
                  </tr> 
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>




</body>
</html>