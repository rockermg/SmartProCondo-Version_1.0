<?php $nav_pos = 'task'; ?>
@extends('layouts.base',['title'=>'SmartCondoPro :: Create Tasks','page_name'=>'Create','page_title'=>'Create Tasks','home_url'=>'task.index','home_name'=>'Tasks'])


@section('body')

<div class="col-12">
    <div class="card">
        <div class="card-body container w-xl-50 w-lg-75 pt-5">
            @include('layouts.partials.messages')
            <form method="post" action="">
            @csrf
               
                <div class="row">
                    
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="floatingTaskName" class="form-label">Task Name</label>
                            <input id="floatingTaskName" type="text" class="form-control" name="name" value="" placeholder="Task Name" required="required" autofocus>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="taskDes">Task Description</label>
                            <textarea id="taskDes" name="description" cols="" rows="3" placeholder="Task Description" class="form-control" required="required" autofocus></textarea>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="form-group w-50 pe-">
                            <label for="tskPrty">Task Priority</label>
                            <select id="tskPrty" name="priority" class="form-select" required="required">
                                <option value="0">select priority</option>
                                <option value="1">High</option>
                                <option value="2">Medium</option>
                                <option value="3">Low</option>
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
                                            <input class="form-check-input" type="radio" value="1" name="type" id="onetime" checked>
                                            <label class="form-check-label" for="onetime">
                                                Onetime
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  value="2" name="type" id="rotation">
                                            <label class="form-check-label" for="rotation">
                                                Roatative
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="date_select" style="display: none;">
                                <div class="form-group">
                                    <label for="tskPrty">Task Expire on</label>
                                    <input type="date" name="expire" class="form-control">
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
                                            <input class="form-check-input" type="radio" name="resident_task" value="1" id="yes">
                                            <label class="form-check-label" for="yes">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="resident_task" value="0" id="no" checked>
                                            <label class="form-check-label" for="no">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="complain_select" style="display: none;">
                                <div class="form-group">
                                    <label for="cmplnNo">Complaint No</label>
                                    <select id="cmplnNo" name="complain_no" class="form-select" required="required">
                                        <option value="0">Select Complaint No</option>
                                        <option value="1">C112345</option>
                                        <option value="2">C112345</option>
                                        <option value="3">C112345</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" type="button" class="btn btn-primary btn-lg me-2 w-100 w-sm-auto mb-2 mb-sm-3">Create</button>
                        <a href="{{ route('task.index') }}" class="btn btn-secondary btn-lg w-100 w-sm-auto">Back</a>
                    </div>

                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection('body')

@section('plugins')

@endsection('plugins')

@section('page-scripts')
<script>
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