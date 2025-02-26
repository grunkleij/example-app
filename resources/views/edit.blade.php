<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Project</title>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-6">
        <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 font-semibold">Project Name</label>
                <input class="w-full border border-gray-300 rounded px-3 py-2" type="text" name="project_name" value="{{ $project->project_name }}" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Select SDG</label>
                <select class="w-full border border-gray-300 rounded px-3 py-2" name="sdg" required>
                    <option value="" disabled>Select an SDG</option>
                    @foreach(range(1, 17) as $sdg)
                        <option value="{{ $sdg }}" {{ $project->sdg == $sdg ? 'selected' : '' }}>SDG {{ $sdg }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="upcoming_project" value="1" class="rounded border-gray-300" {{ $project->upcoming_project ? 'checked' : '' }}>
                <label class="text-gray-700 font-semibold">Upcoming Project?</label>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Start Date</label>
                <input class="w-full border border-gray-300 rounded px-3 py-2" type="date" name="start_date" value="{{ $project->start_date }}">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Description</label>
                <div id="editorjs" class="w-full border border-gray-300 rounded px-3 py-2 min-h-[200px] bg-white"></div>
                <input type="hidden" name="description" id="description">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Upload New Photo</label>
                <input type="file" name="photo" accept="image/*" class="w-full border border-gray-300 rounded px-3 py-2">
                @if($project->photo)
                    <img src="{{ asset('storage/' . $project->photo) }}" class="mt-2 h-20 w-auto rounded-lg">
                @endif
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded" type="submit">
                    Update Project
                </button>
            </div>
        </form>
    </div>
    <script>
        const editor = new EditorJS({
            holder: 'editorjs',
            tools: {
                header: { class: Header, inlineToolbar: true, config: { levels: [2, 3, 4], defaultLevel: 2 } },
                paragraph: { class: Paragraph, inlineToolbar: true, config: { preserveBlank: true } }
            },
            data: {!! json_encode($project->description) !!}
        });

        document.querySelector('form').addEventListener('submit', async function (event) {
            event.preventDefault();
            editor.save().then((outputData) => {
                document.getElementById('description').value = JSON.stringify(outputData);
                event.target.submit();
            }).catch((error) => {
                console.log('Saving failed: ', error);
            });
        });
    </script>
</body>

</html>
