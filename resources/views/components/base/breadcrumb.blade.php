@extends('layouts.app')

@section('title', 'Breadcrumb')

@section('content')
  <main class="main">
    @breadcrumb (['lists' => ['Components' => null, 'Base' => null, 'Breadcrumb' => route('components.base.breadcrumb')]])
    @endbreadcrumb

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i> Bootstrap Breadcrumb
                <div class="card-header-actions">
                  <a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-breadcrumb/" target="_blank">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
                </nav>
                <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                  </ol>
                </nav>
                <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="#">Home</a>
                  <a class="breadcrumb-item" href="#">Library</a>
                  <a class="breadcrumb-item" href="#">Data</a>
                  <span class="breadcrumb-item active">Bootstrap</span>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row-->
      </div>
    </div>
  </main>
@endsection
