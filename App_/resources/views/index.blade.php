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
    <h1>livres:</h1>
    <a href="{{route('create')}}">create livre</a>

<div class="relative overflow-x-auto">
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