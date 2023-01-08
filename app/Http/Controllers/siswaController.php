<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index()
    {
        $siswas = siswa::latest()->paginate(5);
        return view('siswas.index', compact('siswas'))->with('1', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        siswa::create($request->all());

        return redirect()->route('siswas.index')->with('successfully');
    }


    public function edit(Siswa $siswa)
    {
        return view('siswas.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([]);
        $siswa->update($request->all());
        return redirect()->route('siswas.index')->with('successfully');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswas.index')->with('successfully');
    }
}
