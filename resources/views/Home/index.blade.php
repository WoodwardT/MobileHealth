<div id="pre-header">
    <span>We are running courses during Covid Alert Level 2</span>
</div>


@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner" alt="First Aid Course Image">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
                    <div class="caption">
                        <h2>Mobile Health and Safety</h2>
                        <hr>
                        <p>The premier <strong>locally owned and operated</strong> provider of Workplace Health and
                            Safety Services in the Queenstown Lakes and Central Otago region.
                        </p>
                        <p>
                            <strong>Providing First Aid courses now.</strong>
                            <br>Attend a course with us to get your First Aid qualifications.
                        </p>
                        <div class="primary-button">
                            <a href="/book">Book your First Aid Course now!</a>
                        </div>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="course-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>First Aid Courses Available</h2>
                        <hr>
                    </div>
                </div>

                <div class="course-container course-theme">
                    <div class="course-container-box">
                        <div class="course-item">
                            <a href="/courses#1">
                            <img src="images/course_02.jpg" alt="Course 1">
                            <h4>First Aid Course</h4>
                            <h6>$155 inc GST</h6>
                            </a>
                            <br>
                            <p>This basic first aid course provides students with opportunities to learn
                                first aid skills and further develop existing skills so that they can provide
                                basic first aid treatment until more advanced help arrives at the scene.
                            </p>
                            <div class="secondary-button">
                                <a href="/book">Book course</a>
                            </div>
                        </div>
                    </div>
                    <div class="course-container-box">
                        <div class="course-item">
                            <a href="/courses#2">
                            <img src="images/course_04.jpg" alt="Course 2">
                            <h4>First Aid Refresher</h4>
                            <h6>$129 inc GST</h6>
                            </a>
                            <br>
                            <p>This first aid course can be used as a refresher for those with a current
                                FA certificate (2 years 3 months) to be sighted by our instructor prior to any
                                training.
                            </p>
                            <div class="secondary-button">
                                <a href="/book">Book course</a>
                            </div>
                        </div>
                    </div>
                    <div class="course-container-box">
                        <div class="course-item">
                            <a href="/courses#3">
                            <img src="images/course_02.jpg" alt="Course 3">
                            <h4>Managing Emergency Situation</h4>
                            <h6>$ TBC</h6>
                            </a>
                            <br>
                            <p>Students who have achieved the standard in this unit can perform first aid in an
                                emergency.
                                This course aims to guide and motivate students to provide immediate first aid in
                                emergency situations.
                                Throughout the 12-hour course, students receive high standards of patient care
                                training.
                            </p>
                            <div class="secondary-button">
                                <a href="/book">Book course</a>
                            </div>
                        </div>
                    </div>
                    <div class="course-container-box">
                        <div class="course-item">
                            <a href="/courses#4">
                            <img src="images/course_04.jpg" alt="Course 4">
                            <h4>Provide Life Support</h4>
                            <h6>$ TBC</h6>
                            </a>
                            <br>
                            <p>Individuals who meet the standards of this unit can provide basic cardiopulmonary
                                resuscitation (CPR).
                                The unit includes the emergency care phase: rapid identification or intervention to
                                prevent breathing
                                or circulatory stop or failure; or support the victim to relieve airway obstruction; or
                                support the
                                patient’s breathing and circulation through cardiopulmonary resuscitation (CPR).
                                </p>



                            </p>
                            <div class="secondary-button">
                                <a href="/book">Book course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--Reviews starts here--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Testimonials</h2>
                    <hr>
                    <h5>What our learners like most about the courses</h5>
                    <p>CPR, burns, choking, heart attack. Enjoyed all the training. <em>- Nathanial</em></p>
                    <p>How interactive and easy going it was. <em>- Karli</em></p>
                    <p>The delivery and content was very relevant to me. <em>- Amber</em></p>
                    <p>Examples were fun. <em>- Angela</em></p>
                    <p>I enjoyed the course today. I learned a lot. Actually to do CPR. <em>- Ervin</em></p>

                </div>
            </div>
        </div>
    </div>

    {{--Reviews end here--}}

@endsection
