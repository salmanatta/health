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
                <!--  anestesia consultant section -->
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">Cath / Angio Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-md-12 col-6">
                                                <label class="form-label" for="kinName">Ejection Fraction</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">Unknown</option>
                                                    <option value="A+">Good (>50%)</option>
                                                    <option value="A-">Moderate(30-50%)</option>
                                                    <option value="B+">Poor(<30%) </option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <label class="form-label" for="kinName">Left main dis</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">Nil</option>
                                                    <option value="A+">50%</option>
                                                    <option value="A-">51-70%</option>
                                                    <option value="B+">>70% </option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <label class="form-label" for="kinName">Ext of Sig. CAD</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">Nil</option>
                                                    <option value="A+">1-Vessel Dis </option>
                                                    <option value="A+">2-Vessel Dis </option>
                                                    <option value="A+">3-Vessel Dis </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 ">
                                        <div class="row">
                                            <div class="col-md-12 col-6">
                                                <label class="form-label" for="kinName">LVED</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="LVED" name="Written-By">
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <label class="form-label" for="kinName">PAPS</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="PAPS" name="Written-By">
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <label class="form-label" for="kinName">PAPD</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="PAPD" name="Written-By">
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <label class="form-label" for="kinName">PAPW</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="PAPW" name="Written-By">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <div class=" card card-border mt-1">
                                    <div class="card-body">
                                        <div class="row mt-1">
                                            <div class="d-flex">
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label" for="inlineCheckbox1">CASS Performed</label>
                                                    <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">Anterobasal</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="Anterobasal" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">Diaphragmatic</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="Diaphragmatic" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">Anteriolateral</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="Anteriolateral" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">Posterobasal</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="Posterobasal" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">Apical</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="Apical" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">Total CASS</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="Total CASS" name="Written-By">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Echo Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mt-1 align-items-center">
                            <div class="col-md-4 col-6">
                                <div class="d-flex">
                                    <div class="form-check form-check-inline ">
                                        <label class="form-check-label" for="inlineCheckbox1">Echo Performed</label>
                                        <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="First-Name">Echo Date</label>
                                    <input type="Date" id="First-Name" class="form-control" placeholder="Notes Date" name="Written-By">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-2 col-6  d-flex align-items-center">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="inlineCheckbox1">Aortic Dis</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <label class="form-label" for="kinName">Stenosis</label>
                                        <select class="form-select flex-grow-1" name="Stenosis">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <label class="form-label" for="kinName">Regurg</label>
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 col-6">
                                        <label class="form-label" for="kinName">Gradient</label>
                                        <input type="Number" id="First-Name" class="form-control" placeholder="" name="Written-By">
                                    </div>
                                    <div class="col-md-1 col-6">
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="kinName">Pathology</label>
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Nil</option>
                                            <option value="">Rheumatic</option>
                                            <option value="">Congenital</option>
                                            <option value="">Ischemic</option>
                                            <option value="">Marfan's</option>
                                            <option value="">Myx. Deg</option>
                                            <option value="">Calcific</option>
                                            <option value="">Endocarditis</option>
                                            <option value="">Pros. Valve Dy</option>
                                            <option value="">LA Clot</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2 col-6  d-flex align-items-center">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="inlineCheckbox1">Mitral Dis</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <!-- <label class="form-label" for="kinName">Stenosis</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <!-- <label class="form-label" for="kinName">Regurg</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 col-6">
                                        <!-- <label class="form-label" for="kinName">Gradient</label> -->
                                        <input type="Number" id="First-Name" class="form-control" placeholder="" name="Written-By">
                                    </div>
                                    <div class="col-md-1 col-6">
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <!-- <label class="form-label" for="kinName">Pathology</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Nil</option>
                                            <option value="">Rheumatic</option>
                                            <option value="">Congenital</option>
                                            <option value="">Ischemic</option>
                                            <option value="">Marfan's</option>
                                            <option value="">Myx. Deg</option>
                                            <option value="">Calcific</option>
                                            <option value="">Endocarditis</option>
                                            <option value="">Pros. Valve Dy</option>
                                            <option value="">LA Clot</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2 col-6  d-flex align-items-center">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="inlineCheckbox1">Tricuspid Dis</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <!-- <label class="form-label" for="kinName">Stenosis</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <!-- <label class="form-label" for="kinName">Regurg</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 col-6">
                                        <!-- <label class="form-label" for="kinName">Gradient</label> -->
                                        <input type="Number" id="First-Name" class="form-control" placeholder="" name="Written-By">
                                    </div>
                                    <div class="col-md-1 col-6">
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <!-- <label class="form-label" for="kinName">Pathology</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Nil</option>
                                            <option value="">Rheumatic</option>
                                            <option value="">Congenital</option>
                                            <option value="">Ischemic</option>
                                            <option value="">Marfan's</option>
                                            <option value="">Myx. Deg</option>
                                            <option value="">Calcific</option>
                                            <option value="">Endocarditis</option>
                                            <option value="">Pros. Valve Dy</option>
                                            <option value="">LA Clot</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-2 col-6  d-flex align-items-center">
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline ">
                                                <label class="form-check-label" for="inlineCheckbox1">Pulmonary Dis</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <!-- <label class="form-label" for="kinName">Stenosis</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <!-- <label class="form-label" for="kinName">Regurg</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">--Select--</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Sever</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 col-6">
                                        <!-- <label class="form-label" for="kinName">Gradient</label> -->
                                        <input type="Number" id="First-Name" class="form-control" placeholder="" name="Written-By">
                                    </div>
                                    <div class="col-md-1 col-6">
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <!-- <label class="form-label" for="kinName">Pathology</label> -->
                                        <select class="form-select flex-grow-1" name="Blood-Group">

                                            <option value="">--Select--</option>
                                            <option value="">Nil</option>
                                            <option value="">Rheumatic</option>
                                            <option value="">Congenital</option>
                                            <option value="">Ischemic</option>
                                            <option value="">Marfan's</option>
                                            <option value="">Myx. Deg</option>
                                            <option value="">Calcific</option>
                                            <option value="">Endocarditis</option>
                                            <option value="">Pros. Valve Dy</option>
                                            <option value="">LA Clot</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" card card-border mt-1">
                                    <div class="card-body">
                                        <div class="row mt-1">
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">LVIDD</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="LVIDD" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">LVIDS</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="LVIDS" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">LVPW</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="LVPW" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">SEPTUM</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="SEPTUM" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">EF%</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="EF%" name="Written-By">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <label class="form-label" for="kinName">PAP</label>
                                                <input type="Number" id="First-Name" class="form-control" placeholder="PAP" name="Written-By">
                                            </div>
                                        </div>
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
            </form>
    </div>
    @endsection