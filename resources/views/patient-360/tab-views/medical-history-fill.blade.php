<div class="accordion-item">
    <h2 class="accordion-header" id="headingMarginThree">
        <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#accordionMarginThree"
            aria-expanded="false"
            aria-controls="accordionMarginThree">
            Medical History
        </button>
    </h2>
    <div
        id="accordionMarginThree"
        class="accordion-collapse collapse"
        aria-labelledby="headingMarginThree"
        data-bs-parent="#accordionMargin">
        <div class="accordion-body">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="mb-1">
                        <label for="Diabetes">Diabetes</label><span class="text-danger">*</span>
                        <span class="B-Coeff" style="float: right;color: deeppink">B-Coeff: <span id="Bccsclass">0</span> </span>
                        <select class="form-control" name="Diabetes" id="Diabetes" >
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
                        <label for="ccsclass">Family History CAD:</label>
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
                        <label for="agnduration">Smoking:</label>
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
                        <label for="Diabetes">Hypercholestrolemia:</label>
                        <select class="form-control" name="Diabetes" id="Diabetes" >
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
                        <label for="ccsclass">Hypothyroidism requiring thyroxine:</label>
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
                        <label for="agnduration">Packs per day:</label>
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
                        <label for="Diabetes">Latest Cholestrol Level Available:</label>
                        <select class="form-control" name="Diabetes" id="Diabetes" >
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
                        <label for="ccsclass">Latest Cholesterol Level (mg/dl):</label>
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
                        <label for="agnduration">Years of Smoking::</label>
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

        </div>
    </div>
</div>

