@extends('template.header')
@section('section')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Cath / Echo Data </h2>
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
            <div class="row">
                <div class="col-12">
                    <form class="form">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Patient Demographics</h4>
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
                                            <label class="form-label" for="First-Name">Operation Date</label>
                                            <input type="Date" id="First-Name" class="form-control" placeholder="Notes Date" name="Written-By">
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
                                    <div class="col-md-2 col-6">
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
                        <h4 class="card-title">Cath / Angio Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Ejection Fraction</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">LVED</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Left main dis</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">PAPS</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Ext of Sig. CAD</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">PAPD</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">PAPW</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CASS</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Anterobasal</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Diaphragmatic</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Anteriolateral</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Posterobasal</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Apical</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="kinName">Total CASS</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value=""> --</option>
                                    <option value="A+">1</option>
                                    <option value="A-">2</option>
                                    <option value="B+">3</option>
                                    <option value="B-">4</option>
                                </select>

                            </div>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Notes</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 col-8">
                                <div class="row">
                                    <div class="col-md-3 col-6  d-flex align-items-center">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="kinName">Apical</label>
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value=""> --</option>
                                            <option value="A+">1</option>
                                            <option value="A-">2</option>
                                            <option value="B+">3</option>
                                            <option value="B-">4</option>
                                        </select>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-4">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="kinName">Posterobasal</label>
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value=""> --</option>
                                            <option value="A+">1</option>
                                            <option value="A-">2</option>
                                            <option value="B+">3</option>
                                            <option value="B-">4</option>
                                        </select>

                                    </div>
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="kinName">Apical</label>
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value=""> --</option>
                                            <option value="A+">1</option>
                                            <option value="A-">2</option>
                                            <option value="B+">3</option>
                                            <option value="B-">4</option>
                                        </select>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="row mt-1">
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