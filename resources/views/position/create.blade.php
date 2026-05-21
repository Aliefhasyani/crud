<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Position</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <form method="POST" action="{{ route('position.store') }}" class="space-y-5">
            @csrf
            
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-semibold text-gray-600">Position Name</label>
                <input 
                    type="text"
                    name="position_name" 
                    placeholder="Please put the Position name here"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm placeholder-gray-400"
                >
            </div>
            
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-semibold text-gray-600">Employer</label>
                <select 
                    name="employer_id"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700"
                >
                    <option value="" disabled selected>Select an Employer</option>
                    @foreach ($employers as $employer)
                        <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="pt-2">
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-md shadow-sm transition-colors cursor-pointer"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
