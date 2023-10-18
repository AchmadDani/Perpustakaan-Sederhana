<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
// use Datatables;
use App\Models\User;
use Illuminate\Http\Request;




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

     public function show(User $user)
    {
        return view('user.infoPengguna', compact('user'));
    }
// $users = User::all(); // Mengambil semua data dari database

    
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
    public function update(Request $request, $id)
    {
        //
    }

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


  //Datatables
    // public function index() {
    //     $users = User::all();
    //     return view('user.daftarPengguna', compact('users'));
    // }

  // public function show(User $user)
    // {
    //     return view('user.infoPengguna', compact('user'));
    // }
