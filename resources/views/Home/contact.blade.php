@extends('layouts.app')
@section('content')

<!-- Page Content -->
<!-- About Page Starts Here -->
<div class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Contact Us</h2>
                    <hr>
                </div>
            </div>
            <div class="col-md-6">



                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.508589837673!2d168.74546081522544!3d-45.01460017909823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa9d51e506875be93%3A0xececa3835b5a503b!2s61%20Grant%20Road%2C%20Frankton%2C%20Queenstown%209300!5e0!3m2!1sen!2snz!4v1627712115742!5m2!1sen!2snz" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <div class="container">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Send Message</button>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <div class="share">
                                        <h5>You can also keep in touch on:
                                            <ul class="social-icons">
                                            <li><a href="#"><i class="fa fa-phone-square"></i> 03 111 2222</a></li>
                                            <li><a href="mailto:firstaid@mobilehealth.co.nz">firstaid@mobilehealth.co.nz</a></li>
                                            <span>
                                                <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                </span>
                                            </ul>
                                            </h5>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Page Ends Here -->

@endsection
