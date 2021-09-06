

@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Course Booking form</h2>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <h4>Booking Form</h4>
                        <p>
                        </p>

                        <div class="form-body">
                            <div class="row">
                                <div class="form-holder">
                                    <div class="form-content">
                                        <div class="form-items">

                                            <form method="POST" action="/profiles">

                                                <div class="col-md-6">
                                                    <label for="firstname">First Name *</label>
                                                    <input class="form-control" type="text" name="firstname"
                                                           placeholder="First Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="lasstname">Last Name *</label>
                                                    <input class="form-control" type="text" name="lastname"
                                                           placeholder="Last Name" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="phone">Mobile Phone</label>
                                                    <input class="form-control" type="number" name="phone"
                                                           placeholder="Phone" >
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email">Email*</label>
                                                    <input class="form-control" type="email" name="email"
                                                           placeholder="Email" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="actName">Date of birth</label>
                                                    <input class="form-control" type="date" name="actDate" placeholder="Date of birth" required>
                                                </div>


                                                <div class="col-md-12">
                                                    <label for="course">Gender</label>
                                                    <select id="gender" name="gender" class="form-control" required>
                                                        <option value="Male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="specify">Please specify</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="course">Course</label>
                                                    <select id="course" name="course" class="form-control" required>
                                                        <option value="run">First Aid Course</option>
                                                        <option value="bike">First Aid Refresher</option>
                                                        <option value="ski">Managing Emergency Situations</option>
                                                        <option value="snowboard">Provide Life Support</option>
                                                    </select>
                                                </div>




                                                <div class="form-button mt-3">
                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                    <a class="btn btn-warning mx-1" href="/profiles/">Cancel</a>
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
