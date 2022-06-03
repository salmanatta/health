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
                                            <label class="form-label" for="city-column">Date of Operation</label>
                                            <!-- <input type="text" id="Age" class="form-control" placeholder="Gender" name="Age"> -->
                                            <input type="date" id="DBO" class="form-control" placeholder="D.O.B" name="DBO">
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
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="cardiac-history-tab-fill" data-bs-toggle="tab" href="#cardiac-history-fill" role="tab" aria-controls="cardiac-history-fill" aria-selected="true">Cardiac History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="medical-history-tab-fill" data-bs-toggle="tab" href="#medical-history-fill" role="tab" aria-controls="medical-history-fill" aria-selected="false">Medical History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="messages-tab-fill" data-bs-toggle="tab" href="#messages-fill" role="tab" aria-controls="messages-fill" aria-selected="false">Pre-Op Medication</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content pt-1">
                                <div class="tab-pane active" id="cardiac-history-fill" role="tabpanel" aria-labelledby="cardiac-history-tab-fill">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Angina Duration</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">Asymptomatic</option>
                                                    <option value="">< 1 Week></option>
                                                    <option value="">1-6 weeks</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">CCS Class</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">Class-I</option>
                                                    <option value="">Class-II</option>
                                                    <option value="">Class-III</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">ASA Class</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">Class-I</option>
                                                    <option value="">Class-II</option>
                                                    <option value="">Class-III</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">NYHA class</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">Class-I</option>
                                                    <option value="">Class-II</option>
                                                    <option value="">Class-III</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Left Ventricular Dysfunction</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">Nil-Mild (EF > 50%)</option>
                                                    <option value="">Moderate (EF 31-50%)</option>
                                                    <option value="">Severe (EF 21-30%)</option>
                                                    <option value="">Very Severe (EF 20% or less)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Hypertension</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">No</option>
                                                    <option value="">Controlled on medication</option>
                                                    <option value="">Uncontrolled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="medical-history-fill" role="tabpanel" aria-labelledby="medical-history-tab-fill">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Diabetes</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="Yes"> Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Family History CAD</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                    <option value="">Unknown</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <div class="mb-1">
                                                <label class="form-label" for="First-Name">Smoking</label>
                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                    <option value="">-- Select --</option>
                                                    <option value="">Ex-Smoker > 8 Weeks</option>
                                                    <option value="">Still Smoking (< 8 Weeks)</option>
                                                    <option value="">No Smoking</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages-fill" role="tabpanel" aria-labelledby="messages-tab-fill">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label for="cardiacmed" class="text-danger">
                                                    <b>Tick if the patient is not on these medications prior to the surgery</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4">
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="betablocker">Beta Blokers</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="calciumant">Calcium-Antagonists</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="diuretics">Diuretics</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="ace1">ACE -1 Inhibitors</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="ace2">ACE -2 Inhibitors</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="aspirin">Asprin</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="dipyridamole">Dipyridmole</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="clopedogril">Clopedgril/Ticlopidine</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="nitrates">Nitrate Oral</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4">
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="digoxin">Digoxin</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="amidarone">Amidarone</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="warfarin">Warfarin</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="thyroxin">Thyroxin</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="steroids">Steroids</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="immunosuppresants">Immunosuppersants</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="oralhypoglacemics">Oral hypogleamics</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="insulin">Insulin</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="antiarrhy">Anti-arrhythmics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4">
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="nsaids">NSAIDS</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="lipidlowthrp">Lipid Lowering Therapy</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="nitratesIV">Nitrates-IV</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="inotropesIV">Inotropes-IV</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="Ranolazine">Ranolazine</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="potassium">Potassium Channel Oppeners</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="Trimetazidine">Trimetazidine</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="AntiBiotics">Antibiotics for endocartids</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="Ivabradine">Ivabradine</label>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label for="Allopurinol">Allopurinol</label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Other Medication</label>
                                                <textarea class="form-control" name="OtherMedication" id="OtherMedication"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
