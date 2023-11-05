<?php $nav_pos = 'task'; ?>
@extends('layouts.base',['title'=>'SmartCondoPro :: Edit Tasks','page_name'=>'Edit','page_title'=>'Edit Tasks','home_url'=>'task.index','home_name'=>'Tasks'])

@section('body')
<div class="col-12">
    <div class="card">
        <div class="card-body container w-xl-50 w-lg-75">
            @include('layouts.partials.messages')

            <form action="{{ route('task.update', $task->id) }}" method="post">
            @method('patch')
            @csrf
                <div class="row">
                <div class="col-12 col-md-12 mb-0"><h5 class="text-muted mb-3 fw-normal">Task <span class="text-dark fw-bold">No. {{ $task->id }}</span></h5></div>
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Task Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $task->task_name }}" placeholder="Task Name" required="required">
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="descrp" class="form-label">Task Name</label>
                            <textarea class="form-control" id="descrp" name="description" cols="" rows="3" placeholder="Task Description">{{ $task->task_description }}</textarea>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="form-group w-50 pe-">
                            <label for="tskPrty">Task Priority</label>
                            <select id="tskPrty" name="priority"  class="form-select" required="required">
                                <option value="0">select priority</option>
                                <option value="1" {{($task->task_priority==1?'selected':'')}}>High</option>
                                <option value="1" {{($task->task_priority==2?'selected':'')}}>Medium</option>
                                <option value="2" {{($task->task_priority==3?'selected':'')}}>Low</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="floatingUserName">Task Type</label>
                                    <div class="d-flex mt-2">
                                        <div class="form-check me-4">
                                            <input class="form-check-input" type="radio" name="type" value="1" id="onetime" {{$task->task_type==1?'checked':''}} require>
                                            <label class="form-check-label" for="onetime">
                                                Onetime
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  value="2" name="type" id="rotation" {{$task->task_type==2?'checked':''}} require>
                                            <label class="form-check-label" for="rotation">
                                                Roatative
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="date_select">
                                <div class="form-group">
                                    <label for="tskPrty">Task Expire on</label>
                                    <input type="date" name="expire" class="form-control" value="{{date('Y-m-d',strtotime($task->task_expire))}}">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="floatingUserName">Task From Residents (Complaints)</label>
                                    <div class="d-flex mt-2">
                                        <div class="form-check me-4">
                                            <input class="form-check-input" type="radio" name="resident_task" value="1" id="yes" {{$task->task_from_res==1?'checked':''}} require>
                                            <label class="form-check-label" for="yes">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="resident_task" value="0" id="no" {{$task->task_from_res==0?'checked':''}} require>
                                            <label class="form-check-label" for="no">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="complain_select" >
                                <div class="form-group">
                                    <label for="cmplnNo">Complaint No</label>
                                    <select id="cmplnNo" name="complain_no" class="form-select" required="required">
                                        <option value="0">Select Complaint No</option>
                                        <option value="12542"  {{($task->task_complain_no==12542?'selected':'')}}>12542</option>
                                        <option value="12563" {{($task->task_complain_no==12563?'selected':'')}}>12563</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" type="button" class="btn btn-primary btn-lg me-2 w-100 w-sm-auto mb-2 mb-sm-3">Update</button>
                        <a href="{{ route('task.index') }}" class="btn btn-secondary btn-lg w-100 w-sm-auto">Back</a>
                    </div>

                </div>
            </form>
 


            <div class="row">
                <div class="col-12 col-md-12">
                    
                </div>
            </div>
		
	    </div>
    </div>
</div>
@endsection('body')

@section('plugins')

@endsection('plugins')

@section('page-scripts')


<script>
    var task_type = "<?php echo $task->task_type; ?>"
    var res_type = "<?php echo $task->task_from_res; ?>"
    if(task_type==1){
        
        $('#date_select').css('display', 'none');
    }
    if(res_type==0){
        $('#complain_select').css('display', 'none');
    }
    $("input:radio[name='type']").change(function() {
        if ($(this).val() == 2) {
            $('#date_select').css('display', 'block')
        } else {
            $('#date_select').css('display', 'none')
        }
    });

    $("input:radio[name='resident_task']").change(function() {
        if ($(this).val() == 1) {
            $('#complain_select').css('display', 'block')
        } else {
            $('#complain_select').css('display', 'none')
        }
    });
</script>
@endsection('page-scripts')