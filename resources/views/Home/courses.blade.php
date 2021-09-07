@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <!-- Courses Page Starts Here -->

    <div class="course-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>All Available Courses</h2>
                        <hr>
                        <ul>
                            <li><p>NZQA accredited First Aid courses, On-site or at your workplace. For your company,
                                    club or for the whanau</p></li>
                            <li><p>Interactive activities, with realistic scenarios make our courses fun and learning
                                    easy</p></li>
                            <li><p>We provide morning and afternoon tea, and a light lunch</p></li>
                            <li><p>For more information, read about each of our course offerings below</p></li>
                        </ul>
                    </div>
                </div>

                {{--Courses start--}}

                <div class="row posts">
                    <div id="1" class="item new col-md-12">

                        <div class="course-item">
                            <a href="/book">
                                <h4>Essential First Aid Course</h4>
                            </a>
                            <h5>Unit Standard: 6401</h5>
                            <h6>$149.00</h6>
                            <img src="images/course_02.jpg" alt="image of first aid course">

                            <p>This one day course is ideal for first aiders in workplaces and anyone wanting to learn the basics of first aid.</p>
                            <p>This first aid course is recommended for low-risk workplaces and is the minimum qualification requirement for a workplace first-aider (valid for 2 years)</p><br>
                            <h5>What It Covers</h5>
                            <ul>
                                <li>Bleeding, shock and wound care</li>
                                <li>Fractures, sprains, strains and dislocations</li>
                                <li>Medical conditions- heart attack, angina, asthma, diabetes, seizures, stroke and severe allergies</li>
                                <li>Poisoning</li>
                                <li>Burns- thermal, chemical and electrical</li>
                            </ul>

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
                            <p>Take our First Aid Refresher course to renew your Essential First Aid Level or equivalent certification.</p><br>
                            <h5>What It Covers</h5>
                            <ul>
                                <li>You'll learn the latest first aid information and techniques needed to take care of yourself and others in the home or workplace</li>
                                <li>Two hours shorter than the full First Aid Level 1 course</li>
                                <li>Your certification will remain current for another 2 years</li>
                            </ul>

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
                            <p>This first aid course is recommended for people who may need to manage emergency care for a period of two – twelve hours and is for students who have achieved the standard in this unit can perform first aid in an
                                emergency.</p>
                            <p>This course aims to guide and motivate students to provide immediate first aid in
                                emergency situations.
                                Throughout the 12-hour course, students receive high standards of patient care
                                training.
                            </p><br>
                            <h5>What It Covers</h5>
                            <ul>
                                <li>Response to an emergency care situation</li>
                                <li>Ensuring that the safety of the first aider, group and patient is not compromised</li>
                                <li>Minimising harmful environmental conditions</li>
                                <li>Establishing a ‘safe’ area for group members</li>
                                <li>Establishing communications</li>
                                <li>Establishing and maintaining group morale and safety</li>
                                <li>Delegation of appropriate tasks using effective communication</li>
                                <li>Handling of fatalities according to police requirements</li>
                                <li>Basic lifting and carrying techniques</li>
                                <li>Factors affecting a decision to evacuate a patient and/or group</li>
                                <li>Information required by outside help or emergency services</li>
                            </ul>


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

                            <p>This course is ideal for first aiders in workplaces and anyone wanting to learn
                                basic life support including resuscitation and management of serious bleeding.</p>
                            <p>People who complete this course can provide basic cardiopulmonary resuscitation (CPR).</p>
                            <p>The unit includes the emergency care phase of rapid identification or intervention to
                                prevent breathing or circulatory stop or failure.</p>
                            </p><br>
                            <h5>What It Covers</h5>
                            <ul>
                                <li>The confidence in recognising and treating cardiac arrest, choking, and bleeding</li>
                                <li>The basic skills to provide time-critical assistance and CPR before more experienced help arrives</li>
                                <li>A Basic Life Support certificate valid for 2 years upon successful completion</li>
                            </ul>

                            <div class="secondary-button">
                                <a href="/book">Book course</a>
                            </div>
                        </div>

                    </div>


                </div>

                <!-- Courses Page Ends Here -->

@endsection
