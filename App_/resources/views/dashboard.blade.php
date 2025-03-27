<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>
    <h1 class="block bg-gray-400 h-15 text-2xl font-bold mb-4">Dashboard</h1>

    <a href="{{route('create')}}" class="m-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">create livre</a>
    <a href="{{route('index')}}" class="m-4 text-white bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Livrs list</a>

    <div class="flex mt-5">
        @if($count)
        <div class="me-4">
            <div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">le nombre total de livres</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{$count}}</p>
            </div>
        </div>
        @else
        <div class="me-4">
            <div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">le nombre total de livres</h5>
                <p class="font-normal text-red-700 dark:text-red-400">pas de livres</p>
            </div>
        </div>
        @endif

        <div class="">
            <div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">les 5 derniers livres ajoutés </h5>
                @if($lastsBooks)
                @foreach($lastsBooks as $lastsBook)
                <div class="border-b mb-3 pb-2">
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{$lastsBook->titre}} - <span>{{$lastsBook->auteur}}</span></p>
                    <p href="#" class="inline-flex items-center px-2 py-1 text-sm font-small text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{$lastsBook->categorie}}
                    </p>
                </div>
                @endforeach
                @else
                <div class="me-4">
                    <div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">les 5 derniers livres ajoutés</h5>
                        <p class="font-normal text-red-700 dark:text-red-400">pas de livres</p>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>

</body>

</html>