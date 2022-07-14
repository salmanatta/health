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
                <div class="accordion accordion-margin" id="accordionMargin">
                @include('physical-therapy.assesment-tabs.Preoperative-learning-Needs')
                <!-- 2nd item -->
                @include('physical-therapy.assesment-tabs.assesments')
                <!-- third item -->
                @include('operation.info-tabs.valve-arotic-surgery-data')
                <!-- fourth item -->
                @include('operation.info-tabs.cbp-data')
            </div>


            </form>
           
    </div>
</div>
@endsection

<!-- f -->