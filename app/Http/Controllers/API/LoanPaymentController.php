<?php

namespace App\Http\Controllers\API;

use App\LoanPayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LoanPaymentResource;
use Illuminate\Support\Facades\Validator;

class LoanPaymentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'loan_id' => 'required|numeric|gt:0',
            'amount' => 'required|numeric|gt:0'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $loan = LoanPayment::create($data);

        return response([ 'loans' => new LoanPaymentResource($loan), 'message' => 'Created successfully'], 200);
    }
}
