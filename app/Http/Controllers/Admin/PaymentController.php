<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $payment = Payment::orderBy('id','DESC')->paginate(10);
        return view('admin.payment.index', compact('payment'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $payment = Payment::find($id);
        return view('admin.payment.show',compact('payment'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function delete_invoice(Request $request)
    {
        $billplz_id = $request->get('billplz_id');

        $response = Http::withBasicAuth(env('BILLPLZ_API_KEY').':', '')->delete(env('BILLPLZ_URL').'v3/bills/'.$billplz_id);

        if($response){

            // update invoice status
            $payment = Payment::where('billplz_id', $billplz_id)->first();
            $payment->status = 'delete';
            $payment->save();

            return 'Invoice has been delete successfully';
        } else {
            return 'Unable to delete this invoice';
        }
    }
}
