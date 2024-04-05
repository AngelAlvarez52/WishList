<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('id', 'asc')->paginate(10);
        return view('admin.comment.index', compact('comments'));
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comment.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $comment = Comment::findOrFail($id);
        $comment->update([
            'text' => $request->text
        ]);

        return redirect()->route('gift.index')->with('success', 'Comentario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return redirect()->route('comment.index')->with('error', 'El Comentario no existe.');
        }

        $comment->delete();

        return redirect()->route('comment.index')->with('success', 'Comentario eliminado correctamente!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255'
        ]);

        Comment::create($request->all());

        return redirect()->route('comment.index')->with('success', 'Comentario creado correctamente.');
    }
}
