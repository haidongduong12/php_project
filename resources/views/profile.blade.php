@extends('profileIndex')
@section('content')
    <div class="col-lg-7 mb-5">
        <div class="contact-form bg-light p-30">
            <div id="success">

            </div>
            <h2>Profile</h2><br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('profile.update') }}" cname="changeProfile" id="changeProfile" novalidate="novalidate"
                method="POST">
                @csrf
                <div class="control-group">
                    <input type="text" class="form-control" id="name" placeholder="Your Name"
                        data-validation-required-message="Please enter your name" name="fullname"
                        value="{{ $user->fullname }}">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="email" placeholder="Your Phonenumber"
                        data-validation-required-message="Please enter your email" name="phonenumber"
                        value="{{ $user->phonenumber }}">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" placeholder="Your Address" name="address"
                        value="{{ $user->address }}" data-validation-required-message="Please enter a subject">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control" rows="8" id="message" placeholder="Notes"
                        data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                        Message</button>
                </div>
            </form>
        </div>
    </div>
@endsection
