@extends('layouts.base')

@section('body')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
       
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required="required" autofocus>
            <label for="floatingName">First Name</label>
            @if ($errors->has('first_name'))
                <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
            @endif
        </div>
        <br>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="First Name" required="required" autofocus>
            <label for="floatingName">Last Name</label>
            @if ($errors->has('last_name'))
                <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
            @endif
        </div>
        <br>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        
        <br>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <br>
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <br>
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        <br>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="contact_no" value="{{ old('contact_no') }}" placeholder="Contact Number" required="required">
            <label for="floatingConfirmPassword">Contact No</label>
            @if ($errors->has('contact_no'))
                <span class="text-danger text-left">{{ $errors->first('contact_no') }}</span>
            @endif
        </div>
    <br>
        <select name="role_id" id="" required="required" value="{{ old('role_id') }}">
        <option value="0">Select User Role</option>
        <option value="1">Adminstrator</option>
        <option value="2">User</option>
        <option value="3">Labour</option>

    </select>
    @if ($errors->has('role_id'))
                <span class="text-danger text-left">{{ $errors->first('role_id') }}</span>
            @endif
        <br>
        <br>
        <input type="text" name="job_title" placeholder="job title" required="required" value="{{ old('contact') }}"value="{{ old('job_title') }}">
        @if ($errors->has('job_title'))
                <span class="text-danger text-left">{{ $errors->first('job_title') }}</span>
            @endif
        <br>Joined Date
    <input type="date" name="join_date" required="required" value="{{ old('join_date') }}">
    @if ($errors->has('join_date'))
                <span class="text-danger text-left">{{ $errors->first('join_date') }}</span>
            @endif
    <br>
    
    <select name="department" id="" required="required" value="{{ old('department') }}">
        <option value="0">Select Department</option>
        <option value="1">HR</option>
        <option value="2">Accounts</option>
        <option value="3">Labour</option>
    </select>
    @if ($errors->has('department'))
                <span class="text-danger text-left">{{ $errors->first('department') }}</span>
            @endif

    <br>
    <button type="submit">Save</button>
        
        @include('auth.partials.copy')
    </form>
@endsection
