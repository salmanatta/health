@extends('template.header')
@section('section')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Daily Lab Value</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                @include('patient-360.current-patient')
                <div class="accordion accordion-margin" id="accordionMargin">
                     @include('patient-360.tab-views.lab-value-table-fill')
                   
                </div>
            </section>
        </div>
    </div>
@endsection