<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>


<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to the NMMC ORM</h4>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-xl-3 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row m-0 h-100 align-items-center">
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between">
                    <div class="">
                      <div class="mb-3">
                        <h4 class="mb-1">Welcome Back!</h4>
                      </div>
                      <a href="" class="btn btn-primary btn-icon-text">View Profile<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                    </div>
                    <div class="">
                      <img class="wd-50 ht-50 rounded-circle" src="https://ui-avatars.com/api/?name=<?= $session['appuser']['username'] ?>" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">All</h6>
                <div>
                  <a class="btn p-0 btn-icon-text text-dark" href="<?= base_url("complaints/all-tickets") ?>">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3 class="mb-2"><?= count($page["tickets_all"]) ?></h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-dark">
                      Overall Complaints
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Unresolved</h6>
                <div>
                  <a class="btn p-0 btn-icon-text text-dark" href="<?= base_url("complaints/all-tickets") ?>">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3 class="mb-2 text-danger"><?= $page['tickets_count']['unresolved'] ?></h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-dark">
                      Overall Complaints
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Resolved</h6>
                <div>
                  <a class="btn p-0 btn-icon-text text-dark" href="<?= base_url("complaints/all-tickets") ?>">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3 class="mb-2 text-success"><?= $page['tickets_count']['resolved'] ?></h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-dark">
                      Overall Complaints
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Work In Progress</h6>
                <div>
                  <a class="btn p-0 btn-icon-text text-dark" href="<?= base_url("complaints/all-tickets") ?>">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3 class="mb-2 text-warning"><?= $page['tickets_count']['in_process'] ?></h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-dark">
                      Overall Complaints
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-xl-3 col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <div class="">
              <h6 class="card-title mb-0">Complaints (By Source)</h6>
            </div>
            <div class="">
              <ul class="nav nav-pills g-1" id="sourceTabOption" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1 active" id="sourceData-tab" data-bs-toggle="tab" data-bs-target="#sourceData-tab-pane" type="button" role="tab" aria-controls="sourceData-tab-pane" aria-selected="true"><i class="link-icon p-1" data-feather="table"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1" id="sourceChart-tab" data-bs-toggle="tab" data-bs-target="#sourceChart-tab-pane" type="button" role="tab" aria-controls="sourceChart-tab-pane" aria-selected="false"><i class="link-icon p-1" data-feather="pie-chart"></i></button>
                </li>
            </div>
          </div>
          <div class="">
            <div class="row">
              <div class="col-12">
                <div class="tab-content" id="sourceTabOptionContent">
                  <div class="tab-pane fade show active" id="sourceData-tab-pane" role="tabpanel" aria-labelledby="sourceData-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12">
                        <table id="sourcedataTable" class="table">
                          <thead>
                            <tr>
                              <th>Source</th>
                              <th>Complaints</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Facebook</td>
                              <td><?= $page['tickets_count']['facebook'] ?></td>
                            </tr>
                            <tr>
                              <td>Instagram</td>
                              <td><?= $page['tickets_count']['instagram'] ?></td>
                            </tr>
                            <tr>
                              <td>Twitter</td>
                              <td><?= $page['tickets_count']['twitter'] ?></td>
                            </tr>
                            <tr>
                              <td>YouTube</td>
                              <td><?= $page['tickets_count']['youtube'] ??= 0 ?></td>
                            </tr>
                            <tr>
                              <td>LinkedIn</td>
                              <td><?= $page['tickets_count']['linkedin'] ??= 0 ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <script>
                          new DataTable('#sourcedataTable', {
                            // dom: 'ftip',
                            dom: 'Bfrtip',
                            pageLength: 5,
                            buttons: ['excel']
                          });
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sourceChart-tab-pane" role="tabpanel" aria-labelledby="sourceChart-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12">
                        <?php
                        $data = [
                          'height' => 300,
                          'id' => "apexSourcePie",
                          'source' => [
                            'url' => "api/v2/tickets/count?by=source&months=12&type=pie",
                            'static' => [
                              'labels' => ['Facebook', 'Instagram', 'Twitter', 'YouTube', 'LinkedIn'],
                              'data' => [
                                $page['tickets_count']['facebook'],
                                $page['tickets_count']['instagram'],
                                $page['tickets_count']['twitter'],
                                $page['tickets_count']['youtube'],
                                $page['tickets_count']['linkedin'],
                              ],
                            ]
                          ],
                        ];
                        $this->load->view('components/theme/widgets/charts/piechart', $data); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <div class="">
              <h6 class="card-title mb-0">All Wards</h6>
            </div>
            <div class="">
              <ul class="nav nav-pills g-1" id="wardTabOption" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1 active" id="wardData-tab" data-bs-toggle="tab" data-bs-target="#wardData-tab-pane" type="button" role="tab" aria-controls="wardData-tab-pane" aria-selected="true"><i class="link-icon p-1" data-feather="table"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1" id="wardChart-tab" data-bs-toggle="tab" data-bs-target="#wardChart-tab-pane" type="button" role="tab" aria-controls="wardChart-tab-pane" aria-selected="false"><i class="link-icon p-1" data-feather="pie-chart"></i></button>
                </li>
            </div>
          </div>
          <div class="">
            <div class="row">
              <div class="col-12">
                <div class="tab-content" id="wardTabOptionContent">
                  <div class="tab-pane fade show active" id="wardData-tab-pane" role="tabpanel" aria-labelledby="wardData-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12">
                        <table id="wardsDataTable" class="table table-striped">
                          <thead>
                            <tr>
                              <th>Ward Name</th>
                              <th>Count</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            foreach ($this->data['page']['tickets_count']['wardwise'] as $key => $ward) : ?>
                              <tr>
                                <td>
                                  <a href="<?= base_url('ward/' . $ward['ward']['slug']) ?>"><?= $ward['ward']['name'] ?></a>
                                </td>
                                <td><?= $ward['count'] ?></td>
                              </tr>
                            <?php endforeach ?>
                          </tbody>
                        </table>
                        <script>
                          new DataTable('#wardsDataTable', {
                            // dom: 'ftip',
                            dom: 'Bfrtip',
                            pageLength: 5,
                            buttons: ['excel']
                          });
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="wardChart-tab-pane" role="tabpanel" aria-labelledby="wardChart-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12">
                        <?php
                        // $data = [
                        //   'height' => 300,
                        //   'id' => "apexWardPie",
                        //   'source' => [
                        //     'url' => "api/v2/tickets/count?by=ward&months=12&type=pie",
                        //   ],
                        // ];
                        // $this->load->view('components/theme/widgets/charts/piechart', $data); 
                        ?>
                      </div>
                      <div class="col-12">
                        <?php
                        $data = [
                          'id' => "apexWardChart",
                          'source' => [
                            'url' => "api/v2/tickets/count?by=ward&months=12&type=bar",
                          ],
                          'events' => ['dataPointSelection' => [
                            'url' => "api/v2/ward/get?columns[]=slug",
                            'redirect' => "ward/(:any)"
                          ]]
                        ];
                        $this->load->view('components/theme/widgets/charts/barchart', $data);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-lg-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline">
            <h6 class="card-title mb-0">Sentiment Analysis</h6>
            <div class="">
              <ul class="nav nav-pills g-1" id="sentimentTabOption" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1 active" id="sentimentData-tab" data-bs-toggle="tab" data-bs-target="#sentimentData-tab-pane" type="button" role="tab" aria-controls="sentimentData-tab-pane" aria-selected="true"><i class="link-icon p-1" data-feather="table"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1" id="sentimentChart-tab" data-bs-toggle="tab" data-bs-target="#sentimentChart-tab-pane" type="button" role="tab" aria-controls="sentimentChart-tab-pane" aria-selected="false"><i class="link-icon p-1" data-feather="pie-chart"></i></button>
                </li>
            </div>
          </div>
          <div class="">
            <div class="row">
              <div class="col-12">
                <div class="tab-content" id="sentimentTabOptionContent">
                  <div class="tab-pane fade show active" id="sentimentData-tab-pane" role="tabpanel" aria-labelledby="sentimentData-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12">
                        <table id="sentimentDataTable" class="table table-striped">
                          <thead>
                            <tr>
                              <th>Source</th>
                              <th>Counts</th>
                            </tr>
                      </div>
                      <tbody>
                        <tr>
                          <td>Positive</td>
                          <td><?= $page['tickets_count']['positive'] ?></td>
                        </tr>
                        <tr>
                          <td>Negative</td>
                          <td><?= $page['tickets_count']['negative'] ??= 0 ?></td>
                        </tr>
                        <tr>
                          <td>Neutral</td>
                          <td><?= $page['tickets_count']['neutral'] ??= 0 ?></td>
                        </tr>
                      </tbody>
                      </table>
                      <script>
                        new DataTable('#segmentDataTable', {
                          // dom: 'ftip',
                          dom: 'Bfrtip',
                          pageLength: 5,
                          buttons: ['excel']
                        });
                      </script>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="sentimentChart-tab-pane" role="tabpanel" aria-labelledby="sentimentChart-tab" tabindex="0">
                  <div class="row">
                    <div class="col-12">
                      <?php
                      $data = [
                        'height' => 300,
                        'id' => "apexSentimentPie",
                        'source' => [
                          'url' => "api/v2/tickets/count?by=sentiment&months=12&type=pie",
                        ],
                      ];
                      $this->load->view('components/theme/widgets/charts/piechart', $data); ?>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-xl-12 col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <div class="">
              <h6 class="card-title mb-0">All Departments</h6>
            </div>
            <div class="">
              <ul class="nav nav-pills g-1" id="departmentTabOption" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1 active" id="departmentData-tab" data-bs-toggle="tab" data-bs-target="#departmentData-tab-pane" type="button" role="tab" aria-controls="departmentData-tab-pane" aria-selected="true"><i class="link-icon p-1" data-feather="table"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link p-2 py-1" id="departmentChart-tab" data-bs-toggle="tab" data-bs-target="#departmentChart-tab-pane" type="button" role="tab" aria-controls="departmentChart-tab-pane" aria-selected="false"><i class="link-icon p-1" data-feather="pie-chart"></i></button>
                </li>
            </div>
          </div>
          <div class="tab-content" id="departmentTabOptionContent">
            <div class="tab-pane fade show active" id="departmentData-tab-pane" role="tabpanel" aria-labelledby="departmentData-tab" tabindex="0">
              <div class="row">
                <div class="col-12">
                  <table id="departmentDataTable" class="table table-striped">
                    <thead>
                      <tr>
                        <th>Department Name</th>
                        <th>Count</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($this->data['page']['tickets_count']['departmentwise'] as $key => $department) : ?>
                        <tr>
                          <td><?= $department['dept']['name'] ?></td>
                          <td><?= $department['count'] ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                  <script>
                    new DataTable('#departmentDataTable', {
                      dom: 'Bfrtip',
                      pageLength: 5,
                      buttons: ['excel']
                    });
                  </script>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="departmentChart-tab-pane" role="tabpanel" aria-labelledby="departmentChart-tab" tabindex="0">
              <div class="row">
                <div class="col-12">
                  <?php
                  $data = [
                    'id' => "apexDepartmentChart",
                    'data' => [
                      'source' => "api/v2/tickets/count?by=status&months=12",
                    ],
                    'events' => ['dataPointSelection' => [
                      'url' => "api/v2/department/get",
                      'redirect' => "department/(:any)"
                    ]]
                  ];
                  $this->load->view('components/theme/widgets/charts/barchart', $data); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <div class="">
            <h6 class="card-title mb-0">All Complaints</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <table id="complaintDataTable" class="table table-striped">
              <thead>
                <tr>
                  <th>Complaint Name</th>
                  <th>Complaint Count</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($this->data['page']['tickets_count']['complaintwise'] as $key => $complaints) : ?>
                  <tr>
                    <td><?= $complaints['complaint']['name'] ?></td>
                    <td><?= $complaints['count'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <script>
              let table = new DataTable('#complaintDataTable', {
                dom: 'Bfrtip',
                pageLength: 5,
                buttons: ['excel']
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <div class="">
            <h6 class="card-title mb-0">All Departments</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <table id="departmentDataTable" class="table table-striped">
              <thead>
                <tr>
                  <th>Department Name</th>
                  <th>Count</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($this->data['page']['tickets_count']['departmentwise'] as $key => $department) : ?>
                  <tr>
                    <td><?= $department['dept']['name'] ?></td>
                    <td><?= $department['count'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <script>
              new DataTable('#departmentDataTable', {
                dom: 'Bfrtip',
                pageLength: 5,
                buttons: ['excel']
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>
<!-- row -->
</div>