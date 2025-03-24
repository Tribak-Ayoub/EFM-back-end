<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Widget</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; }
    </style>
</head>
<body>

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Test Widget Execution</h1>

    <!-- Form to select method -->
    <form method="POST" action="{{ route('execute') }}" class="mb-4">
        @csrf
        <label for="method_name" class="block font-medium">Select a method:</label>
        <select name="method_name" id="method_name" class="border p-2 rounded w-full mt-2">
            <option value="getNombreApprenant">Number of Learners</option>
            <option value="getApprenantsActifs">Active Learners</option>
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-3">Execute</button>
    </form>

    <!-- Display results -->
    @if(isset($result))
        <div class="mt-4 p-4 border rounded shadow-md">
            @if(isset($result['error']))
                <p class="text-red-500 font-bold">{{ $result['error'] }}</p>
            @else
                <h2 class="text-xl font-semibold">{{ $result['title'] }}</h2>

                @if(isset($result['value']))
                    <p class="text-green-600 text-lg font-bold">{{ $result['value'] }}</p>
                @elseif(isset($result['list']))
                    <ul class="list-disc ml-5 mt-2">
                        @foreach($result['list'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p class="text-gray-700 mt-2">Total: <strong>{{ $result['total'] }}</strong></p>
                @endif
            @endif
        </div>
    @endif
</div>

</body>
</html>
