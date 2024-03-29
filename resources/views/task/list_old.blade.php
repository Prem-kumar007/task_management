@extends('layout.layout')
@section('page-header')
<div class="page-heading">
<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Todo List</h3>
                <p class="text-subtitle text-muted">Task Mainatain</p>
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Todo List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label for="roundText">Task Name</label>
                <input type="text" id="roundText" class="form-control round"
                    placeholder="Enter Task Name">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label for="squareText">Employee Name</label>
                <input type="text" id="squareText" class="form-control square"
                    placeholder="Select Employee">
            </div>
        </div>
        <div class="col-sm-2">
            <br>
              <button type="submit" class="btn btn-primary">Submit Task</button>
        </div>
      </div>
    </div>
 </div>
@endsection
@section('page-content') 



 <div id="app">
    <!-- Task App Widget Starts -->
    <section class="tasks">
        <div class="row">
            <div class="col-lg-7">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Tasks
                        </h4>
                        <ul class="list-inline d-flex mb-0">
                            <!-- <li class="d-flex align-items-center">
                                <i class="bx bx-check-circle font-medium-3 me-50"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle me-1" role="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </li> -->
                            <li class="d-flex align-items-center">
                                <i class="bx bx-sort me-50 font-medium-3"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle" role="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Pending</a>
                                        <a class="dropdown-item" href="#">In progress</a>
                                        <a class="dropdown-item" href="#">Completed</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0 py-1">
                        <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox1">
                                            <label for="checkbox1"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Add SCSS and JS files if
                                            required</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-success me-1">frontend</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/1.jpg" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                            <label for="checkbox2"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Check all the changes that you did,
                                            before you commit</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-danger me-1">backend</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/2.jpg" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item completed">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox3" checked>
                                            <label for="checkbox3"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Dribble, Behance, UpLabs & Pinterest
                                            Post</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-primary me-1">UI/UX</div>
                                        <div class="avatar bg-rgba-primary m-0 me-50">
                                            <img src="assets/images/faces/3.jpg" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox4">
                                            <label for="checkbox4"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Fresh Design Web & Responsive
                                            Miracle</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-info me-1">Design</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/4.jpg" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox5">
                                            <label for="checkbox5"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Add Calendar page and source and
                                            credit page in
                                            documentation</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-warning me-1">Javascript</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/5.jpg" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox6">
                                            <label for="checkbox6"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Add Angular Starter-kit</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-primary me-1">UI/UX</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/1.jpg" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Completed Task List
                        </h4>

                    </div>
                    <div class="card-body px-0 py-1">
                        <table class="table table-borderless">
                            <tr>
                                <td class="col-3">UI Design</td>
                                <td class="col-6">
                                    <div class="progress progress-info">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">60%</td>
                            </tr>
                            <tr>
                                <td class="col-3">VueJS</td>
                                <td class="col-6">
                                    <div class="progress progress-success">
                                        <div class="progress-bar" role="progressbar" style="width: 35%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">30%</td>
                            </tr>
                            <tr>
                                <td class="col-3">Laravel</td>
                                <td class="col-6">
                                    <div class="progress progress-danger">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">50%</td>
                            </tr>
                            <tr>
                                <td class="col-3">ReactJS</td>
                                <td class="col-6">
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">80%</td>
                            </tr>
                            <tr>
                                <td class="col-3">Go</td>
                                <td class="col-6">
                                    <div class="progress progress-secondary">
                                        <div class="progress-bar" role="progressbar" style="width: 65%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">65%</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


            <!-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer> -->
       
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/extensions/dragula/dragula.min.js"></script>
    <script src="assets/js/pages/ui-todolist.js"></script>
    @endsection