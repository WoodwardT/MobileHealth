
@extends('layouts.app')
@section('content')

    {{--Gender script--}}
    <script type="text/javascript">
        function showfield(name){
            if(name == 'Other') {
                document.getElementById('div1').innerHTML = 'Other: <input type="text" name="other" class="form-control"/>';
            }
            else {
                document.getElementById('div1').innerHTML='';
            }
        }
    </script>

    <!-- Page Content -->
    <div class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Course Booking form</h2>
                        <hr>
                    </div>

                    <div class="right-content">
                        <h4>Booking Form</h4>
                        <p>
                        </p>

                        <div class="form-body">
                            <div class="row">
                                <div class="form-holder">
                                    <div class="form-content">
                                        <div class="form-items">

                                            <form method="GET" action="/book">

                                                <div class="col-md-4">
                                                    <label for="course">Course</label>
                                                    <select id="course" name="course" class="form-control" required>
                                                        <option value="FirstAid">First Aid Course</option>
                                                        <option value="FirstAidRefresh">First Aid Refresher</option>
                                                        <option value="ManageEmergency">Managing Emergency Situations
                                                        </option>
                                                        <option value="ProvideLife">Provide Life Support</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                        <label for="coursedate" class="form-control-label">Select course date*</label>
                                                        <select name="coursedate" id="coursedate" class="form-control"
                                                                required>
                                                            <option value="date1">Thursday 7 October 2021</option>
                                                            <option value="date1">Thursday 14 October 2021</option>
                                                            <option value="date1">Thursday 21 October 2021</option>
                                                            <option value="date1">Thursday 28 October 2021</option>
                                                            <option value="date1">Thursday 4 November 2021</option>
                                                            <option value="date1">Thursday 11 November 2021</option>
                                                        </select>
                                                </div>
                                                <br><br><br>

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="firstname">First Name *</label>
                                                        <input type="text" class="form-control" placeholder="First name" aria-label="firstname" name="firstname" id="firstname">
                                                    </div>
                                                    <div class="col">
                                                        <label for="lastname">Last Name *</label>
                                                        <input type="text" class="form-control" placeholder="Last name" aria-label="lastname" name="lastname" id="lastname">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="phone">Mobile Phone</label>
                                                    <input class="form-control" type="text" name="phone"
                                                           placeholder="Phone">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email">Email*</label>
                                                    <input class="form-control" type="email" name="email"
                                                           placeholder="Email" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="actName" class="form-control-label">Date of birth</label>
                                                    <input class="form-control"
                                                           type="date" id="dob" name="dob"
                                                           value="2018-07-22"
                                                           min="1920-01-01" max="2021-01-01"
                                                           required pattern="\d{4}-\d{2}-\d{2}"
                                                           required>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                    <label for="gender" class="form-control-label">Gender</label>
                                                    <select name="gender" id="gender" class="form-control"
                                                            onchange="showfield(this.options[this.selectedIndex].value)"
                                                            required>
                                                        <option value="Male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="Other">Or please specify</option>
                                                    </select>
                                                    </div>
                                                    <div class="col">
                                                    <div id="div1"></div>
                                                </div>
                                                </div>


                                                <div>
                                                <span class="secondary-button">
                                                    <a href="/book">Submit Booking</a>
                                                </span>

                                                    <span class="btn btn-warning">
                                                    <a href="/book">Cancel</a>

                                                </span>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
