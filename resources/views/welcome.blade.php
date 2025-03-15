<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="">
    {{-- @include('layouts.loginnavbar') --}}

    <nav class="bg-gray-800 text-white py-3 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/" class="text-xl font-bold">Rajagiri SDG </a>

            <div class="flex items-center space-x-4">
                <a href="{{ url('/allproj') }}" class="hover:underline">All Projects</a>
                <a href="{{ url('/in/publication') }}" class="hover:underline">Add Publication</a>

                @auth
                    <span class="text-gray-300">Hello, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700 px-3 py-1 rounded text-white">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </nav>


    <div class="w-[50%] mx-auto max-w-2xl bg-white shadow-lg rounded-lg p-6 ">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



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
        document.addEventListener('DOMContentLoaded', function () {
            if (!document.getElementById('editorjs')) {
                console.error("Editor.js container not found!");
                return;
            }

            let editor = new EditorJS({
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
                    },
                    image: {
                        class: ImageTool,
                        config: {
                            endpoints: {
                                byFile: '/upload-image', // Laravel route for file uploads
                            },
                            additionalRequestHeaders: {
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            uploader: {
                                async uploadByFile(file) {
                                    let formData = new FormData();
                                    formData.append('image', file);

                                    return fetch('/upload-image', {
                                        method: 'POST',
                                        body: formData,
                                        headers: {
                                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                        }
                                    })
                                        .then(response => response.json())
                                        .then(result => {
                                            if (result.success) {
                                                return { success: 1, file: { url: result.file.url } };
                                            } else {
                                                return { success: 0, error: { message: result.error.message } };
                                            }
                                        })
                                        .catch(error => {
                                            console.error("Upload failed", error);
                                            return { success: 0, error: { message: "Upload failed" } };
                                        });
                                },
                                async uploadByUrl(url) {
                                    try {
                                        let response = await fetch(url);
                                        let blob = await response.blob();
                                        let file = new File([blob], "pasted_image.jpg", { type: blob.type });

                                        return this.uploadByFile(file);
                                    } catch (error) {
                                        console.error("Error processing pasted image:", error);
                                        return { success: 0, error: { message: "Failed to upload pasted image" } };
                                    }
                                }
                            }
                        }
                    }
                },
                onReady: () => {
                    console.log("Editor.js is ready!");
                },
                onChange: () => {
                    editor.save().then((outputData) => {
                        document.getElementById('description').value = JSON.stringify(outputData);
                    }).catch((error) => {
                        console.error('Saving failed: ', error);
                    });
                }
            });

            // Ensure form submission waits for editor data
            document.querySelector('form').addEventListener('submit', async function (event) {
                event.preventDefault();

                editor.save().then((outputData) => {
                    document.getElementById('description').value = JSON.stringify(outputData);

                    if (document.getElementById('description').value.trim() === "") {
                        alert("Please add some content before submitting!");
                        return;
                    }

                    this.submit();
                }).catch((error) => {
                    console.error('Saving failed: ', error);
                });
            });
        });
    </script>

</body>

</html>