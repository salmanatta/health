@extends('template.header')
@section('section')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Operation info </h2>
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
                        <h4 class="card-title">Weight and Priority </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12 ">
                                <label class="form-label" for="kinName">Priority Status</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value="">Elective</option>
                                    <option value="A+">Urgent</option>
                                    <option value="A-">Emergency</option>
                                    <option value="B+">Salvage </option>
                                </select>

                            </div>
                            <div class="col-md-6 mt-md-0 col-12  mt-1 ">
                                <label class="form-label" for="kinName">Weight of Surgical Intervention</label>
                                <select class="form-select flex-grow-1" name="Blood-Group">
                                    <option value="">Isolated CABG</option>
                                    <option value="A+">Single Non CABG</option>
                                    <option value="A-">2-Procedures</option>
                                    <option value="B+">3-Procedures</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion accordion-margin" id="accordionMargin">
                    <div class="accordion-item">
                        <h2 class="accordion-header ms-1" id="headingMarginOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginOne" aria-expanded="false" aria-controls="accordionMarginOne">
                                Operation Data
                            </button>
                        </h2>
                        <div id="accordionMarginOne" class="accordion-collapse collapse" aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
                            <div class="accordion-body">
                                <div class="row mx-1">
                                    <div class="col-md-6 col-12">
                                        <label class="form-label" for="First-Name">Access:</label>
                                        <select class="form-select flex-grow-1" name="Blood-Group">
                                            <option value="">Median Sternotomy</option>
                                            <option value="A+">Right Thoracotomy</option>
                                            <option value="A+">Left Thoracotomy</option>
                                            <option value="">Mini Sternotomy</option>
                                            <option value="">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-6"></div>
                                </div>
                                <div class="row  mx-1">
                                    <!-- main left one  -->
                                    <div class="col-md-8 col-12">
                                        <div class="row mt-1">
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6 col-6 ">
                                                                <label class="form-label" for="First-Name">Reason, if not elective</label>
                                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                                    <option value="N.A.">N.A.</option>
                                                                    <option value="HomodynamicInstability">Homodynamic Instability</option>
                                                                    <option value="AcuteEvolvingMI">Acute Evolving MI</option>
                                                                    <option value="PostInfarctMR">Post Infarct MR</option>
                                                                    <option value="Post Infarct VSD">Post Infarct VSD</option>
                                                                    <option value="Mechanical Valve Dysfunction">Mechanical Valve Dysfunction</option>
                                                                    <option value="Angiographic Mishap">Angiographic Mishap</option>
                                                                    <option value="Native/Tissue Valve Failure">Native/Tissue Valve Failure</option>
                                                                    <option value="Unstable Angina">Unstable Angina</option>
                                                                    <option value="Leftmain>50%">Left main &gt; 50 %</option>
                                                                    <option value="RuptAortic/Dissection/Trauma">Rupt Aortic/Dissection/Trauma</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <label class="form-label" for="First-Name">First/Redo surgery</label>
                                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                                    <option value="Ist Operation">Ist Operation</option>
                                                                    <option value="2nd Operation">2nd Operation</option>
                                                                    <option value="3rd Operation">3rd Operation</option>
                                                                    <option value=">=4th Operation">&gt;=4th Operation</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-6 mt-1">
                                                                <label class="form-label" for="First-Name">Reason for Redo</label>
                                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                                    <option value="N.A.">N.A.</option>
                                                                    <option value="ProgressionofCAD">Progression of CAD</option>
                                                                    <option value="Prev.IMAgraftocclusion">Prev.IMA graft occlusion</option>
                                                                    <option value="Prev.Vaingraftocclusion">Prev.Vain graft occlusion</option>
                                                                    <option value="Prev.Rad..graftocculsion">Prev.Rad..graft occulsion</option>
                                                                    <option value="Otherart.graftocclusion">Other art.graft occlusion</option>
                                                                    <option value="Prev.CongenitalRepair">Prev.Congenital Repair</option>
                                                                    <option value="Progressionvalvedisease">Progression valve disease</option>
                                                                    <option value="Failedvalverepair">Failed valve repair</option>
                                                                    <option value="Prosthetic valve endocartidis">Prosthetic valve endocartidis</option>
                                                                    <option value="Prosthetic valve dysfunction">Prosthetic valve dysfunction</option>
                                                                    <option value="Prosthetic valve thrombosis">Prosthetic valve thrombosis</option>
                                                                    <option value="Para-valvularleak">Para-valvular leak</option>
                                                                    <option value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-6 mt-1">
                                                                <label class="form-label" for="First-Name">CABG Proc</label>
                                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                                    <option value="N.A.">N.A.</option>
                                                                    <option value="CABG (Conventional)">CABG (Conventional)</option>
                                                                    <option value="OPCAB">OPCAB</option>
                                                                    <option value="CABG (On-pump beating)">CABG (On-pump beating)</option>
                                                                    <option value="MIDCAB">MIDCAB</option>
                                                                    <option value="MIDCAB(Robotic)">MIDCAB(Robotic)</option>
                                                                    <option value="HybridRevascularization">Hybrid Revascularization</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-6 mt-1">
                                                                <label class="form-label" for="First-Name">Valve Surg</label>
                                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                                    <option value="N.A.">N.A.</option>
                                                                    <option value="Mitral">Mitral</option>
                                                                    <option value="Aortic">Aortic</option>
                                                                    <option value="Tricuspid">Tricuspid</option>
                                                                    <option value="Pulmonary">Pulmonary</option>
                                                                    <option value="Mitral + Aortic">Mitral + Aortic</option>
                                                                    <option value="Mitral + Tricuspid">Mitral + Tricuspid</option>
                                                                    <option value="Mitral + Aortic + Tricuspid">Mitral + Aortic + Tricuspid</option>
                                                                    <option value="Other combinations">Other combinations</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-6 mt-1">
                                                                <label class="form-label" for="First-Name">Congenital Surgery</label>
                                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                                    <option value="N.A.">N.A.</option>
                                                                    <option value="PDA Closure">PDA Closure</option>
                                                                    <option value="VSD Repair">VSD Repair</option>
                                                                    <option value="ASD Repair">ASD Repair</option>
                                                                    <option value="PA Banding">PA Banding</option>
                                                                    <option value="AVSD Repair">AVSD Repair</option>
                                                                    <option value="Pulmonary Valvotomy">Pulmonary Valvotomy</option>
                                                                    <option value="Repair of Fallot's Tetrology">Repair of Fallot's Tetrology</option>
                                                                    <option value="Glenn's Shunt">Glenn's Shunt</option>
                                                                    <option value="Fontan's Operation">Fontan's Operation</option>
                                                                    <option value="BT Shunt">BT Shunt</option>
                                                                    <option value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-6 mt-1">
                                                                <label class="form-label" for="First-Name">Aortic Surgery</label>
                                                                <select class="form-select flex-grow-1" name="Blood-Group">
                                                                    <option value="N.A.">N.A.</option>
                                                                    <option value="Bental's Operation">Bental's Operation</option>
                                                                    <option value="Cabrol's Operation">Cabrol's Operation</option>
                                                                    <option value="TyroneDavid'sOperation">Tyrone David's Operation</option>
                                                                    <option value="Rep. of Ascend Aorta">Rep. of Ascend Aorta</option>
                                                                    <option value="Rep. of Ascend &amp; Arch of Aorta">Rep. of Ascend &amp; Arch of Aorta</option>
                                                                    <option value="Rep.ofArchofAorta">Rep.of Arch of Aorta</option>
                                                                    <option value="Rep.ofArch&amp;DescAorta">Rep.of Arch &amp; Desc Aorta </option>
                                                                    <option value="Rep. of Desc Thoracic Aorta">Rep. of Desc Thoracic Aorta</option>
                                                                    <option value="Rep.ofThoraco-abdominalAorta">Rep.of Thoraco-abdominal Aorta</option>
                                                                    <option value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- main right one -->
                                    <div class="col-md-4 col-12 mt-1">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="h4 card-title">Closure</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mt-1 ">
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label" for="inlineCheckbox1">Percaridium Closed</label>
                                                                <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 mt-1 ">
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label" for="inlineCheckbox1">Med Drain</label>
                                                                <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 mt-1 ">
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label" for="inlineCheckbox1">Pericrad Drain</label>
                                                                <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 mt-1 ">
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label" for="inlineCheckbox1">L.pleur Drain</label>
                                                                <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 mt-1 ">
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label" for="inlineCheckbox1">R.pleur Drain</label>
                                                                <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 mt-1 ">
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label" for="inlineCheckbox1">LA Line</label>
                                                                <input class="form-check-input me-1" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 mt-1 ">
                                                        <label class="form-label" for="First-Name">Pacing Wires</label>
                                                        <select class="form-select flex-grow-1 " name="Stenosis">
                                                            <option value="Nil">Nil</option>
                                                            <option value="Single RV">Single RV</option>
                                                            <option value="Double RV">Double RV</option>
                                                            <option value="Single LV">Single LV</option>
                                                            <option value="Double LV">Double LV</option>
                                                            <option value="Single RA">Single RA</option>
                                                            <option value="Double RA">Double RA</option>
                                                            <option value="Double RA &amp; Double RV">Double RA &amp; Double RV</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-1 pb-1">
                                    <div class="col">
                                        <label class="form-label" for="First-Name">Others</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                </div>
                                <div class="row my-1 pb-1 me-1">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-success waves-effect waves-float waves-light me-1" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Save
                                        </button>
                                        <button class="btn btn-danger waves-effect waves-float waves-light mx-0" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Exit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 2nd item -->
                    <div class="accordion-item">
                        <h2 class="accordion-header ms-1" id="headingMarginTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginTwo" aria-expanded="false" aria-controls="accordionMarginOne">
                                Coronary Bypass data
                            </button>
                        </h2>
                        <div id="accordionMarginTwo" class="accordion-collapse collapse" aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
                            <div class="accordion-body mx-1">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <table class="table d-block d-xl-table" style="overflow: auto;white-space:nowrap;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Graft No.</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Conary Vessel</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Conduit</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Distal Dis</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Endart</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">PI</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Flow </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1">1st</label>
                                                                <input class="form-check-input 1st" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 1st-data" name="cornary_vessel">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LAD (px)">LAD (px)</option>
                                                            <option value="LAD (mid)">LAD (mid)</option>
                                                            <option value="LAD (distal)">LAD (distal)</option>
                                                            <option value="Ramus Intermedius">Ramus Intermedius</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="OM1">OM1</option>
                                                            <option value="OM2">OM2</option>
                                                            <option value="OM3">OM3</option>
                                                            <option value="PDA (Cx)">PDA (Cx)</option>
                                                            <option value="RCA (px)">RCA (px)</option>
                                                            <option value="RCA (mid)">RCA (mid)</option>
                                                            <option value="RCA (distal)">RCA (distal)</option>
                                                            <option value="Right Marginal">Right Marginal</option>
                                                            <option value="PDA (RCA)">PDA (RCA)</option>
                                                            <option value="PLV (RCA)">PLV (RCA)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 1st-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LIMA">LIMA</option>
                                                            <option value="RIMA">RIMA</option>
                                                            <option value="Radial Artery (L)">Radial Artery (L)</option>
                                                            <option value="RadialArtery(R)">RadialArtery(R)</option>
                                                            <option value="Free IMA">Free IMA</option>
                                                            <option value="Gastro-epidloic">Gastro-epidloic</option>
                                                            <option value="Saphenous Vein (Short)">Saphenous Vein (Short)</option>
                                                            <option value="Saphenous Vein (Long)">Saphenous Vein (Long)</option>
                                                            <option value="Other(Ar.)">Other(Ar.)</option>
                                                            <option value="Other(Vein)">Other(Vein)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 1st-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Mild">Mild</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Severe">Severe</option>

                                                        </select></td>
                                                    <td>
                                                        <select class="form-select flex-grow-1 1st-data" name="Blood-Group">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl1" class="form-control 1st-data " placeholder="Pl1" name="pl1">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="flow1" class="form-control 1st-data" placeholder="flow1" name="flow1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1">2nd</label>
                                                                <input class="form-check-input 2nd" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 2nd-data" name="Stenosis">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LAD (px)">LAD (px)</option>
                                                            <option value="LAD (mid)">LAD (mid)</option>
                                                            <option value="LAD (distal)">LAD (distal)</option>
                                                            <option value="Ramus Intermedius">Ramus Intermedius</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="OM1">OM1</option>
                                                            <option value="OM2">OM2</option>
                                                            <option value="OM3">OM3</option>
                                                            <option value="PDA (Cx)">PDA (Cx)</option>
                                                            <option value="RCA (px)">RCA (px)</option>
                                                            <option value="RCA (mid)">RCA (mid)</option>
                                                            <option value="RCA (distal)">RCA (distal)</option>
                                                            <option value="Right Marginal">Right Marginal</option>
                                                            <option value="PDA (RCA)">PDA (RCA)</option>
                                                            <option value="PLV (RCA)">PLV (RCA)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 2nd-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LIMA">LIMA</option>
                                                            <option value="RIMA">RIMA</option>
                                                            <option value="Radial Artery (L)">Radial Artery (L)</option>
                                                            <option value="RadialArtery(R)">RadialArtery(R)</option>
                                                            <option value="Free IMA">Free IMA</option>
                                                            <option value="Gastro-epidloic">Gastro-epidloic</option>
                                                            <option value="Saphenous Vein (Short)">Saphenous Vein (Short)</option>
                                                            <option value="Saphenous Vein (Long)">Saphenous Vein (Long)</option>
                                                            <option value="Other(Ar.)">Other(Ar.)</option>
                                                            <option value="Other(Vein)">Other(Vein)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 2nd-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Mild">Mild</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Severe">Severe</option>

                                                        </select></td>
                                                    <td>
                                                        <select class="form-select flex-grow-1 2nd-data" name="Blood-Group">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl2" class="form-control 2nd-data" placeholder="Pl2" name="pl2">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="flow2" class="form-control 2nd-data" placeholder="flow2" name="flow2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1">3rd</label>
                                                                <input class="form-check-input 3rd" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 3rd-data" name="Stenosis">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LAD (px)">LAD (px)</option>
                                                            <option value="LAD (mid)">LAD (mid)</option>
                                                            <option value="LAD (distal)">LAD (distal)</option>
                                                            <option value="Ramus Intermedius">Ramus Intermedius</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="OM1">OM1</option>
                                                            <option value="OM2">OM2</option>
                                                            <option value="OM3">OM3</option>
                                                            <option value="PDA (Cx)">PDA (Cx)</option>
                                                            <option value="RCA (px)">RCA (px)</option>
                                                            <option value="RCA (mid)">RCA (mid)</option>
                                                            <option value="RCA (distal)">RCA (distal)</option>
                                                            <option value="Right Marginal">Right Marginal</option>
                                                            <option value="PDA (RCA)">PDA (RCA)</option>
                                                            <option value="PLV (RCA)">PLV (RCA)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 3rd-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LIMA">LIMA</option>
                                                            <option value="RIMA">RIMA</option>
                                                            <option value="Radial Artery (L)">Radial Artery (L)</option>
                                                            <option value="RadialArtery(R)">RadialArtery(R)</option>
                                                            <option value="Free IMA">Free IMA</option>
                                                            <option value="Gastro-epidloic">Gastro-epidloic</option>
                                                            <option value="Saphenous Vein (Short)">Saphenous Vein (Short)</option>
                                                            <option value="Saphenous Vein (Long)">Saphenous Vein (Long)</option>
                                                            <option value="Other(Ar.)">Other(Ar.)</option>
                                                            <option value="Other(Vein)">Other(Vein)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 3rd-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Mild">Mild</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Severe">Severe</option>

                                                        </select></td>
                                                    <td>
                                                        <select class="form-select flex-grow-1 3rd-data" name="Blood-Group">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl3" class="form-control 3rd-data" placeholder="Pl3" name="pl3">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="flow3" class="form-control 3rd-data" placeholder="flow3" name="flow3">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1"> 4th</label>
                                                                <input class="form-check-input 4th" type="checkbox" id="flexSwitchCheckDefault">

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 4th-data" name="Stenosis">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LAD (px)">LAD (px)</option>
                                                            <option value="LAD (mid)">LAD (mid)</option>
                                                            <option value="LAD (distal)">LAD (distal)</option>
                                                            <option value="Ramus Intermedius">Ramus Intermedius</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="OM1">OM1</option>
                                                            <option value="OM2">OM2</option>
                                                            <option value="OM3">OM3</option>
                                                            <option value="PDA (Cx)">PDA (Cx)</option>
                                                            <option value="RCA (px)">RCA (px)</option>
                                                            <option value="RCA (mid)">RCA (mid)</option>
                                                            <option value="RCA (distal)">RCA (distal)</option>
                                                            <option value="Right Marginal">Right Marginal</option>
                                                            <option value="PDA (RCA)">PDA (RCA)</option>
                                                            <option value="PLV (RCA)">PLV (RCA)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 4th-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LIMA">LIMA</option>
                                                            <option value="RIMA">RIMA</option>
                                                            <option value="Radial Artery (L)">Radial Artery (L)</option>
                                                            <option value="RadialArtery(R)">RadialArtery(R)</option>
                                                            <option value="Free IMA">Free IMA</option>
                                                            <option value="Gastro-epidloic">Gastro-epidloic</option>
                                                            <option value="Saphenous Vein (Short)">Saphenous Vein (Short)</option>
                                                            <option value="Saphenous Vein (Long)">Saphenous Vein (Long)</option>
                                                            <option value="Other(Ar.)">Other(Ar.)</option>
                                                            <option value="Other(Vein)">Other(Vein)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 4th-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Mild">Mild</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Severe">Severe</option>

                                                        </select></td>
                                                    <td>
                                                        <select class="form-select flex-grow-1 4th-data" name="Blood-Group">
                                                            <<option value="No">No</option>
                                                                <option value="Yes">Yes</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl4" class="form-control 4th-data" placeholder="Pl4" name="pl4">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="flow4" class="form-control 4th-data" placeholder="flow4" name="flow4">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1"> 5th</label>
                                                                <input class="form-check-input 5th" type="checkbox" id="flexSwitchCheckDefault">

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 5th-data" name="Stenosis">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LAD (px)">LAD (px)</option>
                                                            <option value="LAD (mid)">LAD (mid)</option>
                                                            <option value="LAD (distal)">LAD (distal)</option>
                                                            <option value="Ramus Intermedius">Ramus Intermedius</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="OM1">OM1</option>
                                                            <option value="OM2">OM2</option>
                                                            <option value="OM3">OM3</option>
                                                            <option value="PDA (Cx)">PDA (Cx)</option>
                                                            <option value="RCA (px)">RCA (px)</option>
                                                            <option value="RCA (mid)">RCA (mid)</option>
                                                            <option value="RCA (distal)">RCA (distal)</option>
                                                            <option value="Right Marginal">Right Marginal</option>
                                                            <option value="PDA (RCA)">PDA (RCA)</option>
                                                            <option value="PLV (RCA)">PLV (RCA)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 5th-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LIMA">LIMA</option>
                                                            <option value="RIMA">RIMA</option>
                                                            <option value="Radial Artery (L)">Radial Artery (L)</option>
                                                            <option value="RadialArtery(R)">RadialArtery(R)</option>
                                                            <option value="Free IMA">Free IMA</option>
                                                            <option value="Gastro-epidloic">Gastro-epidloic</option>
                                                            <option value="Saphenous Vein (Short)">Saphenous Vein (Short)</option>
                                                            <option value="Saphenous Vein (Long)">Saphenous Vein (Long)</option>
                                                            <option value="Other(Ar.)">Other(Ar.)</option>
                                                            <option value="Other(Vein)">Other(Vein)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 5th-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Mild">Mild</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Severe">Severe</option>

                                                        </select></td>
                                                    <td>
                                                        <select class="form-select flex-grow-1 5th-data" name="Blood-Group">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl5" class="form-control 5th-data" placeholder="Pl5" name="pl5">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="flow5" class="form-control 5th-data" placeholder="flow5" name="flow5">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1"> 6th</label>
                                                                <input class="form-check-input 6th" type="checkbox" id="flexSwitchCheckDefault">

                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 6th-data" name="Stenosis">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LAD (px)">LAD (px)</option>
                                                            <option value="LAD (mid)">LAD (mid)</option>
                                                            <option value="LAD (distal)">LAD (distal)</option>
                                                            <option value="Ramus Intermedius">Ramus Intermedius</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="OM1">OM1</option>
                                                            <option value="OM2">OM2</option>
                                                            <option value="OM3">OM3</option>
                                                            <option value="PDA (Cx)">PDA (Cx)</option>
                                                            <option value="RCA (px)">RCA (px)</option>
                                                            <option value="RCA (mid)">RCA (mid)</option>
                                                            <option value="RCA (distal)">RCA (distal)</option>
                                                            <option value="Right Marginal">Right Marginal</option>
                                                            <option value="PDA (RCA)">PDA (RCA)</option>
                                                            <option value="PLV (RCA)">PLV (RCA)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 6th-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="LIMA">LIMA</option>
                                                            <option value="RIMA">RIMA</option>
                                                            <option value="Radial Artery (L)">Radial Artery (L)</option>
                                                            <option value="RadialArtery(R)">RadialArtery(R)</option>
                                                            <option value="Free IMA">Free IMA</option>
                                                            <option value="Gastro-epidloic">Gastro-epidloic</option>
                                                            <option value="Saphenous Vein (Short)">Saphenous Vein (Short)</option>
                                                            <option value="Saphenous Vein (Long)">Saphenous Vein (Long)</option>
                                                            <option value="Other(Ar.)">Other(Ar.)</option>
                                                            <option value="Other(Vein)">Other(Vein)</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 6th-data" name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Mild">Mild</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Severe">Severe</option>
                                                        </select></td>
                                                    <td>
                                                        <select class="form-select flex-grow-1 6th-data" name="Blood-Group">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl6" class="form-control 6th-data" placeholder="Pl6" name="pl6">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="flow6" class="form-control 6th-data" placeholder="flow6" name="flow6">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="row my-1 pb-1 ">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-success waves-effect waves-float waves-light me-1" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Save
                                        </button>
                                        <button class="btn btn-danger waves-effect waves-float waves-light mx-0" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Exit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- third item -->
                    <div class="accordion-item">
                        <h2 class="accordion-header ms-1" id="headingMarginThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginThree" aria-expanded="false" aria-controls="accordionMarginOne">
                                Valve/Aortic Surgery Data
                            </button>
                        </h2>
                        <div id="accordionMarginThree" class="accordion-collapse collapse" aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
                            <div class="accordion-body mx-1">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <table class="table d-block d-xl-table" style="overflow: auto;white-space:nowrap;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Valve</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Procedure</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Explant</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Implant</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Type</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Size</th>
                                                    <th class="text-center" style="min-width: 200px;" scope="col">Sr.No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1">Aortic</label>
                                                                <input class="form-check-input aortic-op" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 aortic-op-data" name="cornary_vessel">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Replacement">Replacement</option>
                                                            <option value="Repair">Repair</option>
                                                            <option value="Rep.after attempted">Rep.after attempted</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="form-select flex-grow-1 aortic-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="form-select flex-grow-1 aortic-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="form-select flex-grow-1 aortic-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Mechanical">Mechanical</option>
                                                            <option value="Bioprothesis">Bioprothesis</option>
                                                            <option value="Homograft">Homograft</option>
                                                            <option value="Autograft">Autograft</option>

                                                        </select></td>
                                                    <td>
                                                        <input type="Number" id="pl1" class="form-control aortic-op-data " placeholder="Size" name="Size">

                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl1" class="form-control aortic-op-data " placeholder="Sr.No" name="Sr.NO">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1">Mitral</label>
                                                                <input class="form-check-input mitral-op" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 mitral-op-data" name="Stenosis">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Replacement">Replacement</option>
                                                            <option value="Repair">Repair</option>
                                                            <option value="Rep.after attempted">Rep.after attempted</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 mitral-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 mitral-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>

                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 mitral-op-data " name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Mechanical">Mechanical</option>
                                                            <option value="Bioprothesis">Bioprothesis</option>
                                                            <option value="Homograft">Homograft</option>
                                                            <option value="Autograft">Autograft</option>

                                                        </select></td>
                                                    <td>
                                                        <input type="Number" id="pl1" class="form-control mitral-op-data " placeholder="Size" name="Size">

                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl1" class="form-control mitral-op-data " placeholder="Sr.No" name="Sr.NO">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1">Tricus</label>
                                                                <input class="form-check-input tricus-op" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 tricus-op-data" name="Stenosis">
                                                            <<option value="N.A">N.A</option>
                                                                <option value="Replacement">Replacement</option>
                                                                <option value="Repair">Repair</option>
                                                                <option value="Rep.after attempted">Rep.after attempted</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 tricus-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 tricus-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 tricus-op-data " name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Mechanical">Mechanical</option>
                                                            <option value="Bioprothesis">Bioprothesis</option>
                                                            <option value="Homograft">Homograft</option>
                                                            <option value="Autograft">Autograft</option>
                                                        </select></td>
                                                    <td>
                                                        <input type="Number" id="pl1" class="form-control tricus-op-data " placeholder="Size" name="Size">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl1" class="form-control tricus-op-data " placeholder="Sr.No" name="Sr.NO">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <div class="d-flex">
                                                            <div class="form-check form-check ">
                                                                <label class="form-check-label ms-1" for="inlineCheckbox1">Pulm</label>
                                                                <input class="form-check-input pulm-op" type="checkbox" id="flexSwitchCheckDefault">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td><select class="form-select flex-grow-1 pulm-op-data" name="Stenosis">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Replacement">Replacement</option>
                                                            <option value="Repair">Repair</option>
                                                            <option value="Rep.after attempted">Rep.after attempted</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 pulm-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 pulm-op-data" name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Carbomedics">Carbomedics</option>
                                                            <option value="St.Judes(Mech)">St.Judes(Mech)</option>
                                                            <option value="Sorin(Mech)">Sorin(Mech)</option>
                                                            <option value="Meditronics">Meditronics</option>
                                                            <option value="Bjork-ShileyMonostrut">Bjork-ShileyMonostrut</option>
                                                            <option value="Bjork-ShileyConcavoConvex">Bjork-ShileyConcavoConvex</option>
                                                            <option value="Starr-Edwards">Starr-Edwards</option>
                                                            <option value="Omniscience">Omniscience</option>
                                                            <option value="ATS">ATS</option>
                                                            <option value="Duromedics">Duromedics</option>
                                                            <option value="Medtronic-intact">Medtronic-intact</option>
                                                            <option value="Mtroflow">Mtroflow</option>
                                                            <option value="St.JudeBio">St.JudeBio</option>
                                                            <option value="CE-SAV">CE-SAV</option>
                                                            <option value="CE-Pericardial">CE-Pericardial</option>
                                                            <option value="CE-Porcine">CE-Porcine</option>
                                                            <option value="Hacock">Moderate</option>
                                                            <option value="Ionesu-Shiley">Ionesu-Shiley</option>
                                                            <option value="Cryofile">Cryofile</option>
                                                            <option value="CE-Ring">CE-Ring</option>
                                                            <option value="DuranRing">DuranRing</option>
                                                            <option value="St.JudeRing">St.JudeRing</option>
                                                            <option value="CarpentiereRing">CarpentiereRing</option>
                                                            <option value="On-X">On-X</option>
                                                            <option value="Others">Others</option>
                                                        </select></td>
                                                    <td><select class="form-select flex-grow-1 pulm-op-data " name="Blood-Group">
                                                            <option value="N.A">N.A</option>
                                                            <option value="Mechanical">Mechanical</option>
                                                            <option value="Bioprothesis">Bioprothesis</option>
                                                            <option value="Homograft">Homograft</option>
                                                            <option value="Autograft">Autograft</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="Number" id="pl1" class="form-control pulm-op-data" placeholder="Size" name="Size">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="pl1" class="form-control pulm-op-data " placeholder="Sr.No" name="Sr.NO">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3  col-6">
                                        <label class="form-label" for="First-Name">Aortic Root Engagement. (In case of AVR)</label>
                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                            <option value="N.A">Yes</option>
                                            <option value="Mechanical">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6 col-12">
                                        <div class="card">

                                            <div class="ms-1 mt-1">
                                                <div class="d-flex ms-1">

                                                    <label class="form-check-label" for="inlineCheckbox1"> Aortic Surgery Data</label>
                                                    <!-- <input class="form-check-input me-1" type="checkbox" id="cassCheck" value="option1"> -->
                                                </div>
                                                <!-- <h4 class="card-title">Aortic Surgery Data</h4> -->
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label class="form-label" for="First-Name">Aorta</label>
                                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Asceding">Asceding</option>
                                                            <option value="Descending">Descending</option>
                                                            <option value="Asc+Arch">Asc + Arch</option>
                                                            <option value="Abdominal">Abdominal</option>
                                                            <option value="Desc+Abdominal">Desc + Abdominal</option>
                                                            <option value="SinusofValsava">Sinus of Valsava</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label" for="First-Name">Pathology</label>
                                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Unknown">Unknown</option>
                                                            <option value="Aneurysm">Aneurysm</option>
                                                            <option value="Dissection">Dissection</option>
                                                            <option value="Transection">Transection</option>
                                                            <option value="Coarctation">Coarctation</option>
                                                            <option value="Atheromatous">Atheromatous</option>
                                                            <option value="Marfan's">Marfan's</option>
                                                            <option value="syphillis">syphillis</option>
                                                            <option value="Mycotic">Mycotic</option>
                                                            <option value="Congenital">Congenital</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Aortic Procedure</label>
                                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                                            <option value="N.A.">N.A.</option>
                                                            <option value="Inerpositiontubegraft">Inerposition tube graft</option>
                                                            <option value="Tubegraft+AVR">Tube graft + AVR</option>
                                                            <option value="Root replacement with composite valve graft (Bentall)">Root replacement with composite valve graft (Bentall)</option>
                                                            <option value="Rootreplacementwith">Root replacement with</option>
                                                            <option value="preservationofnativevalve">preservation of native valve</option>
                                                            <option value="Homograft root replace">Homograft root replace</option>
                                                            <option value="RossProcedure">Ross Procedure</option>
                                                            <option value="Partchgraft">Parthch graft</option>
                                                            <option value="Cabrol'Procedure">Cabrol'Procedure</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 col-12 ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex">
                                                    <div class="form-check form-switch ">
                                                        <label class="form-check-label" for="inlineCheckbox1"> DESANDING AROTIC OPERATED</label>
                                                        <input class="form-check-input me-1" type="checkbox" id="DesandingAroticCheck" value="option1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 ">
                                                        <label class="form-label" for="First-Name">Stunt</label>
                                                        <select class="form-select flex-grow-1  DesandingAroticData  " name="Blood-Group">
                                                            <option value="N.A">Yes</option>
                                                            <option value="Mechanical">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-6 ">
                                                        <label class="form-label" for="First-Name">X-Clamp Time Mins</label>
                                                        <input type="Number" id="pl1" class="form-control DesandingAroticData " placeholder="0" name="">
                                                    </div>
                                                    <div class="col-12 col-md-6 mt-1">
                                                        <label class="form-label" for="First-Name">Bypass</label>
                                                        <select class="form-select flex-grow-1  DesandingAroticData " name="Blood-Group">
                                                            <option value="N.A">Yes</option>
                                                            <option value="Mechanical">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-md-6 mt-1">
                                                        <label class="form-label" for="First-Name">Cirrculatory Arrest Time (if applicable) Mins</label>
                                                        <input type="Number" id="pl1" class="form-control DesandingAroticData" placeholder="0" name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-1 pb-1 ">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-success waves-effect waves-float waves-light me-1" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Save
                                        </button>
                                        <button class="btn btn-danger waves-effect waves-float waves-light mx-0" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Exit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fourth item -->
                    <div class="accordion-item">
                        <h2 class="accordion-header ms-1" id="headingMarginFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginFour" aria-expanded="false" aria-controls="accordionMarginOne">
                                CPB Data
                            </button>
                        </h2>
                        <div id="accordionMarginFour" class="accordion-collapse collapse" aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
                            <div class="accordion-body mx-1">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="First-Name">Height</label>
                                        <input type="Number" id="pl1" class="form-control " placeholder="Height" name="pl1">

                                    </div>
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="First-Name">Weight</label>
                                        <input type="Number" id="pl1" class="form-control " placeholder="Weight" name="pl1">

                                    </div>
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="First-Name">BSA (m2:)</label>
                                        <input type="text" id="pl1" class="form-control " placeholder="BSA (m2:)" name="pl1">

                                    </div>
                                    <div class="col-md-3 col-6">
                                        <label class="form-label" for="First-Name">BMI</label>
                                        <input type="text" id="pl1" class="form-control " placeholder="BMI" name="pl1">
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6  col-12">
                                        <div class="card">
                                            <div class="mt-1 ms-1">
                                                <div class="d-flex">
                                                    <div class="form-check form-switch ">
                                                        <label class="form-check-label" for="inlineCheckbox1">CBP USED</label>
                                                        <input class="form-check-input me-1" type="checkbox" id="cbpCheck" value="option1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Types of Canulation</label>
                                                        <select class="form-select flex-grow-1 cbpData " name="Blood-Group">
                                                            <option value="">--Select--</option>
                                                            <option value="Aortic + two stage venous">Aortic + two stage venous</option>
                                                            <option value="Aortic bicaval">Aortic bicaval</option>
                                                            <option value="Femoral Ar. &amp; Vein">Femoral Ar. &amp; Vein</option>
                                                            <option value="Femoral Vein &amp; Aortic">Femoral Vein &amp; Aortic</option>
                                                            <option value="Femroal Ar. &amp; Caval">Femroal Ar. &amp; Caval</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Total CBP Time(Min)</label>
                                                        <input type="Number" id="pl1" class="form-control cbpData " placeholder="0" name="pl1">
                                                    </div>

                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Total Cx time (Min)</label>
                                                        <input type="Number" id="pl1" class="form-control cbpData" placeholder="0" name="pl1">
                                                    </div>
                                                    <div class="col-6 mt-4  ">
                                                        <div class="d-flex">
                                                            <div class="form-check form-check-inline ">
                                                                <label class="form-label" for="First-Name">Arotic Cross Clamp Used</label>
                                                                <input class="form-check-input cbpData" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Lowest Temp</label>
                                                        <input type="Number" id="pl1" class="form-control cbpData" placeholder="0" name="pl1">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="card">
                                            <div class="mt-1 ms-1">
                                                <div class="d-flex">
                                                    <div class="form-check form-switch ">
                                                        <label class="form-check-label" for="inlineCheckbox1">CARDIOPLEGIA USED</label>
                                                        <input class="form-check-input me-1" type="checkbox" id="cardioplegiaCheck" value="option1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 mt-1">
                                                        <label class="form-label " for="First-Name">Type of plegia</label>
                                                        <select class="form-select flex-grow-1 cardioplegiaData  " name="Blood-Group">
                                                            <option value="--Select--">--Select--</option>
                                                            <option value="Crystalloid">Crystalloid</option>
                                                            <option value="Blood">Blood</option>
                                                            <option value="Enriched">Enriched</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Infusion Mode</label>
                                                        <select class="form-select flex-grow-1 cardioplegiaData  " name="Blood-Group">
                                                            <option value="--Select--">--Select--</option>
                                                            <option value="Antegrade">Antegrade</option>
                                                            <option value="Retrograde">Retrograde</option>
                                                            <option value="Both">Both</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Infusion Patern</label>
                                                        <select class="form-select flex-grow-1 cardioplegiaData  " name="Blood-Group">
                                                            <option value="--Select--">--Select--</option>
                                                            <option value="Intermittent">Intermittent</option>
                                                            <option value="Continuous">Continuous</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 mt-1">
                                                        <label class="form-label" for="First-Name">Plegia Temp</label>
                                                        <select class="form-select flex-grow-1  cardioplegiaData " name="Blood-Group">
                                                            <option value="--Select--">--Select--</option>
                                                            <option value="Warm">Warm</option>
                                                            <option value="Tepid">Tepid</option>
                                                            <option value="Cold">Cold</option>
                                                        </select>
                                                    </div>


                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row my-1">
                                    <div class="col-md-3 col-6 mt-1">
                                        <label class="form-label" for="First-Name">Cardiac Venting</label>
                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                            <option value="Nil">Nil</option>
                                            <option value="PA">PA</option>
                                            <option value="LA">LA</option>
                                            <option value="Direct LV">Direct LV</option>
                                            <option value="Aortic Root">Aortic Root</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6 mt-1">
                                        <label class="form-label" for="First-Name">If no Plegia</label>
                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                            <option value="N.A.">N.A.</option>
                                            <option value="BeatingHeartonXC">Beating Heart on XC</option>
                                            <option value="XC Fibrillation">XC Fibrillation</option>
                                            <option value="VFNoXc">VF No Xc</option>
                                            <option value="Coronary Perfusion">Coronary Perfusion</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6 mt-1">
                                        <label class="form-label" for="First-Name">IABP</label>
                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                            <option value="Nil">Nil</option>
                                            <option value="Perop">Perop</option>
                                            <option value="Preop">Preop</option>
                                            <option value="Postop">Postop</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6 mt-1">
                                        <label class="form-label" for="First-Name">Blood Conversion</label>
                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                            <option value="Nil">Nil</option>
                                            <option value="Cellsaver">Cell saver</option>
                                            <option value="Haemofilter">Haemofilter</option>
                                            <option value="Aprotinin">Aprotinin</option>
                                            <option value="TranexemicAcid">Tranexemic Acid</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6 mt-1">
                                        <label class="form-label" for="First-Name">Intropes</label>
                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                            <option value="Nil">Nil</option>
                                            <option value="Mild">Mild</option>
                                            <option value="Moderate">Moderate</option>
                                            <option value="High Dose">High Dose</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6 mt-1">
                                        <label class="form-label" for="First-Name">VAD</label>
                                        <select class="form-select flex-grow-1   " name="Blood-Group">
                                            <option value="Nil">Nil</option>
                                            <option value="LAVAD">LAVAD</option>
                                            <option value="RVAD">RVAD</option>
                                            <option value="BVAD">BVAD</option>
                                            <option value="TAH">TAH</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-1 pb-1 ">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-success waves-effect waves-float waves-light me-1" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Save
                                        </button>
                                        <button class="btn btn-danger waves-effect waves-float waves-light mx-0" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                            Exit
                                        </button>
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