<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TaskController extends Controller
{
    public function index(Request $request)
    { 
      $current_page = 'task';
      $employee = DB::table('employee')->get(['id','first_name','last_name']);
       return view('task.list')->with(['current_page'=>$current_page,'employee'=>$employee]);
    }

    public function fetchAll(Request $request) {
       
		$tasks = DB::table('task')->get();
		$output = '';
		if ($tasks->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Employee Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($tasks as $task) {
				$output .= '<tr>
                <td>'.$task->id.'</td>
                <td>'.$task->task_name.'</td>
                <td>'.$task->Employee_name.'</td>
                <td>
                  <a href="#" id="'.$task->id.'" class="text-success mx-1 editemployee" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="'.$task->id.'" class="text-danger mx-1 deleteemployee"><i class="bi-trash h4"></i></a>
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
