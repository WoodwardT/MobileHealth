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
                    <div class="contact-text">
                        <p>Please drop us a message using the contact form to request more information. <br>
                            Or if you wish to talk to someone please call us directly.</p>

                    </div>
                </div>
            </div>
            {{--<div class="course-container-box">--}}

            {{--Address details starts--}}
            <div class="container">
                <div class="contact-container">
            <div class="contact-container-box">
                <div class="col-md-11">
                    <h5>Mobile Health</h5>

                    <p>61 Grant Road, Frankton, Central Otago</p>
                    <p>PO Box 2036, Queenstown</p>

                    <p>
                        <a href="#"><i class="fa fa-phone-square"></i> 03 111 2222</a>
                    </p>
                    <p><a href="#"><i class="fa fa-phone-square"></i> 0274 423 624</a>
                    </p>
                    <p>
                        <a href="mailto: firstaid@mobilehealth.co.nz"><i class="fa fa-envelope"></i>
                            firstaid@mobilehealth.co.nz</a>
                    </p>
{{--                    <p>
                        <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/">
                            <img src="/images/FacebookLogo.png" alt="Facebook Logo" width="40px">
                        </a>
                        <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/">
                            <img src="/images/LinkedinLogo.png" alt="Linkedin Logo" width="40px">
                        </a>
                    </p>--}}
                    <p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/" target="_blank">
                            <i class="fa fa-facebook"></i></a>
                        </a>
                        <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/" target="_blank">
                            <i class="fa fa-linkedin"></i></a>
                        </a>
                    </div>
                    </p>

                    <br><br>

                    <p>Mobile Health is part of <strong>Queenstown and Central Otago Health and Safety Services</strong>
                        and <strong>Engage Safety.</strong></p>
                    <div>
                        <p>
                            <a href="https://engagesafety.co.nz/" target="_blank">
                                <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                                     class="footer-media" >&nbsp
                                www.engagesafety.co.nz
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            {{--Message Form starts--}}

                    <div class="contact-container-box">

                        <div class="col-md-11">
                            <div class="right-content">
                                {{--<div class="container">--}}
                                <form class="contact__form" method="post" action="mail.php">

                                    <!-- form message -->
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="contact__msg"
                                                 style="display: none">
                                                <p>Your message was sent successfully.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end message -->

                                    <div class="row">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name"
                                                   placeholder="Your name..." required="">
                                        </fieldset>
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                   placeholder="Your email..." required="">
                                        </fieldset>


                                        <fieldset>
                                            <input name="subject" type="text" class="form-control" id="subject"
                                                   placeholder="Subject..." required="">
                                        </fieldset>

                                        <fieldset>
                                        <textarea name="message" rows="4" class="form-control" id="message"
                                                  placeholder="Your message..." required=""></textarea>
                                        </fieldset>

                                        <div class="col-12 form-group">
                                            <div class="g-recaptcha"
                                                 data-sitekey="6LelukYcAAAAAAlbHmXg3_I80fK6PZ9xz8LvHfob"></div>
                                        </div>

                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Send Message
                                            </button>
                                        </fieldset>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--Map starts--}}
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <h4>Location</h4>
                        <div class="col-md-12 ">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.508589837673!2d168.74546081522544!3d-45.01460017909823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa9d51e506875be93%3A0xececa3835b5a503b!2s61%20Grant%20Road%2C%20Frankton%2C%20Queenstown%209300!5e0!3m2!1sen!2snz!4v1627712115742!5m2!1sen!2snz"
                                    width="100%" height="400px" frameborder="1"
                                    style="border:1px rgba(0,0,0,0.17) solid"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Map ends--}}
    </div>
    </


    <!-- About Page ends here -->

    {{--    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="main.js"></script>--}}
    {{--
        <div class="col-md-6">
            <section style="margin-top: 50px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form class="contact__form" method="post"
                                          action="mail.php">

                                        <!-- form message -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="contact__msg"
                                                     style="display: none">
                                                    <p>Your message was sent
                                                        successfully.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end message -->

                                        <!-- form element -->
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <input name="name" type="text"
                                                       class="form-control"
                                                       placeholder="Name" required>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input name="email" type="email"
                                                       class="form-control"
                                                       placeholder="Email" required>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input name="phone" type="text"
                                                       class="form-control"
                                                       placeholder="Phone">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input name="subject" type="text"
                                                       class="form-control"
                                                       placeholder="Subject" required>
                                            </div>
                                            <div class="col-12 form-group">
                                                            <textarea name="message" class="form-control" rows="3"
                                                                      placeholder="Message" required></textarea>
                                            </div>
                                            <div class="col-12 form-group">
                                                <div class="g-recaptcha"
                                                     data-sitekey="___enter_site_key___"></div>
                                            </div>
                                            <div class="col-12">
                                                <input name="submit" type="submit"
                                                       class="button"
                                                       value="Send Message">
                                            </div>
                                        </div>
                                        <!-- end form element -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="main.js"></script>




@endsection
