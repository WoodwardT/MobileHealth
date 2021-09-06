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

    <!-- Featured Ends Here -->

@endsection

