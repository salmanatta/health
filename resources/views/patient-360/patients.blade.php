@extends('template.header')
@section('section')
<div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Bootstrap Tables</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Table Bootstrap
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
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('new-patient') }}">
                        <span class="align-middle">Add New Patient</span>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Hoverable rows</h4>
      </div>
      <div class="card-body">
        <p class="card-text">
          Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a
          <code class="highlighter-rouge">&lt;tbody&gt;</code>.
        </p>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
          <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular">
                <span class="fw-bold">Angular Project</span>
              </td>
              <td>Peter Charls</td>
              <td>
                <div class="avatar-group">
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Lilian Nenez">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26">
                  </div>
                </div>
              </td>
              <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                      <span>Edit</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/react.svg" class="me-75" height="20" width="20" alt="React">
                <span class="fw-bold">React Project</span>
              </td>
              <td>Ronald Frest</td>
              <td>
                <div class="avatar-group">
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Lilian Nenez">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26">
                  </div>
                </div>
              </td>
              <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                      <span>Edit</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/vuejs.svg" class="me-75" height="20" width="20" alt="Vuejs">
                <span class="fw-bold">Vuejs Project</span>
              </td>
              <td>Jack Obes</td>
              <td>
                <div class="avatar-group">
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Lilian Nenez">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26">
                  </div>
                </div>
              </td>
              <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                      <span>Edit</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/bootstrap.svg" class="me-75" height="20" width="20" alt="Bootstrap">
                <span class="fw-bold">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <div class="avatar-group">
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Lilian Nenez">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26">
                  </div>
                  <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26">
                  </div>
                </div>
              </td>
              <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                      <span>Edit</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                      <span>Delete</span>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Hoverable rows end -->

        </div>
      </div>
@endsection

