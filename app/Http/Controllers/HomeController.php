<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Carbon\Carbon;
use PDF;
use App\Customer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where("status","4")->count();
        $total = Order::sum("subtotal") + Order::sum("cost");
        $jjk = Order:: where("status","3")->count();
        $customers = Customer::all()->count();
        return view('home', compact('orders','total','jjk','customers'));
    }

    public function orderReport()
    {

        //inisialisasi 30 hari range saat ini JIKA HALAMAN PERTAMA KALI DI LOAD
        //MAKA GUNAKAN STARTOFMONTH UNTUK MENGAMBIL TANGGAL 1
        $start = Carbon::now()->startofMonth()->format('Y-m-d H:i:s');

        //END OF MONTH UNTUK MENGAMBIL TANGGAL TERAKHIR BULAN INI 
        $end = Carbon::now()->endofMonth()->format('Y-m-d H:i:s');

        //JIKA USER MELAKUKAN FILTER MANUAL , MAKA PARAMETER DATE AKAN TERISI

            if(request()->date !='')
            {
                //MAKA FORMATTING TANGGALNYA BERDASARKAN FILTER USER
                $date = explode(' - ' ,request()->date);
                $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
                $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';

            }

             //BUAT QUERY KE DB MENGGUNAKAN WHEREBETWEEN DARI TANGGAL FILTER
             $orders = Order::with(['customer.district'])->whereBetween('created_at',[$start, $end])->get();
             //KEMUDIAN LOAD VIEW 
             return view('report.order', compact('orders'));
     }

         public function orderReportPdf($daterange)
        {
            $date = explode('+', $daterange); //EXPLODE TANGGALNYA UNTUK MEMISAHKAN START & END
            //DEFINISIKAN VARIABLENYA DENGAN FORMAT TIMESTAMPS
            $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
            $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';

            //KEMUDIAN BUAT QUERY BERDASARKAN RANGE CREATED_AT YANG TELAH DITETAPKAN RANGENYA DARI $START KE $END
            $orders = Order::with(['customer.district'])->whereBetween('created_at', [$start, $end])->get();
            //LOAD VIEW UNTUK PDFNYA DENGAN MENGIRIMKAN DATA DARI HASIL QUERY
            $pdf = PDF::loadView('report.order_pdf', compact('orders', 'date'));
            //GENERATE PDF-NYA
            return $pdf->stream();
        }

        public function returnReport()
        {
            $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
            $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');

            if (request()->date != '') {
                $date = explode(' - ' ,request()->date);
                $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
                $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';
            }

            $orders = Order::with(['customer.district'])->has('return')->whereBetween('created_at', [$start, $end])->get();
            return view('report.return', compact('orders'));
        }

    public function returnReportPdf($daterange)
    {
        $date = explode('+', $daterange);
        $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';

        $orders = Order::with(['customer.district'])->has('return')->whereBetween('created_at', [$start, $end])->get();
        $pdf = PDF::loadView('report.return_pdf', compact('orders', 'date'));
        return $pdf->stream();
    }

}
