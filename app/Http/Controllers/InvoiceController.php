<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class InvoiceController extends Controller
{
    public function index() {
        $invoices = DB::table('invoices as i')
            ->join('orders as o', 'i.order_id', '=', 'o.id')
            ->join('users as u', 'o.user_id', '=','u.id')
            ->join('invoice_statuses as is', 'i.invoice_status_id', '=', 'is.id')
            ->select('i.*', 'u.name as user_name', 'u.avatar as user_avatar', 'is.status as invoice_status', 'o.id as order_id')
            ->get();
        // dd($invoices);
        return view('admin.invoice.index', compact('invoices'));
    }

    public function edit($id) {
        $invoice_statuses = DB::table('invoice_statuses')->get();

        $invoice = DB::table('invoices as i')
            ->join('orders as o', 'i.order_id', '=', 'o.id')
            ->join('users as u', 'o.user_id', '=','u.id')
            ->join('invoice_statuses as is', 'i.invoice_status_id', '=', 'is.id')
            ->select('i.*', 'u.id as user_id','u.name as user_name', 'u.avatar as user_avatar', 'is.status as invoice_status', 'o.id as order_id')
            ->where('i.id', $id)
            ->first();
        // dd($invoice);
        return view('admin.invoice.detail', compact('invoice', 'invoice_statuses'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'total_price' => 'required|numeric',
            'payment_method' => 'required',
            'status' => 'required',
            'time' => 'required|date',
        ]);

        $data = [
            'total_price' => $validated['total_price'],
            'payment_method' => $validated['payment_method'],
            'time' => $validated['time'],
            'invoice_status_id' => $validated['status'],
            'updated_at' => Carbon::now(),
        ];
        // dd($id);
        DB::table('invoices')
            ->where('id', $id)
            ->update($data);

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Invoice updated successfully',
        ];

        return redirect()->back()->with($notification);
    }

    public function delete($id) {
        DB::table('invoices')
            ->where('id', $id)
            ->delete();

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Invoice deleted successfully',
        ];

        return redirect()->back()->with($notification);
    }
}
