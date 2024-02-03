<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;
class EmployeeController extends Controller
{
    
    public function index(Request $request)
    { 
      $current_page = 'employee';
       return view('employee.list')->with('current_page', $current_page);
    }

    public function fetchAll() {
        
		$emps = DB::table('employee')->get();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Post</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>'.$emp->id.'</td>
                <td>'.$emp->first_name.' '.$emp->last_name.'</td>
                <td>'.$emp->email.'</td>
                <td>'.$emp->post.'</td>
                <td>'.$emp->phone.'</td>
                <td>
                  <a href="#" id="'.$emp->id.'" class="text-success mx-1 editemployee" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="'.$emp->id.'" class="text-danger mx-1 deleteemployee"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}

  
    public function store(Request $request)
    {
        $empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post];

        // $empData['password'] = Hash::make($empData['password']);
        // $empData['status'] =0;
        // $data = $empData->except(['_token','cpassword']);

        DB::table('employee')->insert($empData);
        return response()->json([
            'success' => true,
			'status' => 200,
            'message'=>'Employee Added Successfully!..'
		]);
    }

    public function edit(Request $request){

        $id = $request->id;
        $employee_data =  DB::table('employee')->where('id', $id )->first();
        return response()->json($employee_data);
        
    }

    public function update(Request $request)
    {
       
        $empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post];
        $employee_data =  DB::table('employee')->where('id', $request->emp_id)->update($empData);

        return response()->json([
            'success' => true,
			'status' => 200,
            'message'=>'Employee Updated Successfully!..'
		]);

    }

    public function delete(Request $request)
    {   
        $employee_data =  DB::table('employee')->where('id', $request->id )->delete();
        
        return response()->json([
            'success' => true,
			'status' => 200,
            'message'=>'Employee Deleted Successfully!..'
		]);
    }


}
