<?php

namespace App\Http\Controllers\HRD;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPelamarController extends Controller
{
    public function index(){
        $pelamars = User::where('role', 'pelamar')->get();
        return view('HRD.datapelamar.index', compact('pelamars'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'role' => 'required|in:pelamar',
            ]);

            User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'role' => $validated['role'],
            ]);

            return redirect()->back()->with('success', 'User berhasil dibuat.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Membuat Akun.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $id,
                'role' => 'required|in:karyawan',
                'password' => 'nullable|min:6', 
            ]);

            $user = User::findOrFail($id);
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->role = $validated['role'];
            if (!empty($validated['password'])) {
                $user->password = bcrypt($validated['password']);
            }
            $user->save();

            return redirect()->back()->with('success', 'User berhasil diupdate.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Mengupdate Akun.');
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->back()->with('success', 'User berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Menghapus Akun.');
        }
    }
}
