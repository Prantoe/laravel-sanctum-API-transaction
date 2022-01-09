<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::orderBy('created_at', 'DESC')->get();

        $response = [
            'message' => 'List transaction order by created at',
            'data' => $transaction
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
