<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegisterRequest;

class StaffController extends Controller
{
    public function index(){
        $users = User::where('is_active',1)->orderBy('id','asc')->latest()->paginate(10);

        return view('users.index', compact('users'));
    }

    public function create(){
        $roles = Role::get();
        return view('users.create',['roles'=>$roles]);
    }

    public function show(User $user) 
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user) 
    {
        return view('users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    public function destroy(User $user) 
    {
        $user->update(['is_active'=>0]);

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }

    public function store(RegisterRequest $request){
        $user = User::create(
            $request->validated(),
        );
        $update_user = User::where('id',$user->id)->update([
            'created_by' => auth()->user()->id,
                'created_at' => date('Y-m-d H:i:s'),

        ]);
        $user->assignRole([$request->role_id]);
        return redirect()->route('users.index')
            ->withSuccess(__('User Created successfully.'));
    }

    public function update(User $user, Request $req){
        DB::beginTransaction();
        try {
            $user->update([
                'first_name'=>$req->first_name, 
                'last_name'=>$req->last_name, 
                'email'=>$req->email, 
                'username'=>$req->username,
                'contact_no'=>$req->contact_no, 
                'department_id'=>$req->department_id, 
                'joined_date'=>$req->joined_date, 
                'job_title'=>$req->job_title, 
                'role_id'=>$req->role_id,
                'updated_by' => auth()->user()->id,
                'updated_date' => date('Y-m-d H:i:s')
            ]);
            $user->assignRole([$req->role_id]);
            DB::commit();
            return redirect()->route('users.index')
                ->withSuccess(__('User Updated successfully.'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
            DB::rollBack();
            return redirect()->route('users.index')
                ->withSuccess(__('Something went wrong!!'));
        }
    }
}
