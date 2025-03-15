<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request) // ✅ Inject Request Properly
    {
        if ($request->hasFile('image')) {
            // ✅ Validate file
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // ✅ Store in storage/app/public/uploads
            $path = $request->file('image')->store('uploads', 'public');

            return response()->json([
                'success' => 1,
                'file' => ['url' => asset('storage/' . $path)]
            ]);
        }

        return response()->json(['success' => 0, 'error' => ['message' => 'File upload failed.']], 400);
    }
}
