<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $siswas = Siswa::query()
                ->where('name', 'like', "%$request->search%")
                ->latest()
                ->paginate(6);
        } else {
            $siswas = Siswa::query()
                ->latest()
                ->paginate(6);
        }
        return view('siswa.index', [
            'siswas' => $siswas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.form', [
            'siswa' => new Siswa(),
            'page_meta' => [
                'button_text' => 'Create',
                'url' => route('siswas.store'),
                'method' => 'POST',
                'heading' => 'Create Siswa'
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiswaRequest $request)
    {
        Siswa::create($request->validated());
        return to_route('siswas.index')->with('sucess', 'Article Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.show', [
            'siswa' => $siswa,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.form', [
            'siswa' => $siswa,
            'page_meta' => [
                'button_text' => 'Update',
                'url' => route('siswas.update', $siswa),
                'method' => 'PUT',
                'heading' => 'Edit Siswa',
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SiswaRequest $request, Siswa $siswa)
    {
        $siswa->update($request->validated());
        return to_route('siswas.index')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return to_route('siswas.index')->with('success', 'Deleted');
    }
}
