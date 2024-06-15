@include('layouts.header')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Contact</span>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">My
            Account</span></h2>

    <div class="row px-xl-5">
        <div class="col-lg-5 mb-5">
            <div class="list-group">
                <a class="list-group-item list-group-item-action active" href="{{ route('profile.show') }}">
                    My account
                </a>
                <a class="list-group-item list-group-item-action " href="{{ route('profile.show') }}">
                    Profile
                </a>
                <a class="list-group-item list-group-item-action " href="{{ route('changepassword.show') }}">
                    Change Password
                </a>
                <a class="list-group-item list-group-item-action " href="{{ route('profile.historyOrder') }}">
                    Your Orders
                </a>

            </div>
        </div>
        @yield('content')

        {{-- <div class="col-lg-7 mb-5 collapse" id="collapseExample1">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Password"
                            required="required" data-validation-required-message="Please enter your name">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="8" id="message" placeholder="Message" required="required"
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
        <div class="col-lg-7 mb-5 collapse" id="collapseExample2">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Orders"
                            required="required" data-validation-required-message="Please enter your name">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="8" id="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
</div>

@include('layouts.footer')
