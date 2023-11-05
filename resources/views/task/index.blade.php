<?php $nav_pos = 'task'; ?>
@extends('layouts.base',['title'=>'SmartCondoPro :: Tasks','page_name'=>'','page_title'=>'Tasks','home_url'=>'task.index','home_name'=>'Tasks'])

@section('body')
<div class="col-12">
    <div class="card">
        <div class="card-body container w-xl-75 ">
           @include('layouts.partials.messages')

            <div class="row">
                <div class="col-12 col-md-12 justify-content-sm-between d-flex align-items-center flex-column flex-sm-row">
                    <h6>Managing Tasks</h6><a href="{{ route('task.create') }}" class="btn btn-primary float-right px-4"><i class="fa fa-plus me-2"></i>Add New Task</a>
                </div>
                <div class="col-12 col-md-12">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 pe-0">Task ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width="10">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Priority</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">From Residents</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Complaint No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created By</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created At</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $t)
                                <tr>
                                    <td><div class="text-center text-secondary text-xs">{{ $t->id }}</div></td>
                                    <td><div class="text-secondary text-xs shortend">{{ $t->task_name }}</div></td>
                                    <td><div class="text-secondary text-xs">{{ $t->task_type==0?'One-Time':'Rotation' }}</div></td>
                                    <td><div class="text-secondary text-xs"><span class="badge {{ $t->task_status==0?'bg-primary':($t->task_status==1?'bg-info':($t->task_status==2?'bg-secondary':($t->task_status==3?'bg-danger':'bg-success'))) }}">{{ $t->task_status==0?'Pending':($t->task_status==1?'Assigned':($t->task_status==2?'In-Progress':($t->task_status==3?'Incomplete':'Complete'))) }}</span></div></td>
                                    <td><div class="text-secondary text-xs">{{ $t->task_priority==1?'High':'Low'}}</div></td>
                                    <td><div class="text-secondary text-xs">{{ $t->task_from_res==1?'Yes':'No' }}</div></td>
                                    <td><div class="text-secondary text-xs">{{ $t->task_complain_no==null?'N/A':$t->task_complain_no }}</div></td>
                                    <td><div class="text-secondary text-xs">{{ $t->first_name }}</div></td>
                                    <td><div class="text-secondary text-xs">{{ date('d-m-Y',strtotime($t->created_at)) }}</div></td>
                                    <td>
                                        <a href="{{ route('task.show', $t->id) }}" class="btn btn-outline-info btn-xs mb-0">View</a>
                                        <a href="{{ route('task.edit', $t->id) }}" class="btn btn-outline-secondary btn-xs mb-0">Edit</a>
                                        <button type="button" class="btn btn-outline-danger btn-xs mb-0" data-bs-toggle="modal" data-bs-target="#tasksModal">
                                        Delete
                                        </button>
                                    </td>                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

	    </div>
    </div>
</div>


<!-- Task Deletion Conformation Modal: start -->
<div class="modal fade" id="tasksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header border-0 pb-0">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <i class="fa fa-exclamation-circle me-2"></i> Do you want to Delete <span class="text-dark fe-600">Task.No {{ $t->id }} </span> ?
        </div>
        <div class="modal-footer border-0 pt-0">
            <button type="button" class="btn btn-secondary mb-0" data-bs-dismiss="modal">Close</button>
            {!! Form::open(['method' => 'DELETE','route' => ['task.destroy', $t->id],'style'=>'display:inline; margin-bottom:0']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger mb-0']) !!}
            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
<!-- Task Deletion Conformation Modal: Ends -->

@endsection('body')

@section('plugins')

@endsection('plugins')

@section('page-scripts')


@endsection('page-scripts')