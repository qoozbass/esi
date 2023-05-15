<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TriageController extends Controller
{
  public function index()
  {
    return view('triage.index');
  }

  public function asses(Request $request)
  {
    $data = $request->all();
    // dd($data);
    $cout_r = 0;
    foreach ($data as $key => $value) {
      //Check level 1
      if (str_contains($key, 'r1')) {
        $data['esi'] = 1;
        return view('triage.result')->with('data', $data);
      }
      //Check level 2
      if (str_contains($key, 'r2')) {
        $data['esi'] = 2;
        return view('triage.result')->with('data', $data);
      }
      //Check level 3
      if (str_contains($key, 'r2')) {
        $cout_r++;
      }
    }

    dd($cout_r);
    //Check level 3 or 4
    if ($cout_r > 1) {
      if (intval($data['v_oxy']) < 92) {
        dd($data['v_oxy']);
        $data['esi'] = 2;
        return view('triage.result')->with('data', $data);
      } elseif ($data['v_age'] == 4 && $data['v_PR'] >= 180 &&  $data['v_RR'] > 50) {
        $data['esi'] = 2;
        return view('triage.result')->with('data', $data);
      } elseif ($data['v_age'] == 3 && $data['v_PR'] > 160 &&  $data['v_RR'] > 40) {
        $data['esi'] = 2;
        return view('triage.result')->with('data', $data);
      } elseif ($data['v_age'] == 2 && $data['v_PR'] > 140 &&  $data['v_RR'] > 30) {
        $data['esi'] = 2;
        return view('triage.result')->with('data', $data);
      } elseif ($data['v_age'] == 1 && $data['v_PR'] > 100 &&  $data['v_RR'] > 20) {
        $data['esi'] = 2;
        return view('triage.result')->with('data', $data);
      } else {
        $data['esi'] = 3;
        return view('triage.result')->with('data', $data);
      }
    }
    //Check level 4
    if ($cout_r == 1) {

      $data['esi'] = 4;
      return view('triage.result')->with('data', $data);
    }
    //Check level 5
    if ($cout_r == 0) {
      $data['esi'] = 5;
      return view('triage.result')->with('data', $data);
    }

    return view('triage.result')->with(['success', 'ประเมินสำเร็จ!'])->with('data', $data);
  }
}
