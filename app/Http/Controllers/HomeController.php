<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class HomeController extends Controller
{
    public function index()
    {
        // Buscar todos os comentários aprovados para exibir na página inicial, se necessário
        $comments = Comment::with('user')->where('status', 'approved')->get();

        return view('index', compact('comments'));
    }

    public function showApprovedComments()
    {
        // Buscar todos os comentários aprovados
        $comments = Comment::with('user')->where('status', 'approved')->get();

        return view('comments', compact('comments'));
    }
}