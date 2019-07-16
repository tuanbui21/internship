<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\model_User;

class adminUserController extends Controller
{
    //Điều khiển hiện thị danh sách dữ liệu
    public function index(){
    	$user = model_User::All();
    	return view('index')->with('user',$user);
    }
    //Điều khiển trang insert dữ liệu

    public function create()
    {
        return view('create');
    }
    //Thực hiện việc insert dữ liệu
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'username' => 'required|alpha|min:6|max:10',
        /* required: Phải tồn tại trong request gửi lên và không để trống
            min: độ dài tối thiểu, max : độ dài tối đa
        */
        'email' => 'required|email',
        'address' => 'required|min:8',
      ]);
      $user = new model_User;
      $user->username = object_get($request, 'username');
      $user->email = $request->email;
      $user->address = $request->address;
      $user->save();
      return redirect('index');

    }

    //Hiển thị dữ liệu riêng biệt dựa theo $id.
    /**
    *
    *
    *
    *
    *
    */
    public function show($id)
    {
      $user = model_User::where('id','=',$id)->select('*')->first();
      return view('/detail', compact('user'));
    }

    //Hiển thị trang cập nhật dữ liệu.
    public function edit($id)
    {
      // get data user
      $user = model_User::findOrFail($id); 
      return view('update',compact('user'));
    }

    // Thực thi việc cập nhật dữ liệu.
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'username' => 'bail|required|alpha|min:6|max:10',
        'email' => 'bail|required|email',
        'address' => 'bail|required|min:8',
        ]);
        $user = model_User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->save();
        return redirect('index');
    }

    // Xóa dữ liệu.
    public function destroy($id)
    {
     $user = model_User::find($id);
     $user->delete();
     return redirect('index');
    }

}
