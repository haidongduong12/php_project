@extends('dashboard.user.users')
@section('user')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mt-5">Horizontal Form</h5>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" value="{{ $user->username }}"
                                name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" value="{{ $user->email }}"
                                name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" value="{{ $user->password }}"
                                name="password">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="gridRadios1"
                                        value="admin" checked="">
                                    <label class="form-check-label" for="gridRadios1">Admin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="gridRadios2"
                                        value="staff">
                                    <label class="form-check-label" for="gridRadios2">Staff</label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="role" id="gridRadios3"
                                        value="users">
                                    <label class="form-check-label" for="gridRadios3">Users
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    {{-- <div class="form-group row">
                    <div class="col-sm-3">Checkbox</div>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">Example checkbox</label>
                        </div>
                    </div>
                </div> --}}
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Fullname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" value="{{ $user->fullname }}"
                                name="fullname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" value="{{ $user->address }}"
                                name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Phonenumber</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" value="{{ $user->phonenumber }}"
                                name="phonenumber">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn  btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
