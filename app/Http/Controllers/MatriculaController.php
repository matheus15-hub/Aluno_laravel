<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatriculaController extends Controller
{
    public function update(Request $request, $id)
    {
        $matricula = Matricula::with('turma')->findOrFail($id);

        if ($matricula->turma->user_id !== Auth::id()) {
            abort(403);
        }

        $matricula->update([
            'nota' => $request->nota,
        ]);

        return redirect()->back();
    }
}