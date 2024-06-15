<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all users
        $users = User::all(); // Assuming User is your Eloquent model

        return view('dashboard.user.users', compact('users'));
    }
    public function create()
    {
        // Retrieve all users
        $users = User::all(); // Assuming User is your Eloquent model
        return view('dashboard.user.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'fullname' => 'string',
            'address' => 'string',
            'phonenumber' => 'string',
            'role' => 'string',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->fullname = $request->fullname;
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->role = $request->role;
        if ($user) {
            $user->save();
            return redirect()->route('users.index')->with('success', 'User created successfully!');
        } else {
            return redirect()->back()->withInput()->with('error', 'User creation failed. Please try again.');
        }

        // $validatedData = $request->validate([
        //     'username' => 'required|string',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        //     'fullname' => 'string',
        //     'address' => 'string',
        //     'phonenumber' => 'string',
        //     'role' => 'string',
        // ]);

        //C2 tối ưu hơn
        // $validatedData['password'] = Hash::make($validatedData['password']);

        // $user = User::create($validatedData);

        // if ($user) {
        //     return redirect()->route('users.index')->with('success', 'User created successfully!');
        // } else {
        //     return redirect()->back()->withInput()->with('error', 'User creation failed. Please try again.');
        // }
    }

    public function edit($id)
    {
        $user = User::find($id);
        $users = User::all();

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User not found');
        }

        return view('dashboard.user.edit', compact('user', 'users'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User not found');
        }

        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'fullname' => 'string',
            'address' => 'string',
            'phonenumber' => 'string',
            'role' => 'string',
        ]);

        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->fullname = $validatedData['fullname'];
        $user->address = $validatedData['address'];
        $user->phonenumber = $validatedData['phonenumber'];
        $user->role = $validatedData['role'];

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('users.index')->with('errors', 'User deleted successfully');
        }
    }

    public function searchDashUser(Request $request)
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $users = User::orderBy('created_at', 'desc')->paginate(4);

        $searchTerm = $request->except('_token')['searchDashUser'];
        $userSearch = User::where('username', 'like', '%' . $searchTerm . '%')
            // ->orWhere('product_description', 'like', '%' . $searchTerm . '%')
            ->get();
        return view('dashboard.user.search', compact('userSearch', 'users', 'searchTerm'));
    }
}
