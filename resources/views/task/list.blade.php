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
               
            <select class="choices form-select">
                <option value="">Choose</option>
                @foreach ($employee as $emp)
                <option value="{{$emp->id}}">{{$emp->first_name}} {{$emp->last_name}}</option>
                @endforeach
            </select>
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

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pending</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Progress</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Completed</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div id='pending_task'>

    </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

  </div>
</div>

@include('layout.script')


<script>
    fetchalltask();
function fetchalltask(){
 
    $.ajax({
        url:"{{ route('task_fetchall') }}",
        method:"get",
        success:function(response){
            $('#pending_task').html(response);
            $('table').DataTable({
                order:['0','desc']
            });
        },
        error:function(error){
            console.log(error);
        },
    });
    
}

</script>
    
@endsection