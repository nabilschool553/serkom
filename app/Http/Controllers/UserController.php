<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // READ (Tampil Data)
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    // CREATE (Form Tambah)
    public function create()
    {
        return view('admin.user.create');
    }

    // STORE (Simpan Data Baru)
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
            'role'     => 'required|in:admin,operator',
        ]);

        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'role'     => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil ditambahkan!');
    }

    // EDIT (Form Edit)
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    // UPDATE (Simpan Perubahan)
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'username' => [
                'required',
                'string',
                'max:255',
                // Baris ini memberitahu Laravel untuk mengabaikan user ini berdasarkan kolom 'id_user'
                Rule::unique('users', 'username')->ignore($user->id_user, 'id_user'),
            ],
            'password' => 'nullable|string|min:6|confirmed',
            'role'     => 'required|in:admin,operator',
        ]);

        $data = [
            'name'     => $request->name,
            'username' => $request->username,
            'role'     => $request->role,
        ];

        // Mengubah password hanya jika input password diisi
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.user.index')->with('success', 'Data user berhasil diperbarui!');
    }

    // DELETE (Hapus Data)
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'User berhasil dihapus!');
    }
}