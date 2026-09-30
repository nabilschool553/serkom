<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
            'password' => 'required|string|min:6',
            'role'     => 'required|in:admin,operator',
        ]);

        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil ditambahkan!');
    }

    // EDIT (Form Edit)
    public function edit($id)
    {
        $user = User::where('id_user', $id)->firstOrFail();
        return view('admin.user.edit', compact('user'));
    }

    // UPDATE (Simpan Perubahan)
    public function update(Request $request, User $user, $id)
    {
        $request->validate([
        'name'     => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username,' . $id . ',id_user',
        'password' => 'nullable|string|min:6',
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
        // Cegah menghapus user yang sedang login
        if (Auth::user()->id_user == $user->id_user) {
        return redirect()->back()->with('error', 'Anda tidak bisa menghapus akun yang sedang Anda gunakan saat ini!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'User berhasil dihapus!');
    }
}    