<?php

namespace App\Http\Controllers\API;

use App\Loan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\LoanResource;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $loans = Loan::where('user_id', auth()->guard('api')->user()->id)->get();
        return response([ 'loans' => LoanResource::collection($loans), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->all();

        $validator = Validator::make($data, [
            'amount' => 'required|numeric|gt:0',
            'payment_frequency' => 'required|max:255'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $data['user_id'] = auth()->guard('api')->user()->id;
        $loan = Loan::create($data);

        return response([ 'loans' => new LoanResource($loan), 'message' => 'Created successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        $userId = auth()->guard('api')->user()->id;
        if($loan->getAttribute('user_id')!=$userId){
            return response([ 'status' => 'failure', 'message' => 'Unauthorized Access'], 403);
        }
        return response([ 'loans' => new LoanResource($loan), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan) {
        $loan->update($request->all());

        return response([ 'loan' => new LoanResource($loan), 'message' => 'Updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();

        return response(['message' => 'Deleted']);
    }
}
