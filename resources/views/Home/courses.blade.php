@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <!-- Courses Page Starts Here -->

    <div class="course-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>First Aid Courses</h2>
                        <hr>
                        <p>Public course or On-site, at your workplace or club or for your whanau.</p>
                        <p>We provide morning and afternoon tea, and a light lunch.</p>
                        <p>Interactive activities, with realistic scenarios makes our courses fun and learning easy.</p>
                    </div>
                </div>

                {{--Courses start--}}

                <div class="row posts">
                    <div id="1" class="item new col-md-12">

                        <div class="course-item">
                            <a href="/book">
                                <h4>First Aid Course</h4>
                            </a>
                            <h5>Unit Standard: 6401</h5>
                            <h6>$149.00</h6>
                            <img src="images/course_02.jpg" alt="image of first aid course">

                            <p>This basic first aid course provides students with opportunities to learn
                                first aid skills and further develop existing skills so that they can provide
                                basic first aid treatment until more advanced help arrives at the scene.
                            </p>

                            <div class="secondary-button">
                                <a href="/book" class="secondary-button">Book course</a></div>
                        </div>
                    </div>

                    <div id="2" class="item new col-md-12">

                        <div class="course-item">
                            <a href="/book">
                                <h4>First Aid Refresher</h4>
                            </a>
                            <h5>Unit Standard: 6401</h5>
                            <h6>$149.00</h6>

                            <img src="images/course_02.jpg" alt="image of first aid course">
                            <p>TThis first aid course can be used as a refresher for those with a current
                                FA certificate (2 years 3 months) to be sighted by our instructor prior to any
                                training. 
                            </p>

                            <div class="secondary-button"><a href="/book">Book course</a>
                            </div>
                        </div>

                    </div>

                    <div id="3" class="item new col-md-12">

                        <div class="course-item">
                            <a href="/book">
                                <h4>Managing Emergency Situation</h4>
                            </a>
                            <h5>Unit Standard: 6400</h5>
                            <h6>$TBC</h6>

                            <img src="images/course_02.jpg" alt="image of first aid course">
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

                    <div id="4" class="item new col-md-12">

                        <div class="course-item">
                            <a href="/book">
                                <h4>Provide Life Support</h4>
                            </a>
                            <h5>Unit Standard: 6400</h5>
                            <h6>$TBC</h6>

                            <img src="images/course_02.jpg" alt="image of first aid course">


                            <p>Individuals who meet the standards of this unit can provide basic cardiopulmonary
                                resuscitation (CPR).
                                The unit includes the emergency care phase: rapid identification or intervention to
                                prevent breathing or circulatory stop or failure; or support the victim to relieve
                                airway obstruction; or support the patient’s breathing and circulation through
                                cardiopulmonary resuscitation (CPR).
                            </p>
                            <div class="secondary-button">
                                <a href="/book">Book course</a>
                            </div>
                        </div>

                    </div>


                </div>

            <!-- Courses Page Ends Here -->

@endsection
