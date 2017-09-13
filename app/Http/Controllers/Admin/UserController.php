<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role_user;
use DB;
use Session;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getAll ($key) 
    {
        $datas = DB::table('users')
        ->select('users.id','users.name as nama','users.email', 'role_users.role_id','roles.name')
        ->join('role_users','role_users.user_id','=','users.id')
        ->join('roles','roles.id','=','role_users.role_id')
        ->where('roles.name', '=', $key)
        ->orderBy('id', 'desc')
        ->get();
        return $datas;
    }
    public function index()
    {
        $data = array(
           'admins' => $this->getAll('admin'),
           'backs' => $this->getAll('back'),
           'fronts' => $this->getAll('front'),
           'pimpinans' => $this->getAll('pimpinan'),
        );
        return view('layouts.admin.user.main', with($data) );
    }
    
    public function create()
    {
        return view('admin.user.tambah');
    }
    
    function storeRequest($request) {
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        return $user;
    }

    public function store(UserRequest $request)
    {
        $user = new User;
        $user = $this->storeRequest($request);      
        $user->save();

        $id = $user->id;
        $role = new Role_user;
        $role->role_id = $request->role;
        $role->user_id = $id;
        $role->save();
       
        Session::flash('message', 'User berhasil di tambahkan');
        return redirect()->route('user.create');   
    }

   
    public function show($id)
    {
        echo "show".$id;
    }

    
    public function edit($id)
    {
        $data = User::find($id);
        return view('layouts.admin.user.edit', compact('data'));
    }


    function requestUpdate ($request, $id) {
        $data = User::find($id);
        $data->username=$request->username;
        $data->name=$request->name;
        $data->email=$request->email;
        return $data;
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'role' => 'required',
            'name' => 'required',
        ]);
        $datalama = User::find($id);
        $namaLama = $datalama->username;
        $emailLama = $datalama->email;

        $namaBaru = $request->username;
        $emailBaru = $request->email;
        if ($namaLama <> $namaBaru) {
            $this->validate($request, [
                'username' => 'required|unique:users|min:6',
            ]);
             if ($emailLama <> $emailBaru) {
                $this->validate($request, [
                    'email' => 'required|unique:users',
                ]);
                $datalama = $this->requestUpdate($request, $id);
                $datalama->save();
                Session::flash('message', 'User berhasil di perbaharui');
                return redirect()->route('user.edit',$id);
             }else{
                $datalama = $this->requestUpdate($request, $id);
                $datalama->save();
                Session::flash('message', 'User berhasil di perbaharui');
                return redirect()->route('user.edit',$id);
             }

        }else{
            if ($emailLama <> $emailBaru) {
                $this->validate($request, [
                    'email' => 'required|unique:users',
                ]);
                $datalama = $this->requestUpdate($request, $id);
                $datalama->save();
                Session::flash('message', 'User berhasil di perbaharui');
                return redirect()->route('user.edit',$id);

            }
                $datalama = $this->requestUpdate($request, $id);
                $datalama->save();
                Session::flash('message', 'User berhasil di perbaharui');
                return redirect()->route('user.edit',$id);
        }
    }

    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('message', 'User berhasil di hapus');
        return redirect()->route('user.index');
    }

    public function changePassword(){
        return view('layouts.admin.user.change-password');
    }
    
// PROSES CHANGE PASSSWORD
    public function storePassword (Request $request) {
        $this->validate($request, [
            'oldpassword' => 'required|min:6',
            'newpassword' => 'required|min:6',
            'confirm' => 'required|min:6|same:newpassword',
        ]);
        if(Auth::Check())
        {
            $current_password = Auth::User()->password;  
            $oldPassword = $request->oldpassword;  
            if(Hash::check($oldPassword, $current_password))
            {
                $user_id = Auth::User()->id;                       
                $obj_user = User::find($user_id);
                $obj_user->password = Hash::make($request->newpassword);;
                $obj_user->save(); 
                Session::flash('message', 'Password anda berhasil diperbaharui');
                return redirect()->route('changepassword');
            }else{
                Session::flash('error', 'Password anda salah');
                return redirect()->route('changepassword');
            }
        } else{
            return redirect('/');
        }
    }
}
