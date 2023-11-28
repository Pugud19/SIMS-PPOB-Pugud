<?php

namespace App\Controllers;

use App\Models\TopupModel;

class TopUp extends BaseController
{
    protected $topup;
   public function __construct()
   {
    $this->topup = new TopupModel();
   }
   public function index(){

    $list = $this->topup->findAll();
    $data = [
        'topup' => $list
    ];
    

    return view('transaction/index', $data);
   }

   public function create()
    {
        $this->topup->insert([
            'nominal' => $this->request->getPost('nominal')
        ]);

		return redirect('transaction')->with('success', 'Data Added Successfully');
    }
}
