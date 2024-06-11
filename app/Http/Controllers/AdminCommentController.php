<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class AdminCommentController extends Controller
{
    public function index()
    {
        // Buscar todos os comentários pendentes
        $comments = Comment::with('user')->where('status', 'pending')->get();

        // Passar os comentários para a view 'paineladmin'
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
}
