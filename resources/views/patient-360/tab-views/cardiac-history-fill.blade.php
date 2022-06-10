<div class="accordion-item">
    <h2 class="accordion-header" id="headingMarginOne">
        <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#accordionMarginOne"
            aria-expanded="false"
            aria-controls="accordionMarginOne"
        >
            Cardiac History
        </button>
    </h2>
    <div
        id="accordionMarginOne"
        class="accordion-collapse collapse"
        aria-labelledby="headingMarginOne"
        data-bs-parent="#accordionMargin">
        <div class="accordion-body">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="agnduration">Angina Duration:</label>
                        <select class="form-control" name="agnduration" id="agnduration" >
                            <option value="Asymptomatic">Asymptomatic</option>
                            <option value="< 1 Week">&lt; 1 Week</option>
                            <option value="1-6 Weeks">1-6 Weeks</option>
                            <option value="3-6 Months">3-6 Months</option>
                            <option value="6-12 Weeks">6-12 Weeks</option>
                            <option value="6-12 Months">6-12 Months</option>
                            <option value="1-5 Years">1-5 Years</option>
                            <option value="5-10 Years">5-10 Years</option>
                            <option value="> 10 Years">&gt; 10 Years</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="ccsclass">CCS class:<span class="text-danger">*</span> </label>
                        <span class="B-Coeff" style="float: right;color: deeppink">B-Coeff: <span id="Bccsclass">0</span> </span>
                        <select class="form-control" name="ccsclass" id="ccsclass" onchange="SetCcsCoeff(this.value)">
                            <option value="Class-I">Class-I</option>
                            <option value="Class-II">Class-II</option>
                            <option value="Class-III">Class-III</option>
                            <option value="Class-IV">Class-IV</option>
                            <option value="Class-IVb">Class-IVb</option>
                            <option value="Class-IVc">Class-IVc</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="agnduration">Angina Duration:</label>
                        <select class="form-control" name="agnduration" id="agnduration" >
                            <option value="Asymptomatic">Asymptomatic</option>
                            <option value="< 1 Week">&lt; 1 Week</option>
                            <option value="1-6 Weeks">1-6 Weeks</option>
                            <option value="3-6 Months">3-6 Months</option>
                            <option value="6-12 Weeks">6-12 Weeks</option>
                            <option value="6-12 Months">6-12 Months</option>
                            <option value="1-5 Years">1-5 Years</option>
                            <option value="5-10 Years">5-10 Years</option>
                            <option value="> 10 Years">&gt; 10 Years</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <div class="form-group">
                            <label for="nyhaclass">NYHA class:</label>
                            <select class="form-control" name="nyhaclass" id="nyhaclass" onchange="SetNyhaCoeff(this.value,'Bnyha')">
                                <option value="Class-I">Class-I</option>
                                <option value="Class-II">Class-II</option>
                                <option value="Class-III">Class-III</option>
                                <option value="Class-IV">Class-IV</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="congcardfaliure">Left Ventricular Dysfunction</label>
                        <select class="form-control" name="congcardfaliure" id="congcardfaliure" onchange="SetLeftVentricular(this.value,'BLeftVentricular')">
                            <option value="Nil-Mild (EF > 50%)">Nil-Mild (EF &gt; 50%)</option>
                            <option value="Moderate (EF 31-50%)">Moderate (EF 31-50%)</option>
                            <option value="Severe (EF 21-30%)">Severe (EF 21-30%)</option>
                            <option value="Very Severe (EF 20% or less)">Very Severe (EF 20% or less)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="hypertension">Hypertension:</label>
                        <select class="form-control" name="hypertension" id="hypertension">
                            <option value="No">No</option>
                            <option value="Controlled on medication">Controlled on medication</option>
                            <option value="Uncontrolled">Uncontrolled</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="card" style="box-shadow: 0 4px 24px 0 rgb(34 41 47 / 8%) !important;">
                        <div class="card-header">
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="historyofArrythima">
                                <label class="card-title form-check-label" for="historyofArrythima">History of Arrythima</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="a-fib" value="checked" checked="">
                                                <label class="form-check-label" for="a-fib">A-Fib</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="vent-arrhy" value="checked" checked="">
                                                <label class="form-check-label" for="vent-arrhy">Vent Arrhy</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="hypertension">AV.Block:</label>
                                        <select class="form-control" name="hypertension" id="avblock">
                                            <option value="No">No</option>
                                            <option value="Controlled on medication">Controlled on medication</option>
                                            <option value="Uncontrolled">Uncontrolled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="hypertension">BBB.:</label>
                                        <select class="form-control" name="hypertension" id="bbb">
                                            <option value="No">No</option>
                                            <option value="Controlled on medication">Controlled on medication</option>
                                            <option value="Uncontrolled">Uncontrolled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="hypertension">Rheumatic Fever:</label>
                                <select class="form-control" name="hypertension" id="hypertension">
                                    <option value="No">No</option>
                                    <option value="Controlled on medication">Controlled on medication</option>
                                    <option value="Uncontrolled">Uncontrolled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="hypertension">Pulmonary Hypertension:</label>
                                <span class="text-danger">*</span>
                                <span class="B-Coeff" style="float: right;color: deeppink">B-Coeff: 0</span>
                                <select class="form-control" name="hypertension" id="hypertension">
                                    <option value="No">No</option>
                                    <option value="Controlled on medication">Controlled on medication</option>
                                    <option value="Uncontrolled">Uncontrolled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="hypertension">Prev "Q Wave" MI's:</label>
                                    <select class="form-control" name="hypertension" id="hypertension">
                                        <option value="None">No</option>
                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                        <option value="Unknown">Unknown</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="MIValue">(If Yes) No of Q Wave Infarcts:</label>
                                    <input placeholder="" class="form-control" data-val="true" data-val-number="The field MIValue must be a number." id="MIValue" name="MIValue" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="MIValue">If <=3 Months Then Date of Last MI</label>
                                    <input placeholder="" class="form-control"  name="MIValue" type="date" value="">
                                    <span class="field-validation-valid" data-valmsg-for="MIValue" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="customSwitch1">
                                <label class="card-title form-check-label" for="customSwitch1">Prev .CV Intervention</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6" style="border-right: 1px solid lightgray">
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">Invasive Int-1:</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">Invasive Int-2:</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">Invasive Int-3:</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">D.O.L Inv.Int</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">Prev "Q Wave" MI's:</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">Prev "Q Wave" MI's:</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">Prev "Q Wave" MI's:</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="hypertension">Prev "Q Wave" MI's:</label>
                                                    <select class="form-control" name="hypertension" id="hypertension">
                                                        <option value="None">No</option>
                                                        <option value="Recent">Yes: Recent (Within 90 days)</option>
                                                        <option value="Old">Yes: Old (&gt;90 days)</option>
                                                        <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
