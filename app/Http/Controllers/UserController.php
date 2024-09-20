<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function index() {

        // $data = [
        //     'username' => 'customer-1',
        //     'name' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data);

        // $data = [
        //     'name' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'name' => 'Manager tiga',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // $user = UserModel::all(); // ambil data dari m_user
        // return view('user', ['data' => $user]);

        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOr(1, ['username', 'name'], function () {
        //     abort(404);
        // });

        // $user = UserModel::findOr(20, ['username', 'name'], function () {
        //     abort(404);
        // });

        // return view('user', ['data' => $user]);

        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'name' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );
        // return view('user', ['data' =>$user]);

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'name' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );
        // $user->save();

        // return view('user', ['data' =>$user]);

        // $user = UserModel::create([
        //         'username' => 'manager44',
        //         'name' => 'Manager44',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        // ]);
        // $user->username = 'manager45';

        // $user->isDirty(); // true
        // $user->isDirty('username'); // true
        // $user->isDirty('name'); // false
        // $user->isDirty(['name', 'username']); // true

        // $user->isClean(); // false
        // $user->isClean('username'); // false
        // $user->isClean('name'); // true
        // $user->isClean(['name', 'username']); // false

        // $user->save();
        // $user->isDirty(); // false
        // $user->isClean(); // true
        // dd($user->isDirty());

        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'name' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);
        // $user->username = 'manager12';

        // $user->save();

        // $user->wasChanged(); // true
        // $user->wasChanged('username'); // true
        // $user->wasChanged(['username', 'level_id']); // true
        // $user->wasChanged('name'); //false
        // dd($user->wasChanged(['name', 'username'])); //true

    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }

    // public function index() {
    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }

    public function index() {
        // Mengambil data user beserta level yang terkait menggunakan eager loading
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
    }


    public function tambah() {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request) {
        UserModel::create([
            'username' => $request->username,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user');
    }

    public function ubah($id) {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request) {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    public function hapus($id) {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
