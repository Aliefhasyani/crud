<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Positions List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b-2 border-gray-200 bg-gray-50">
                    <th class="py-3 px-4 font-semibold text-sm text-gray-600">Position Name</th>
                    <th class="py-3 px-4 font-semibold text-sm text-gray-600">Employer</th>
                    <th class="py-3 px-4 font-semibold text-sm text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $position)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                        <td class="py-3 px-4 text-sm">{{ $position->position_name }}</td>
                        <td class="py-3 px-4 text-sm text-gray-600">{{ $position->employer->name }}</td>
                        <td class="py-3 px-4 text-sm">
                            <div class="flex items-center gap-2">
                                
                                <a href="{{ route('position.edit', $position->id) }}" 
                                   class="bg-yellow-600 hover:bg-yellow-700 text-white font-medium text-xs py-1.5 px-3 rounded shadow-sm transition-colors cursor-pointer">
                                    Edit
                                </a>

                                <form method="POST" action="{{ route('position.delete', $position->id) }}" class="inline m-0">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" 
                                            class="bg-red-600 hover:bg-red-700 text-white font-medium text-xs py-1.5 px-3 rounded shadow-sm transition-colors cursor-pointer">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
</body>
</html>
