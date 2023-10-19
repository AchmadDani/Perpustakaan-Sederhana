<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use App\Models\Koleksi;
// use App\Models\Collection;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index() {
        return view('koleksi.daftarKoleksi');
    }

    public function getKoleksi(){
        $data = Koleksi::all();
        return Datatables::of($data)->make(true);
    }
                 // Achmad Dani Saputra | 6706223131
    public function create()
    {
        return view('koleksi.registrasi');
    }

    public function show(Koleksi $koleksi) //tampilan view buat ngedit
    {
        return view('koleksi.editKoleksi', compact('koleksi'));
    }

    public function update(Request $request, Koleksi $koleksi) //controller buat edit
    {
    $request->validate([
        'namaKoleksi' => 'required',
        'jenisKoleksi' => 'required|in:1,2,3',
        'jumlahKoleksi' => 'required|numeric',
    ]);
    
    // Perbarui data koleksi dengan data yang dikirimkan dari formulir
    
    $affacted = DB::table('koleksi')->where('id', $request->id)->update([
        'namaKoleksi' => $request->namaKoleksi,
        'jenisKoleksi' => $request->jenisKoleksi,
    ]
    );
    // Redirect ke halaman yang sesuai, misalnya, halaman daftar koleksi
    return redirect()->route('koleksi.daftarKoleksi')->with('success', 'Koleksi berhasil diperbarui.');
    }

    public function store(Request $request)
    {   
        $request->validate([                   
            'namaKoleksi' => 'required|max:100',
            'jenisKoleksi' => 'required|in:1,2,3',
            'jumlahKoleksi' => 'required|integer',
        ]);
        Koleksi::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
        ]);

        // Set pesan flash untuk memberi tahu pengguna bahwa data telah berhasil ditambahkan
    session()->flash('success', 'Data koleksi berhasil ditambahkan.');
    
    // Alihkan pengguna ke rute daftar koleksi
    return redirect()->route('koleksi.daftarKoleksi');
        // return redirect()->route('koleksi.registrasi')->with('success', 'Koleksi telah ditambahkan.');
    }
}

    // public function index() {
    //     $koleksi = Koleksi::all();
    //     return view('koleksi.daftarKoleksi', compact('koleksi'));
    // }