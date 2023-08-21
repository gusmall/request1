<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Phattarachai\LineNotify\Facade\Line;
class ReportController extends Controller
{
    public function report(Request $request)
    {
        
        request()->validate(
            [
                'papade' => 'required', 
                'type' => 'required', 
                'detail' => 'required', 
                'name' => 'required', 
                'g-recaptcha-response' => 'required', 
            ],
            [
                'papade.required' => '* โปรดเลือกประเด็น',
                'type.required' => '* โปรดเลือกเลือกประเภทร้องเรียน',
                'name.required' => '* กรุณาใส่ชื่อ-นามสกุล',
                'detail.required' => '* กรุณาใส่รายละเอียด',
                'g-recaptcha-response.required' => '* eeeeeeee',
            ]
        );
        $response = Http::post('https://script.google.com/macros/s/AKfycbz1PahaGjG6bRbhUD-bgHV3-CdeyXRAj_JtEygEIOApJwVkZRaAoZlwKe88Aiwt0C77yQ/exec?action=addUser', [
            'papade' => $request->papade,
            'type' => $request->type,
            'detail' => $request->detail,
            'name' => $request->name,
            'tel' => '\''.$request->tel,
            'line' => $request->line,
            'email' => $request->email,
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'status' => "รอดำเนินการ",

        ]);
        if($response == "success"){
            
            Line::send('
ประเด็น: ' . $request->papade . '
ประเภทร้องเรียน: ' . $request->type . '
รายละเอียด: ' . $request->detail . '
ชื่อ: ' . $request->name . '
เบอร์โทรศัพท์: ' . $request->tel . '
ID Line: ' . $request->line . '
Email: ' . $request->email . '
วันที่แจ้ง: ' . date('Y-m-d H:i:s'));
            alert()->success('สำเร็จ', 'แจ้งข้อร้องเรียน เสนอแนะ แนะนำบริการ สำเร็จ.');
            return redirect()->route('index');
        }
        return $response;
      
    }
}
