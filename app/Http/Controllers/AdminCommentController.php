<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class AdminCommentController extends Controller
{
    public function index()
    {
        // Buscar todos os comentários pendentes
        $comments = Comment::with('user')->where('status', 'pending')->get();

        return view('paineladmin', compact('comments'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        $comment->update(['status' => $request->status]);

        return redirect()->route('admin.comments.index')->with('success', 'Comentário atualizado com sucesso!');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:json',
        ]);

        $file = $request->file('file');
        $data = json_decode(file_get_contents($file), true);

        foreach ($data as $commentData) {
            Comment::create($commentData);
        }

        return redirect()->route('admin.comments.index')->with('success', 'Comentários importados com sucesso!');
    }

    public function export()
    {
        $comments = Comment::all();
        $json = $comments->toJson();

        $fileName = 'comments-' . now()->format('Y-m-d_H-i-s') . '.json';
        Storage::disk('local')->put($fileName, $json);

        return response()->download(storage_path("app/{$fileName}"));
    }
}
