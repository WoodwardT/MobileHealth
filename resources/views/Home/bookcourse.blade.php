@extends('layouts.app')
@section('content')

    <!-- Page Content -->

    <!-- Featured Starts Here -->
    <div class="course-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Select Course Date and Time</h2>
                        <hr>
                        <p><strong>This page is NOT formatted.</strong></p>
                        <p>Page has flexbox at top and cards at bottom. Cards would be easier option.</p>
                    </div>
                </div>

                <div class="book-container book-theme">
                    <div class="book-container-box">
                        <div class="book-item">
                            <a href="/courses#1">
                                <h4>September 01</h4>
                                <h6>First Aid Course</h6>
                                <p>Start Time: 09:00</p>
                                <p>End Time: 04:00</p>
                                <p>$155 inc GST</p>
                            </a>
                        </div>
                    </div>

                    <div class="book-container-box">
                        <div class="book-item">
                            <a href="/courses#2">
                                <h4>September 07</h4>
                                <h6>First Aid Course</h6>
                                <p>Start Time: 09:00</p>
                                <p>End Time: 04:00</p>
                                <p>$155 inc GST</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="/book">
                        <h5 class="card-title">First Aid Course</h5>
                        <h4>September 07</h4>
                        <p>Start Time: 09:00</p>
                        <p>End Time: 04:00</p>
                        <p>$155 inc GST</p>
                        </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <a href="/book">
                        <h5 class="card-title">First Aid Course</h5>
                        <h4>September 14</h4>
                        <p>Start Time: 09:00</p>
                        <p>End Time: 04:00</p>
                        <p>$155 inc GST</p>
                        </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <a href="/book">
                        <h5 class="card-title">First Aid Course</h5>
                        <h4>September 21</h4>
                        <p>Start Time: 09:00</p>
                        <p>End Time: 04:00</p>
                        <p>$155 inc GST</p>
                        </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <a href="/book">
                        <h5 class="card-title">First Aid Course</h5>
                        <h4>September 28</h4>
                        <p>Start Time: 09:00</p>
                        <p>End Time: 04:00</p>
                        <p>$155 inc GST</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Ends Here -->

@endsection

