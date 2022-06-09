<div class="tab-pane active" id="cardiac-history-fill" role="tabpanel" aria-labelledby="cardiac-history-fill">
    <div class="row">
        <form id="frmCardicHistoryTab1" action="/CardicHistory/Create" class="" method="post" role="form" novalidate="novalidate"><input data-val="true" data-val-number="The field FormState must be a number." id="FormState" name="FormState" type="hidden" value="3">                                <!--===== Start of Form ====-->
            <div class="row">
                <!-- start of row 1-->
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="agnduration">Angina Duration:</label>
                        <select class="form-control" name="agnduration" id="agnduration">
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
                    <div class="form-group">
                        <label for="ccsclass">CCS class:<span class="text-danger">*</span> </label><span class="B-Coeff pull-right">B-Coeff: <span id="Bccsclass">0</span> </span>
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
                    <div class="form-group">
                        <label for="asaclass">ASA class:</label>
                        <select class="form-control" name="asaclass" id="asaclass">
                            <option value="Class-I">Class-I</option>
                            <option value="Class-II">Class-II</option>
                            <option value="Class-III">Class-III</option>
                            <option value="Class-IV">Class-IV</option>
                            <option value="Class-V">Class-V</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="nyhaclass">NYHA class:<span class="text-danger">*</span></label>
                        <span class="B-Coeff pull-right">B-Coeff: <span id="Bnyha">0.2958358</span></span>
                        <select class="form-control" name="nyhaclass" id="nyhaclass" onchange="SetNyhaCoeff(this.value,'Bnyha')">
                            <option value="Class-I">Class-I</option>
                            <option value="Class-II">Class-II</option>
                            <option value="Class-III">Class-III</option>
                            <option value="Class-IV">Class-IV</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="congcardfaliure">Left Ventricular Dysfunction<span class="text-danger">*</span> </label>
                        <span class="B-Coeff pull-right">B-Coeff: <span id="BLeftVentricular">0</span></span>
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
            <br>
            <div class="row">
                <div class="col-md-2 col-lg-2">
                    <b>HISTORY OF ARRYTHMIA</b>
                    <div class="checkbox">
                        <label>
                            <input checked="checked" id="afib" name="afib" type="checkbox" value="true"><input name="afib" type="hidden" value="false">
                            A-Fib
                        </label>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <div class="checkbox">
                        <br>
                        <label>
                            <input id="ventarrh" name="ventarrh" type="checkbox" value="true"><input name="ventarrh" type="hidden" value="false">
                            Vent Arrhy
                        </label>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="avblock">AV.Block:</label>
                        <select class="form-control" name="avblock" id="avblock">
                            <option value="Nil">Nil</option>
                            <option value="1stDegree">1st Degree</option>
                            <option value="2ndDegree:TypeI">2nd Degree: TypeI</option>
                            <option value="2ndDegree:TypeII">2nd Degree: TypeII</option>
                            <option value="3rdDegree">3rd Degree</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="BBB">BBB.:</label>
                        <select class="form-control" name="BBB" id="BBB">
                            <option value="Nil">Nil</option>
                            <option value="RBBB">RBBB</option>
                            <option value="LAHB">LAHB</option>
                            <option value="LPHB">LPHB</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
</div>
