<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\DetailTransaction;
use Illuminate\Support\Facades\DB;

class DetailTransactionController extends Controller
{  
    public function getAllDetailTransactions($id) {
        $detail_transactions = DB::table('detail_transactions as dt')
            ->select(
                'dt.id',
                'dt.tanggal_kembali as tanggalKembali',
                't.tanggalPinjam as tanggalPinjam',
                'dt.status as statusType',
                DB::raw("(
                    CASE
                    WHEN dt.status = 1 THEN 'Pinjam'
                    WHEN dt.status = 2 THEN 'Kembali'
                    WHEN dt.status = 3 THEN 'Hilang'
                    END
                ) as status"),
                'c.namaKoleksi as koleksi'
            )
            ->join('koleksi as c', 'c.id', '=', 'dt.collection_id')
            ->join('transactions as t', 't.id', '=', 'dt.transaction_id')
            ->where('dt.transaction_id', '=', $id)
            ->get();

            return Datatables::of($detail_transactions)->make(true);
    }

    public function edit($id)
    {
    $detailTransaction = DB::table('detail_transactions as dt')
        ->select(
            't.id as idTransaksi',
            'dt.id as id',
            'dt.tanggal_Kembali as tanggalKembali',
            't.tanggalPinjam as tanggalPinjam',
            'dt.status',
            'uPinjam.fullname as namaPeminjam',
            'uTugas.fullname as namaPetugas',
            'c.namaKoleksi as koleksi'
        )
        ->join('koleksi as c', 'c.id', '=', 'dt.collection_id')
        ->join('transactions as t', 't.id', 'dt.transaction_id')
        ->join('users as uPinjam', 't.userIdPeminjaman', '=', 'uPinjam.id')
        ->join('users as uTugas', 't.userIdPetugas', '=', 'uTugas.id')
        ->where('dt.id', '=', $id)
        ->first();

    return view('transactions.detailTransaksiKembalian', compact('detailTransaction'));
}
    

public function update(Request $request, DetailTransaction $DetailTransaction)
{
    $request->validate([
        'status' => 'required|in:1,2,3',
    ]);

    $affected = DB::table('detail_transactions')->where('id', $request->id)->update(
        [
            'status' => $request->status,
            'tanggal_kembali' => Carbon::now()->toDateString(),
        ]
    );
    if ($request->status == 2) {
        $transactions = Transaction::find($DetailTransaction->transactionsId);

        if ($transactions) {
            $transactions->status = $request->status;
            $transactions->tanggalSelesai = Carbon::now()->toDateString();
            $transactions->save();
        }
    }
    return redirect()->route('transaksi')->with('success', 'Transaksi berhasil diperbarui!');
}

    
}
