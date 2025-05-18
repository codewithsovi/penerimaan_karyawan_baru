<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManajemenAkunController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.manajemenUser.index', compact('users'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'role' => 'required|in:admin,HRD,karyawan',
            ]);

             User::create([
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'role' => $validated['role'],
            ]);

            return redirect()->back()->with('success', 'User berhasil dibuat.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Membuat Akun.');
        }
    }
}
