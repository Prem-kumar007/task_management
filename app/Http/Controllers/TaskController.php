<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TaskController extends Controller
{
    public function index(Request $request)
    { 
      $current_page = 'task';
       return view('task.list')->with('current_page', $current_page);
    }

    public function fetchAll() {
        
		$emps = DB::table('task')->get();
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
}
