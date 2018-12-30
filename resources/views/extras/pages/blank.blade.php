@extends('layouts.app')

@section('title', 'Blank')

@section('content')
  <main class="main">
    @breadcrumb (['lists' => ['Components' => null, 'Pages' => null, 'Blank' => route('extras.pages.blank')]])
    @endbreadcrumb

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-sm-12 col-xl-6">
            <div class="card">
              <div class="card-header">Blank page</div>
              <div class="card-body">An example of a blank page.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
