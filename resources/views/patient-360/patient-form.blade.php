@extends('template.header')
@section('section')
<div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">MR Registration</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Patient 360</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">MR Registration</a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square me-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Horizontal form layout section start -->
<!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <form class="form">
        <div class="card">
        <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">Search MRN</label>
                  <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Patient Demographics</h4>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">Title</label>
                  <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">First Name</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Middle Name</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Last Name</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">CNIC</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Father Name</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">D.O.B</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-2 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Age</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-2 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Gender</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Marital Status</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Husband Name</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Religion</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-2 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Blood Group</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-2 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Nationality</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Passport</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              <div class="col-md-2 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Country</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
              
              <div class="col-md-3 col-6">
                <div class="mb-1">
                  <label class="form-label" for="country-floating">City</label>
                  <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Occupation</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Patient Contact Details</h4>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">Primary Contact</label>
                  <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Secondary Contact</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Landline</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Email Address</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Next of Kin</h4>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">Full Name</label>
                  <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Relationship</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">CNIC</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Current Address</h4>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">House No.</label>
                  <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Street</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Sector / Area</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Address</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">District</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Province</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Country</label>
                  <input type="text" id="last-name-column" class="form-control" placeholder="091-xxxxxx" name="lname-column">
                </div>
              </div>
              <div class="col-12">
                <button type="reset" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
              </div>
            </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</section>
<!-- Basic Floating Label Form section end -->

        </div>
      </div>
@endsection

