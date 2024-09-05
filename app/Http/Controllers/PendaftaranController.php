<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class PendaftaranController extends Controller
{

    public function index(Request $request)
    {
        $title['title'] = 'Data Pendaftar';

        if ($request->ajax()) {
            $data = Pendaftaran::select('id', 'name', 'status');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="actionDropdown' . $data->id . '" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pilih Aksi
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionDropdown' . $data->id . '">
                                        <li><a class="dropdown-item" href="' . route('pendaftaran.edit', $data->id) . '"><i class="ki-duotone ki-pencil fs-5">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i> Edit</a></li>
                                        <li><button type="button" class="delete-btn dropdown-item" data-id="' . $data->id . '"><i class="ki-duotone ki-tag-cross fs-5">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i> Delete</button></li>
                                    </ul>
                                </div>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pendaftaran.index', $title);
    }

    public function create()
    {
        $title['title'] = 'Form Pendaftaran Sample';
        return view('pendaftaran.create', $title);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $pendaftaran = new Pendaftaran([
            'users_id' => Auth::id(),
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamatir,
            'status' => 'menunggu',
        ]);
        $pendaftaran->save();

        return redirect()->route('pendaftaran.index');
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        $title['title'] = 'Form Edit User';
        return view('pendaftaran.edit', compact('pendaftaran'), $title);
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validate = $request->validate([
            'name' => 'required',
            'tempat_lahir' => 'required' . $pendaftaran->id,
            'alamat' => 'required',
        ]);

        $pendaftaran->name = $request->name;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
}
