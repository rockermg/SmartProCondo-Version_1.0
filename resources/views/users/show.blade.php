<?php $nav_pos='_staff_create'; ?>

@extends('layouts.base',['title'=>'SmartCondoPro :: Employee Details','page_name'=>'Employee Deatails','page_title'=>'Employee Deatails','home_url'=>'users.index','home_name'=>'Users'])


@section('body')
<div class="col-12">
    <div class="card">
        <div class="card-body container w-xl-50 w-lg-75">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="px-2">
                        <h5 class="text-muted mb-3 fw-normal">Employee <span class="text-dark fw-bold">No. {{ $user->id }}</span></h5>
                        <p class="max-w-2xl text-sm leading-6 text-secondary">Personal Details</p>
                    </div>
                    <div class="mt-3">
                        <hr class="horizontal dark my-0">
                        <dl class="divide">

                            <!-- <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Employee No</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user->id }} </dd>
                            </div> -->
                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Name</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user->first_name }} {{ $user->last_name }}</dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Email</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user->email }}</dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Contact No</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user->contact_no }}</dd>
                            </div>

                        </dl>
                    </div>
                    <div class="px-2">
                        <p class="max-w-2xl text-sm leading-6 text-secondary">Employment Details</p>
                    </div>
                    <div class="mt-3">
                        <hr class="horizontal dark my-0">
                        <dl class="divide">

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">User Name</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user->username }} </dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Job Title</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user->job_title }} </dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Department</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">Department Name</dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">Joined Date</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">{{ $user->joined_date }} </dd>
                            </div>

                            <div class="px-2 py-4 d-grid sm:grid grid-col-3 sm:gap-4">
                                <dt class="text-sm text-dark">User Role</dt>
                                <dd class="mt-1 col-span-2 text-sm mt-sm-0 mb-0 text-gray-700">
                                @foreach($user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-lg me-2 w-100 w-sm-auto mb-2 mb-sm-3">Edit</a>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-lg w-100 w-sm-auto">Back</a>
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
