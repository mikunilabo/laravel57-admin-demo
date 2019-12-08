@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <main class="main">
    @breadcrumb
    @endbreadcrumb

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">Traffic & Sales</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="callout callout-info">
                          <small class="text-muted">New Clients</small>
                          <br>
                          <strong class="h4">9,123</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6">
                        <div class="callout callout-danger">
                          <small class="text-muted">Recuring Clients</small>
                          <br>
                          <strong class="h4">22,643</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <hr class="mt-0">
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Monday</span>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Tuesday</span>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Wednesday</span>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Thursday</span>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Friday</span>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Saturday</span>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Sunday</span>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="callout callout-warning">
                          <small class="text-muted">Pageviews</small>
                          <br>
                          <strong class="h4">78,623</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6">
                        <div class="callout callout-success">
                          <small class="text-muted">Organic</small>
                          <br>
                          <strong class="h4">49,123</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <hr class="mt-0">
                    <div class="progress-group">
                      <div class="progress-group-header">
                        <i class="icon-user progress-group-icon"></i>
                        <div>Male</div>
                        <div class="ml-auto font-weight-bold">43%</div>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group mb-5">
                      <div class="progress-group-header">
                        <i class="icon-user-female progress-group-icon"></i>
                        <div>Female</div>
                        <div class="ml-auto font-weight-bold">37%</div>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group">
                      <div class="progress-group-header align-items-end">
                        <i class="icon-globe progress-group-icon"></i>
                        <div>Organic Search</div>
                        <div class="ml-auto font-weight-bold mr-2">191.235</div>
                        <div class="text-muted small">(56%)</div>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group">
                      <div class="progress-group-header align-items-end">
                        <i class="icon-social-facebook progress-group-icon"></i>
                        <div>Facebook</div>
                        <div class="ml-auto font-weight-bold mr-2">51.223</div>
                        <div class="text-muted small">(15%)</div>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group">
                      <div class="progress-group-header align-items-end">
                        <i class="icon-social-twitter progress-group-icon"></i>
                        <div>Twitter</div>
                        <div class="ml-auto font-weight-bold mr-2">37.564</div>
                        <div class="text-muted small">(11%)</div>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-group">
                      <div class="progress-group-header align-items-end">
                        <i class="icon-social-linkedin progress-group-icon"></i>
                        <div>LinkedIn</div>
                        <div class="ml-auto font-weight-bold mr-2">27.319</div>
                        <div class="text-muted small">(8%)</div>
                      </div>
                      <div class="progress-group-bars">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <br>

                <table id="fifa-table" class="table table-responsive-sm table-hover table-striped {{--table-outline--}} mb-0">
                  <thead class="thead-light">
                    <tr>
                      @foreach (array_keys($rows->first()) as $key)
                          <th class="text-center">{{ $key }}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody id="tbody" class="d-none">
                      @foreach ($rows as $row)
                          <tr>
                              @foreach ($row as $col)
                                  <td class="text-center">{{ $col }}</td>
                              @endforeach
                          </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- /.row-->
      </div>
    </div>
  </main>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript" defer>
      $("#overlay").fadeIn(500);

      var table = $('#fifa-table').DataTable({
        columnDefs: [
          // { targets: 0, sortable: false }
        ],
        displayLength: 20,
        'drawCallback': function () {
          $("#overlay").fadeOut(500);
          document.getElementById('tbody').classList.remove('d-none');
        },
        info: true,
        lengthChange: true,
        lengthMenu: [10, 20, 30, 50],
        order: [
          [0, 'asc'],
        ],
        ordering: true,
        paging: true,
        pagingType: 'full_numbers',
        scrollX: false,
        searching: true,
        // select: {
        //   style: 'multi',
        //   selector: 'tr',
        //   blurable: false,
        // },
        stateSave: false,
        responsive: true
      });
    </script>
@endsection
