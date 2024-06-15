@extends('profileIndex')
<style>
    .control-group {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>
@section('content')
    <div class="col-lg-7 mb-5">
        <div class="contact-form bg-light p-30">
            <div id="success">

            </div>
            <h2>Change Password</h2><br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="list-style:none">

                                {{ $error }}
                            </li>
                        @endforeach

                    </ul>

                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('changepassword.update') }}" cname="changeProfile" id="changeProfile" novalidate="novalidate"
                method="POST">
                @csrf
                <div class="control-group">
                    <input type="password" class="form-control" id="password" placeholder="Your Password"
                        data-validation-required-message="Please enter your password" name="password" value="">
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="password" class="form-control" id="newpassword" placeholder="New Password"
                        data-validation-required-message="Please enter your new password" name="newpassword" value="">
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('newpassword')"></i>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="password" class="form-control" id="comfirmpassword" placeholder="Confirm Password"
                        name="comfirmpassword" value=""
                        data-validation-required-message="Please confirm your new password">
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('comfirmpassword')"></i>
                    <p class="help-block text-danger"></p>
                </div>


                <div>
                    <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    function togglePassword(fieldId) {
        var field = document.getElementById(fieldId);
        var icon = field.nextElementSibling;
        if (field.type === 'password') {
            field.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            field.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
