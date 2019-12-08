@extends('layouts.app')

@section('title', 'スクレイピングデモ')

@section('content')
  <main class="main">
    @breadcrumb (['lists' => ['Demo' => route('demo.scraping.index')]]) @endbreadcrumb

    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">最新FIFA男子ランキング（{{ $date->format('Y年m月d日更新') }}）</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p>
                      このページにアクセスした時点での最新のFIFAランキング
                      （<a href="https://www.fifa.com/fifa-world-ranking/" target="_blank">FIFA公式サイト <i class="fa fa-external-link"></i></a>）
                      からスクレイピングにより取得した各国データ一覧をサンプル表示しており、CSVダウンロードボタンによりダウンロードして頂けます。
                    </p>
                  </div>

                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="callout callout-danger">
                          <small class="text-muted">1位</small>
                          <br>
                          <strong class="h4">{{ $rows->first()['Team'] ?? null }}</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6">
                        <div class="callout callout-warning">
                          <small class="text-muted">2位</small>
                          <br>
                          <strong class="h4">{{ $rows->slice(1)->first()['Team'] ?? null }}</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="callout callout-success">
                          <small class="text-muted">3位</small>
                          <br>
                          <strong class="h4">{{ $rows->slice(2)->first()['Team'] ?? null }}</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6">
                        <div class="callout callout-info">
@php
    $filtered = $rows->filter(function ($value) {
        return $value['Team'] === 'Japan JPN';
    })->first();
@endphp
                          <small class="text-muted">{{ $filtered['Rnk'] ?? null }}位</small>
                          <br>
                          <strong class="h4">Japan JPN</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->

                <div class="row">
                  <div class="col-md-12 py-1">
                    <a href="{{ route('demo.scraping.download') }}" class="btn btn-block btn-outline-primary">CSVダウンロード</a>
                  </div>
                </div>

                <hr>

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

                <hr class="mt-0">

                <div class="row">
                  <div class="col-md-12">
                    <a href="{{ route('demo.scraping.download') }}" class="btn btn-block btn-outline-primary">CSVダウンロード</a>
                  </div>
                </div>
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
        lengthMenu: [10, 20, 30, 50, 100],
        order: [
          // [0, 'asc'],
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
