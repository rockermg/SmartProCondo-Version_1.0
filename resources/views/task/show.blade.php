<?php $nav_pos = 'task'; ?>
@extends('layouts.base',['title'=>'SmartCondoPro :: View Task Details','page_name'=>'View','page_title'=>'View Task Details','home_url'=>'task.index','home_name'=>'Tasks'])


@section('body')
<div class="col-12">
    <div class="card">
        <div class="card-body container w-xl-50 w-lg-75">
            <div class="row">
                <div class="col-12 col-md-12">
                    
                    <div class="px-2">
                        <h5 class="text-muted mb-3 fw-normal">Task <span class="text-dark fw-bold">No. {{$task->id}}</span></h5>
                    </div>
                    <div class="mt-0">
                        <dl class="divide">

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Name</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $task->task_name }}</dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Description</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $task->task_description }}</dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Priority</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $task->task_priority==1?'High':'Low' }}</dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Type</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{  $task->task_type==0?'One-Time':'Rotation'}}</dd>
                            </div>
                            
                            @if($task->task_type!=0)
                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Task Expiry Date</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{   $task-> task_expire}}</dd>
                            </div>
                            @endif

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">From Residents</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{   $task->task_from_res==1?'Yes':'No' }}</dd>
                            </div>

                            @if($task->task_type==0)
                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Complain No</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{   $task->task_complain_no }}</dd>
                            </div>
                            @endif

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Created By</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user }}</dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Created Date</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $task->created_date }}</dd>
                            </div>
                        </dl>
                    </div>

                </div> 
                <div class="col-12 mt-3">
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-lg me-2 w-100 w-sm-auto mb-2 mb-sm-3">Edit</a>
                    <a href="{{ route('task.index') }}" class="btn btn-secondary btn-lg w-100 w-sm-auto">Back</a>
                </div>   
             </div>
	    </div>
    </div>
</div>
@endsection('body')

@section('plugins')

@endsection('plugins')

@section('page-scripts')


@endsection('page-scripts')