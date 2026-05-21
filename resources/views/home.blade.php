<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h1 class="text-xl font-bold text-gray-700 mb-6">CRUD </h1>

        <div class="flex flex-col gap-3">
            <a href="{{ route('employer.index') }}"
               class="px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-md shadow-sm transition-colors text-center">
                Employers
            </a>

            <a href="{{ route('position.index') }}"
               class="px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-md shadow-sm transition-colors text-center">
                Positions
            </a>
        </div>
    </div>
</body>
</html>
