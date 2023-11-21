<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function database()
    {
        /*
        try {
            DB::connection()->getPdo();
            Log::info("Connected successfully to the database.");
        } catch (\Exception $e) {
            Log::error("Could not connect to the database. Error: " . $e->getMessage());
        }*/
        LOG::info("RADI KURCINA");
    }
}
