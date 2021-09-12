<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cfop extends Model
{
    //

    public $table = 'cfop';

    public function getAllCfop(){

        return Cfop::all();
    }

    public function getSearchCfop($codigo){

        return Cfop::where('codigo', $codigo)->first();
    }
}
