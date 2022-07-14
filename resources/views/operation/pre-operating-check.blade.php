@extends('template.header')
@section('section')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Pre Operating check from</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
            </div>
        </div>
    </div>
    <!-- dd mm yy -->
    <div class="content-body">
        <!-- Basic Horizontal form layout section start -->
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <form class="form">
                @include('patient-360.current-patient')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Check list </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6  col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Consent from signed and attached</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="consent" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="consent" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Cardiac Cath data attached</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="cathData" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="cathData" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">X-rays accompanying patient</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="xray" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="xray" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">identification band on and legible</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="band" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="band" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Blood Grouping and crossmatching done</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="crossmatch" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="crossmatch" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Site of Surgery Marked</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="site" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="site" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-12  mt-md-0 mt-1">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">False teeth have caps or crown</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="falseTeeth" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="falseTeeth" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Own teeth have caps of crown</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="ownTeeth" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="ownTeeth" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Patient's make-up and nail varnish removed</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="varnish" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="varnish" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Nose pin, wedding Ring and other Jewelry removed/tapped </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="NosePin" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="NosePin" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Personal clothing/undergarment/stnoved</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="clothing" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="clothing" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <div class="me-1">
                                            <label class="form-label" for="kinName">Pacemaker fitted</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="pacemaker" type="radio" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="pacemaker" type="radio" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 col-lg-6 mt-md-0 mt-1">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <label class="form-label" for="First-Name">Patient NPO From (Hours)</label>
                                        <input type="Number" id="First-Name" class="form-control" placeholder="0" name="Anestesia-Incharge">
                                        <!-- <select class="form-select flex-grow-1" name="Blood-Group">
                                                <option value=""> Dr. Kashif Anwar</option>
                                                <option value="">Dr. Abidullah</option>
                                                <option value="">Dr. Kashif Anwar</option>
                                                <option value="">Dr. Abdul Nasir</option>
                                                <option value="">Dr. RafiUllah</option>
                                            </select> -->
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <label class="form-label" for="First-Name">Pre-op medication given at</label>
                                        <input type="time" id="First-Name" class="form-control" placeholder="Anestesia Incharge" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-md-6 col-6 mt-1">
                                        <label class="form-label" for="First-Name">Bladder empiled at</label>
                                        <input type="time" id="First-Name" class="form-control" placeholder="Anestesia Incharge" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-md-6 col-6 mt-1">
                                        <label class="form-label" for="First-Name">Platelets Arranged (Units)</label>
                                        <input type="Number" id="First-Name" class="form-control" placeholder="0" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-md-6 col-6 mt-1">
                                        <label class="form-label" for="First-Name">Packed Cells Arranged (Units)</label>
                                        <input type="Number" id="First-Name" class="form-control" placeholder="0" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-12 col-md-12 mt-1">
                                        <label class="form-label" for="First-Name">Patients's Allergies if Any</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">

                            <div class="col-12 col-md-12 " style="">
                                <div class="row">
                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">Blood group </label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="Blood group" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">Hemaglobin</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="Hemaglobin" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">Serum K</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="Serum K" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">BUN / Creatinine</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="BUN / Creatinine" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">Glucose</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="Glucose" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">PT</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="PT" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">APTT</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="APTT" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">HBsAg</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="HBsAg" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">Ht./cm</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="Ht./cm" name="Anestesia-Incharge">
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">wt/kg</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="wt/kg" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">B.P</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="B.P" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">Pulse</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="Pulse" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">Temp</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="Temp" name="Anestesia-Incharge">
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="form-label" for="First-Name">R/R</label>
                                        <input type="text" id="First-Name" class="form-control" placeholder="R/R" name="Anestesia-Incharge">
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </form>
    </div>
    @endsection

    <!-- f -->