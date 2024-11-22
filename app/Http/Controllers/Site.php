<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllModel;

class Site extends Controller
{
    protected $all_model;

    public function __construct()
    {
        $this->all_model = new AllModel();
    }

    public function accueil(Request $req)
    {
        # POUR APPELER UN MODEL
        # $donnees = $this->all_model->get_table('table');

        $page_data['bandeau'] = "";
        return view('accueil', $page_data);
    }
}
