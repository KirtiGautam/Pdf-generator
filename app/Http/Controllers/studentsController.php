<?php

namespace App\Http\Controllers;

use App\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('userID')) {
            $user = DB::table('users')->select()->where('id', '=', $request->session()->get('userID'))->get();
            // $students = $this->registered();
            // $users = $this->users();
            $dat = array('user' => $user);
            return view('user\main')->with('dat', $dat);
        }
        return redirect('login');
    }


    public function search(Request $request)
    {
        if ($request->has('searc')) {
            $search = $request->input('searc');
            $res = array();
            if ($search == '')
                $students = students::all();
            else {
                $tenth = ($request->input('tenth') == '') ? 0 : $request->input('tenth');
                $twelve = ($request->input('twelve') == '') ? 0 : $request->input('twelve');
                $diploma = ($request->input('diplo') == '') ? 0 : $request->input('diplo');
                $sgpa = ($request->input('sgpa') == '') ? 0 : $request->input('sgpa');
                $percentage = ($request->input('perce') == '') ? 0 : $request->input('perce');
                $gap = ($request->input('gap') == '') ? 0 : $request->input('gap');
                $back = 999;
                $gender = 'Male" OR gender="Female';
                if ($request->input('back') == 'NO')
                    $back = 0;
                if ($request->input('gender') == 'Male')
                    $gender = 'Male';
                if ($request->input('gender') == 'Female')
                    $gender = 'Female';
                $students = DB::select('SELECT * FROM (SELECT * FROM students WHERE URN like "%' . $search . '%" or CRN like "%' . $search . '%" or name like "%' . $search . '%" or branch_type like "%' . $search . '%") AS s WHERE tenth_percentage>=' . $tenth . ' AND (percentage_twelve>=' . $twelve . ' OR percentage_twelve="") AND (percentage_Diploma>=' . $diploma . ' OR percentage_Diploma="") AND (sgpa_aggregate>=' . $sgpa . ' AND percentage_aggregate>=' . $percentage . ') AND (active_backlog_aggregate<=' . $back . ') AND (gender="' . $gender . '") AND (year_gap<='.$gap.') ');
            }
            /*SELECT * FROM (SELECT * FROM students WHERE tenth_percentage>=60 AND (percentage_twelve>=60 OR percentage_twelve="") AND (percentage_Diploma>=60 OR percentage_Diploma="") AND (sgpa_aggregate>=6 AND percentage_aggregate>=57) AND (active_backlog_aggregate<=0) AND (gender='Male' OR gender='Female') AND (year_gap<=3)) AS s WHERE s.URN like '%Mechanical%' or s.CRN like '%Mechanical%' or s.name like '%Mechanical%' or s.branch_type like '%Mechanical%' */
            foreach ($students as $student) {
                array_push($res ,'
                    <tr>
                        <td contenteditable="true">' . $student->URN . '</td>
                        <td contenteditable="true">' . $student->CRN . '</td>
                        <td contenteditable="true">' . $student->name  . '</td>
                        <td contenteditable="true">' . $student->whatsapp_cont . '</td>
                        <td contenteditable="true">' . $student->dob  . '</td>
                        <td contenteditable="true">' . $student->branch_type  . '</td>
                        <td contenteditable="true">' . $student->gender . '</td>
                        <td contenteditable="true">' . $student->mail_id . '</td>
                        <td contenteditable="true">' . $student->phone_number  . '</td>
                        <td contenteditable="true">' . $student->tenth_percentage . '</td>
                        <td contenteditable="true">' . $student->percentage_twelve . '</td>
                        <td contenteditable="true">' . $student->percentage_Diploma  . '</td>
                        <td contenteditable="true">' . $student->year_gap  . '</td>
                        <td contenteditable="true">' . $student->sgpa_aggregate . '</td>
                        <td contenteditable="true">' . $student->percentage_aggregate . '</td>
                        <td contenteditable="true">' . $student->credits_aggregate  . '</td>
                        <td contenteditable="true">' . $student->active_backlog_aggregate . '</td>
                        <td contenteditable="true">' . $student->passive_backlog_aggregate  . '</td>
                    </tr>');
            }
            return response()->json($res);
        }
    }

    public function save(Request $request)
    {
        $data = $request->input('data');
        for ($i = 0; $i < sizeof($data); $i++) {
            $students = students::find($data[$i]['URN']);
            $students->CRN = $data[$i]['CRN'];
            $students->name = $data[$i]['name'];
            $students->whatsapp_cont = $data[$i]['whatsapp_cont'];
            $students->dob = $data[$i]['dob'];
            $students->branch_type = $data[$i]['branch_type'];
            $students->gender = $data[$i]['gender'];
            $students->mail_id = $data[$i]['mail_id'];
            $students->phone_number = $data[$i]['phone_number'];
            $students->tenth_percentage = $data[$i]['tenth_percentage'];
            $students->percentage_twelve = $data[$i]['percentage_twelve'];
            $students->percentage_Diploma = $data[$i]['percentage_Diploma'];
            $students->year_gap = $data[$i]['year_gap'];
            $students->sgpa_aggregate = $data[$i]['sgpa_aggregate'];
            $students->percentage_aggregate = $data[$i]['percentage_aggregate'];
            $students->credits_aggregate = $data[$i]['credits_aggregate'];
            $students->active_backlog_aggregate = $data[$i]['active_backlog_aggregate'];
            $students->passive_backlog_aggregate = $data[$i]['passive_backlog_aggregate'];
            $students->save();
        }
        return response()->json(['success' => 'We did it Mr. Stark']);
    }
}
