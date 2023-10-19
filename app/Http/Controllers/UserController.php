<?php

namespace App\Http\Controllers;
use App\Models\User;
// use Datatables;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user.daftarPengguna');
    }

    public function getData(){
        $data = User::all();
        return Datatables::of($data)->make(true);
    }

    // Achmad Dani Saputra | 6706223131
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.registrasi');
    }

    public function update(Request $request, User $users)
    {
        $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required|email',
            // 'password' => 'nullable|min:8',
            'address' => 'required',
            'birthdate' => 'required|date',
            'phoneNumber' => 'required',
            'agama' => 'required',
            'jenisKelamin' => 'required|in:0,1',
        ]);
        // Perbarui data user dengan data yang dikirimkan dari formulir
        $affacted = DB::table('users')->where('id', $request->id)->update([
            'fullname' => $request->fullname,
            'phoneNumber' => $request->phoneNumber,
            'address' => $request->address,
        ]
        );
        // Redirect ke halaman yang sesuai, misalnya, halaman daftar koleksi
        return redirect()->route('user.daftarPengguna')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function show(User $user)
    {
        return view('user.editPengguna', compact('user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


//CATATAN


//     public function show(User $id)
// {
//     $user = User::find($id); //mengambil data by id
//     return view('user.infoPengguna', compact('users'));
// }
// $users = User::all(); // Mengambil semua data dari database


  //Datatables
    // public function index() {
    //     $users = User::all();
    //     return view('user.daftarPengguna', compact('users'));
    // }

  