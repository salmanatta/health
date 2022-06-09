@extends('template.header')
@section('section')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Cardiac History</h2>
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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Patient Demographics</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Patient MRN</label>
                                                <input type="text" id="First-Name" class="form-control"
                                                       placeholder="Patient MRN" name="Patient-MRN">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="Middle-Name">Patient Name</label>
                                                <input type="text" id="Middle-Name" class="form-control"
                                                       placeholder="Patient Name" name="Patient-Name">
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="Age">Age</label>
                                                <input type="number" id="Age" class="form-control" placeholder="Age"
                                                       name="Age">
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="DMY">DMY</label>
                                                <input type="text" id="Age" class="form-control" placeholder="Age"
                                                       value="Years" name="Age">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="city-column">Date of Operation</label>
                                                <!-- <input type="text" id="Age" class="form-control" placeholder="Gender" name="Age"> -->
                                                <input type="date" id="DBO" class="form-control" placeholder="D.O.B"
                                                       name="DBO">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Primary Consultant</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value=""> Dr. Kashif Anwar</option>
                                                    <option value="">Dr. Abidullah</option>
                                                    <option value="">Dr. Kashif Anwar</option>
                                                    <option value="">Dr. Abdul Nasir</option>
                                                    <option value="">Dr. RafiUllah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Anesthetist</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value=""> Dr. Kashif Anwar</option>
                                                    <option value="">Dr. Abidullah</option>
                                                    <option value="">Dr. Kashif Anwar</option>
                                                    <option value="">Dr. Abdul Nasir</option>
                                                    <option value="">Dr. RafiUllah</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="card">
                        <div class="card-header">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="cardiac-history-tab-fill" data-bs-toggle="tab"
                                       href="#cardiac-history-fill" role="tab" aria-controls="cardiac-history-fill"
                                       aria-selected="true">Cardiac History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="medical-history-tab-fill" data-bs-toggle="tab"
                                       href="#medical-history-fill" role="tab" aria-controls="medical-history-fill"
                                       aria-selected="false">Medical History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pre-op-medication-tab-fill" data-bs-toggle="tab"
                                       href="#pre-op-medication-fill" role="tab" aria-controls="pre-op-medication-fill"
                                       aria-selected="false">Pre-Op Medication</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-1">
                            @include('patient-360.tab-views.cardiac-history-fill')
                            @include('patient-360.tab-views.medical-history-fill')
                            @include('patient-360.tab-views.pre-op-medication-fill')
                        </div>
                </div>
            </section>
        </div>
    </div>
@endsection
