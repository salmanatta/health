@extends('template.header')
@section('section')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Pre-Op Anestesia Notes</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Patient 360</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">MR Registration</a>
                    </li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic Horizontal form layout section start -->
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <form class="form">

                        <div class="card">
                            <div class="card-header">
                                <!-- <h4 class="card-title">Patient Demographics</h4> -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="First-Name">Patient MRN</label>
                                            <input type="text" id="First-Name" class="form-control" placeholder="Patient MRN" name="Patient-MRN">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="Middle-Name">Patient Name</label>
                                            <input type="text" id="Middle-Name" class="form-control" placeholder="Patient Name" name="Patient-Name">
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="Age">Age</label>
                                            <input type="number" id="Age" class="form-control" placeholder="Age" name="Age">
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="DMY">DMY</label>
                                            <input type="text" id="Age" class="form-control" placeholder="Age" value="Years" name="Age">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="city-column">Date of Opearation</label>
                                            <!-- <input type="text" id="Age" class="form-control" placeholder="Gender" name="Age"> -->
                                            <input type="date" id="DBO" class="form-control" placeholder="D.O.B" name="DBO">

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="First-Name">Written By</label>
                                            <input type="text" id="First-Name" class="form-control" placeholder="Written By" name="Written-By">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="First-Name">Notes Date</label>
                                            <input type="Date" id="First-Name" class="form-control" placeholder="Notes Date" name="Written-By">
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                </div>
                <!--  anestesia consultant section -->
                <div class="card">
                    <div class="card-header">
                        <!-- <h4 class="card-title">Anestesiast</h4> -->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="First-Name">Anestesia Consultant</label>
                                    <input type="text" id="First-Name" class="form-control" placeholder="Anestesia Consultant" name="Anestesia-Consultant">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="First-Name">Anestesia Incharge</label>
                                    <input type="text" id="First-Name" class="form-control" placeholder="Anestesia Incharge" name="Anestesia-Incharge">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="First-Name">Anestesia Assistant</label>
                                    <input type="text" id="First-Name" class="form-control" placeholder="Anestesia Assistant" name="Anestesia-Assistant">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <!-- <h4 class="card-title">Next of Kin</h4> -->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="kinName">Pre Anestesia History</label>
                                    <input type="text" id="kinName" class="form-control" placeholder="First Name" name="kinName">
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Current Address</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="HouseNo">House No.</label>
                                    <input type="text" id="HouseNo" class="form-control" placeholder="House No" name="HouseNo">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="Street">Street</label>
                                    <input type="text" id="Street" class="form-control" placeholder="Street" name="Street">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="Sector">Sector / Area</label>
                                    <input type="text" id="Sector" class="form-control" placeholder="Sector" name="Sector">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Address</label>
                                    <input type="text" id="Address" class="form-control" placeholder="Full Address" name="Address">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="Country">Country</label>
                                    <input type="text" id="Country" class="form-control" placeholder="091-xxxxxx" name="Country">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="Province">Province</label>
                                    <input type="text" id="Province" class="form-control" placeholder="Province" name="Province">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">City</label>
                                    <input type="text" id="City" class="form-control" placeholder="City" name="City">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    @endsection