<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="">
    {{-- @include('layouts.loginnavbar') --}}
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="w-[50%] mx-auto max-w-2xl bg-white shadow-lg rounded-lg p-6 ">



        <form method="POST" action="/input" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 font-semibold">Project Name</label>
                <input
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="project_name" type="text" name="project_name" placeholder="Enter project name" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Select SDG</label>
                <select
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="sdg" name="sdg" required>
                    <option value="" disabled selected>Select an SDG</option>
                    <option value="1">No Poverty</option>
                    <option value="2">Zero Hunger</option>
                    <option value="3">Good Health and Well-being</option>
                    <option value="4">Quality Education</option>
                    <option value="5">Gender Equality</option>
                    <option value="6">Clean Water and Sanitation</option>
                    <option value="7">Affordable and Clean Energy</option>
                    <option value="8">Decent Work and Economic Growth</option>
                    <option value="9">Industry, Innovation, and Infrastructure</option>
                    <option value="10">Reduced Inequality</option>
                    <option value="11">Sustainable Cities and Communities</option>
                    <option value="12">Responsible Consumption and Production</option>
                    <option value="13">Climate Action</option>
                    <option value="14">Life Below Water</option>
                    <option value="15">Life on Land</option>
                    <option value="16">Peace, Justice, and Strong Institutions</option>
                    <option value="17">Partnerships for the Goals</option>

                </select>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="upcoming_project" value="1" class="rounded border-gray-300">
                <label class="text-gray-700 font-semibold">Upcoming Project?</label>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Start Date</label>
                <input
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="start_date" type="date" name="start_date">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Description</label>
                <div id="editorjs" class="w-full border border-gray-300 rounded px-3 py-2 min-h-[200px] bg-white"></div>
                <input type="hidden" name="description" id="description">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Upload Project Photo</label>
                <input type="file" name="photo" accept="image/*" required
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Addressed SDGs</label>
                <div class="grid grid-cols-2 gap-2">
                    @foreach([1 => 'No Poverty', 2 => 'Zero Hunger', 3 => 'Good Health and Well-being', 4 => 'Quality Education', 5 => 'Gender Equality', 6 => 'Clean Water and Sanitation', 7 => 'Affordable and Clean Energy', 8 => 'Decent Work and Economic Growth', 9 => 'Industry, Innovation, and Infrastructure', 10 => 'Reduced Inequality', 11 => 'Sustainable Cities and Communities', 12 => 'Responsible Consumption and Production', 13 => 'Climate Action', 14 => 'Life Below Water', 15 => 'Life on Land', 16 => 'Peace, Justice, and Strong Institutions', 17 => 'Partnerships for the Goals'] as $key => $value)
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="addressed_sdg[]" value="{{ $key }}"
                                class="rounded border-gray-300">
                            <span>{{ $value }}</span>
                        </label>
                    @endforeach
                </div>
            </div>


            <div class="flex justify-center">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="submit" id="submit-btn">
                    Submit
                </button>
            </div>
        </form>
    </div>
    <script>
        const editor = new EditorJS({
            holder: 'editorjs',
            tools: {
                header: {
                    class: Header,
                    inlineToolbar: true,
                    config: { levels: [2, 3, 4], defaultLevel: 2 }
                },
                paragraph: {
                    class: Paragraph,
                    inlineToolbar: true,
                    config: { preserveBlank: true }
                }
            }
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