<?php $nav_pos='staff'; ?>
@extends('layouts.base',['title'=>'SmartCondoPro :: Edit Employee Details','page_name'=>'Edit Employee Deatils','page_title'=>'Edit Employee Deatails','home_url'=>'users.index','home_name'=>'Users'])

@section('body')
<div class="col-12">
    <div class="card">
        <div class="card-body container w-xl-50 w-lg-75">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="row">
                    <div class="col-12 col-md-12 mb-0"><h5 class="text-muted mb-3 fw-normal">Employee <span class="text-dark fw-bold">No. {{ $user->id }}</span></h5></div>
                    <div class="col-12 col-md-6 mb-2 max-w-2xl text-sm text-secondary">Personal Details</div>
                    <hr class="horizontal dark mt-0">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="floatingFirstName" class="form-label">First Name</label>
                            <input id="floatingFirstName" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" placeholder="First Name" required="required">
                            @if ($errors->has('first_name'))
                                <span class="text-danger error text-left">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="floatingLastName">Last Name</label>
                            <input id="floatingLastName" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" placeholder="Last Name" required="required">
                            @if ($errors->has('last_name'))
                                <span class="text-danger error text-left">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="floatingEmail">Email</label>
                            <input id="floatingEmail" type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="name@example.com" required="required">
                            @if ($errors->has('email'))
                                <span class="text-danger error text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="floatingContact">Contact No</label>
                            <input id="floatingContact" type="text" class="form-control" name="contact_no" value="{{ $user->contact_no }}" placeholder="Contact Number" required="required">
                            @if ($errors->has('contact_no'))
                                <span class="text-danger error text-left">{{ $errors->first('contact_no') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="floatingUserName">Username</label>
                            <input id="floatingUserName" type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username" required="required">
                            @if ($errors->has('username'))
                                <span class="text-danger error text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-2 mt-3  text-sm text-secondary">Employment Details</div>
                    <hr class="horizontal dark mt-0">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="userRole">User Role</label>
                            <select name="role_id" id="userRole" class="form-select" required="required" value="{{ $user->role_id }}">
                                <option value="0">Select User Role</option>
                                @foreach($roles as $r)
                                <option value="{{$r->id}}" {{$user->role_id==$r->id?'selected':''}}>{{$r->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('role_id'))
                                <span class="text-danger error text-left">{{ $errors->first('role_id') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="jobTitle">Job Title</label>
                            <input id="jobTitle" type="text" class="form-control" name="job_title" placeholder="job title" required="required"  value="{{ $user-> job_title }}">
                            @if ($errors->has('job_title'))
                                <span class="text-danger error text-left">{{ $errors->first('job_title') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="joinedDate">Joined Date</label>
                            <input id="joinedDate" class="form-control" type="date" name="joined_date" required="required" value="{{date('Y-m-d',strtotime($user->joined_date))}}">
                            @if ($errors->has('join_date'))
                                <span class="text-danger error text-left">{{ $errors->first('join_date') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select name="department_id" class="form-select" id="department" required="required" value="{{ $user->department }}">
                                <option value="0">Select Department</option>
                                <option value="1" {{$user->department_id==1?'selected':''}}>HR</option>
                                <option value="2" {{$user->department_id==2?'selected':''}}>Accounts</option>
                                <option value="3" {{$user->department_id==3?'selected':''}}>Labour</option>
                            </select>
                            @if ($errors->has('department'))
                                <span class="text-danger error text-left">{{ $errors->first('department') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-lg me-2 w-100 w-sm-auto mb-2 mb-sm-3">Update</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary btn-lg w-100 w-sm-auto">Back</a>
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

@endsection('page-scripts')
