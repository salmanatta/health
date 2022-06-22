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
                    @include('operation.info-tabs.operation-data')
                    <!-- 2nd item -->
                    @include('operation.info-tabs.coronary-bypass-data')
                    <!-- third item -->
                    @include('operation.info-tabs.valve-arotic-surgery-data')
                    <!-- fourth item -->
                    @include('operation.info-tabs.cbp-data')
                </div>
            </form>
    </div>
    @endsection

    <!-- f -->