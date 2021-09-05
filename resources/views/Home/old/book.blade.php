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

                                                <div class="col-md-12">
                                                    <label for="preferredname">Full Name</label>
                                                    <input class="form-control" type="text" name="preferredname"
                                                           placeholder="Name" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" type="email" name="email"
                                                           placeholder="Email" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="phone">Phone</label>
                                                    <input class="form-control" type="text" name="phone"
                                                           placeholder="phone" required>
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

                                                <div class="col-md-12">
                                                    <label for="actName">Date</label>
                                                    <input class="form-control" type="date" name="actDate" placeholder="Date" required>
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
