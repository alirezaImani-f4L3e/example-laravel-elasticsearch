<?php

namespace App\Http\Controllers;

use App\Jobs\InsertToElastic;
use Exception;

class ESController extends Controller
{
    public function index(){
        try{
            InsertToElastic::dispatch("alireza");
        }catch(Exception $e){
            return ['error'=>$e->getMessage()];
        }
        return ['res'=>'dispatched'];
    }
}
