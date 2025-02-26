<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center mb-4">Project List</h2>
        
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Project Name</th>
                    <th class="border p-2">SDG</th>
                    <th class="border p-2">Start Date</th>
                    <th class="border p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="border">
                        <td class="border p-2">{{ $project->project_name }}</td>
                        <td class="border p-2">{{ $project->sdg }}</td>
                        <td class="border p-2">{{ $project->start_date }}</td>
                        <td class="border p-2">
                            <a href="{{ route('projects.edit', $project->id) }}" 
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                Edit
                            </a>
                            <a href="{{ route('projects.delete', $project->id) }}" 
                               class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 text-center">
            <a href="/in" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Add New Project
            </a>
        </div>
    </div>
</body>
</html>
