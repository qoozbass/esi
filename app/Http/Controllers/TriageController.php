<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class TriageController extends Controller
{
  public function index()
  {
    return view('triage.index');
  }

  public function asses(Request $request)
  {
    $this->validate($request, [
      'v_bt' => 'required|numeric',
      'v_bp1' => 'required|integer',
      'v_bp2' => 'required|integer',
      'v_oxy' => 'required|integer',
      // 'v_dtx' => 'required|integer',
      'v_PR' => 'required|integer',
      'v_RR' => 'required|integer',
      'v_painscore' => 'required|integer',
    ], [
      'v_bt.required' => 'กรุณากรอก Body Temperature',
      'v_bt.numberic' =>  'กรุณากรอก Body Temperature เป็นตัวเลข',
      'v_bp1.required' => 'กรุณากรอก Blood Pressure 1',
      'v_bp1.integer' => 'กรุณากรอก Blood Pressure 1 เป็นตัวเลข',
      'v_bp2.required' => 'กรุณากรอก Blood Pressure 2',
      'v_bp2.integer' => 'กรุณากรอก Blood Pressure 2 เป็นตัวเลข',
      'v_oxy.required' => 'กรุณากรอก Oxygen Sat',
      'v_oxy.integer' => 'กรุณากรอก Oxygen Sat เป็นตัวเลข',
      // 'v_dtx.required' => 'กรุณากรอก DTX',
      // 'v_dtx.integer' => 'กรุณากรอก DTX เป็นตัวเลข',
      'v_PR.required' => 'กรุณากรอก PR',
      'v_PR.integer' => 'กรุณากรอก PR เป็นตัวเลข',
      'v_RR.required' => 'กรุณากรอก RR',
      'v_RR.integer' => 'กรุณากรอก RR เป็นตัวเลข',
      'v_painscore.required' => 'กรุณากรอก Pain Score',
      'v_painscore.integer' => 'กรุณากรอก Pain Score',

    ]);

    $data = $request->all();
    $cout_r = 0;
    foreach ($data as $key => $value) {
      //Check level 1
      if (str_contains($key, 'r1')) {
        $data['esi'] = 1;
        // dd($data);
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      }
      //Check level 2
      if (str_contains($key, 'r2')) {
        $data['esi'] = 2;
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      }
      //Check level 3
      if (str_contains($key, 'r3')) {
        $cout_r++;
      }
    }

    //Check level 3 or 4
    if ($cout_r > 1) {
      if (intval($data['v_oxy']) < 92) {
        // dd( 1);
        $data['esi'] = 2;
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      } elseif (intval($data['v_age']) == 4 && intval($data['v_PR']) >= 180 &&  intval($data['v_RR']) > 50) {
        // dd( 2);
        $data['esi'] = 2;
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      } elseif (intval($data['v_age']) == 3 && intval($data['v_PR']) > 160 &&  intval($data['v_RR']) > 40) {
        // dd( 3);
        $data['esi'] = 2;
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      } elseif (intval($data['v_age']) == 2 && intval($data['v_PR']) > 140 &&  intval($data['v_RR']) > 30) {
        // dd( 4);
        $data['esi'] = 2;
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      } elseif (intval($data['v_age']) == 1 && intval($data['v_PR']) > 100 &&  intval($data['v_RR']) > 20) {
        // dd( 5);
        $data['esi'] = 2;
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      } else {
        $data['esi'] = 3;
        Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
        return view('triage.result')->with('data', $data);
      }
    }
    //Check level 4
    if ($cout_r == 1) {
      $data['esi'] = 4;
      Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
      return view('triage.result')->with('data', $data);
    }
    //Check level 5
    if ($cout_r == 0) {
      $data['esi'] = 5;
      Alert::success('ประเมินสำเร็จ', 'ผลการประเมิน ESI ระดับ: ' . $data['esi']);
      return view('triage.result')->with('data', $data);
    }

    return view('triage.result')->with(['success', 'ประเมินสำเร็จ!'])->with('data', $data);
  }

  public function login(Request $request)
  {
    // dd($request->all());
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      $user = Auth::user();
      $success['token'] =  $user->createToken('MyApp')->plainTextToken;
      $success['name'] =  $user->name;

      return redirect()->route('triage-index');
    } else {
      return redirect()->back();
    }
  }

  public function logout()
  {
    Auth::guard('web')->logout();
    return redirect()->route('home');
  }
}
