<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <div>
    <h1 class="block bg-gray-400 h-15 text-2xl font-bold mb-4">livres:</h1>
    <a href="{{route('create')}}" class="m-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">create livre</a>
    <a href="{{route('dashboard')}}" class="m-4 text-white bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Dashboard</a>

<div class="relative overflow-x-auto mt-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                titre
                </th>
                <th scope="col" class="px-6 py-3">
                auteur
                </th>
                <th scope="col" class="px-6 py-3">
                categorie
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($livres as $livre)
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$livre->id}}
                </th>
                <td class="px-6 py-4">
                {{$livre->titre}}
                </td>
                <td class="px-6 py-4">
                {{$livre->auteur}}
                </td>
                <td class="px-6 py-4">
                {{$livre->categorie}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$livres->links()}}
</div>

    </div>
</body>
</html>