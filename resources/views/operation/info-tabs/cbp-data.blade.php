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