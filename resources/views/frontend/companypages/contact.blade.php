@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')

<style type="text/css">
    
.cnctmain {
    background-image: url('{{ asset('public/front/img/images/lifeadvice-trans.png') }}');
    background-repeat: no-repeat,no-repeat;
    background-position: left top, bottom right;
    padding-bottom: 100px !important;
    padding-top: 100px;
}
</style>
@include('frontend.companypages.includes.main')
        <div class="container-fluid pt-5 pl-0 pr-0">

        <div class="row pb-2 d-none contactus align-items-center">
            <h1 class="text-center">Got questions about insurance?</h1>

            <div class="col-md-6 py-3 text-center offset-md-3">
                <h5>Get answers to your questions from our Insurance Experts. We will also assist you all the way with your insurance application.</h5>
                <p>Speak with our Advisors anytime</p>
            </div>

        </div>

        <div class="container-fluid pb-5 cnctmain">
            <div class="container">
                <div class="row  row-eq-height">

                    <div class="col-md-5 contactadd align-items-center">
                        <h2 class="contact-heading"><span>Contact</span> Address</h2>
                        <p>Get answers to your questions from our Insurance Experts. We will also assist you all the way with your insurance application.</p>
                        <p>Speak with our Advisors anytime</p>

                        <div class="col-md-12 add">
                            <h5><i class="fa fa-map-marker"></i>  Address </h5>
                            <p>912 Isaiah Place, Kitchener, ON, N2E0B6 </p>
                        </div>
            
                        <div class="col-md-12 add">
                            <h5><i class="fa fa-phone"></i> Phone  </h5>
                            <p>+1-855-500-8999,</p></div> 

                            <div class="col-md-12 add">
                                <h5><i class="fa fa-envelope"></i> Email </h5>
                                <p>contact@lifeadvice.ca,</p>
                            </div>
                        </div>
            
                        <div class="col-md-7 contactform" id="contact-result">
                            <div id="result"></div>
                            <h2 class="contact-heading"><span>Send a</span> Message</h2>
                            <h5><span>Please fill the form below and submit... We will contact you.</span></h5>
                            <form method="post" action="process_contact.php" id="contact-form">
                                <div class="row">
                                    <p class="col-6"><label class="">Your Name *</label><br><span><input type="text" name="fname" class="form-control"></span></p>
                                    <p class="col-6"><label class="">Your Last Name</label><br><span><input type="text" name="lname" class="form-control"></span></p>
                                    <p class="col-6"><label class="">Your Email *</label><br><span><input type="text" name="email" class="form-control"></span></p>
                                    <p class="col-6"><label class="">Your Contact No *</label><br><span><input type="text" name="mobile" class="form-control"></span></p>
                                    <p class="col-12"><label class="">Your Subject</label><br><span><input type="text" name="subject" class="form-control"></span></p>
                                    <p class="col-12"><label class="">Your Message</label><br><span><textarea name="message" rows="2" class="form-control"></textarea></span></p>
                                    <p class="col-12 text-right">
                                        <button type="submit" class="btn-lg save-btn mr-4" name="contact-submit">Submit</button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="vector-contact">
                        <img src="{{ asset('public/front/img/images/men-head.png') }}">
                    </div>
                </div>
            </div>
        </div>
            <div>
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2898.706305242645!2d-80.52393728446313!3d43.40406767913069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf5f33283b73d%3A0x11d11e5af5f01ae3!2s912+Isaiah+Pl%2C+Kitchener%2C+ON+N2E+0B6%2C+Canada!5e0!3m2!1sen!2sin!4v1559567604280!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
@endsection