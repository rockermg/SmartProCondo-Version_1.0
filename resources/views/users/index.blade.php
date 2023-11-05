<?php $nav_pos='staff'; ?>
@extends('layouts.base',['title'=>'SmartCondoPro :: Manage Users/Staff','page_name'=>'','page_title'=>'Users/Staff','home_url'=>'users.index','home_name'=>'Users'])

@section('body')
<div class="col-12">
    <div class="card">
        <div class="card-body container w-xl-75 ">
           @include('layouts.partials.messages')

            <div class="row">
                <div class="col-12 col-md-12 justify-content-sm-between d-flex align-items-center flex-column flex-sm-row">
                    <h6>Managing Staff</h6><a href="{{ route('users.create') }}" class="btn btn-primary float-right px-4"><i class="fa-solid fa-user-plus me-2"></i>Add New User</a>
                </div>
                <div class="col-12 col-md-12">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 pe-0">Emp. No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Employment</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Joined date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="ps-2 pe-0"><div class="text-center text-secondary text-xs">{{ $user->id }}</div></td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{asset('img/team-2.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $user->first_name }} {{ $user->last_name }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary text-xs"><a href="tel: {{ $user->contact_no }}">{{ $user->contact_no }}</a></span></td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $user->job_title }}</p>
                                        <p class="text-xs text-secondary mb-0">{{$user->department_id==1?'Human Resource':($user->department_id==2?'Accounts':'Labour')}}</p>
                                    </td>
                                    <td><span class="text-secondary text-xs">{{ $user->username }}</span></td>
                                    <td>
                                        @foreach($user->roles as $role)
                                        @if($role->id==$user->role_id)
                                                <span class="badge bg-gradient-secondary">{{ $role->name }}</span>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td><span class="text-secondary text-xs font-weight-bold">{{ $user->joined_date }}</span></td>
                                    <td>
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-info btn-xs mb-0">View</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-secondary btn-xs mb-0">Edit</a>
                                        <button type="button" class="btn btn-outline-danger btn-xs mb-0 delete-model" attr-id="{{$user->id}}" attr-url="{{route('users.destroy',$user->id)}}" data-bs-toggle="modal" data-bs-target="#usersModal">
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

<!-- User Deletion Conformation Modal: start -->
<div class="modal fade" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header border-0 pb-0">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <i class="fa fa-exclamation-circle me-2"></i> Do you want to Delete <span class="text-dark fe-600">Emp.No <span id="user-id"></span></span> ?
        </div>
        <div class="modal-footer border-0 pt-0">
            <button type="button" class="btn btn-secondary mb-0" data-bs-dismiss="modal">Close</button>
            {!! Form::open(['method' => 'DELETE','class'=>'delete-form','style'=>'display:inline; margin-bottom:0']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger mb-0 delete-button']) !!}
            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
<!-- User Deletion Conformation Modal: Ends -->

@endsection('body')

@section('plugins')

@endsection('plugins')

@section('page-scripts')
<script>
    $(document).ready(function(){
         $('.delete-model').click(function(){
            var uid = $(this).attr('attr-id');
            var url = $(this).attr('attr-url');
           $('.delete-form').attr('action',url)
           $('#user-id').html(uid);
          
        })
    });
</script>
@endsection('page-scripts')
