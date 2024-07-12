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
                        <h4 class="mb-1">Welcome Back, Hemant!</h4>
                      </div>
                      <a href="" class="btn btn-primary btn-icon-text">View Profile<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                    </div>
                    <div class="">
                      <img class="wd-50 ht-50 rounded-circle" src="https://ui-avatars.com/api/?name=Hemant+Karekar" alt="">
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
              <h6 class="card-title mb-0">Source</h6>
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
                        <table class="table">
                          <tr>
                            <th>Source</th>
                            <th>Complaints</th>
                          </tr>
                          <tr>
                            <td>Facebook</td>
                            <td>89</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sourceChart-tab-pane" role="tabpanel" aria-labelledby="sourceChart-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12">
                        <?php
                        $data = [
                          'height' => 300,
                          'id' => "apexDonut",
                          'data' => [
                            'source' => "api/v2/tickets/count?by=status&months=12",
                            'static' => [
                              [
                                $page['tickets_count']['unresolved'], $page['tickets_count']['resolved'], $page['tickets_count']['all'], $page['tickets_count']['new'], $page['tickets_count']['in_process'],
                              ]
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
    <div class="col-xl-3 col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <div class="">
              <h6 class="card-title mb-0">All Departments</h6>
            </div>
          </div>
          <div class="">
            <div class="row">
              <div class="col-12">
                <table id="deptDataTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>Ward Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($page['list_factors']['departments'] as $key => $department) : ?>
                      <tr>
                        <td><?= $department['name'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <script>
                  let table = new DataTable('#deptDataTable', {
                    dom: 'ftip',
                    pageLength: 5,
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <div class="">
              <h6 class="card-title mb-0">All Wards</h6>
            </div>
          </div>
          <div class="">
            <div class="row">
              <div class="col-12">
                <table id="wardsDataTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>Ward Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($page['list_factors']['wards'] as $key => $ward) : ?>
                      <tr>
                        <td><?= $ward['name'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <script>
                  new DataTable('#wardsDataTable', {
                    dom: 'ftip',
                    pageLength: 5,
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <div class="">
              <h6 class="card-title mb-0">Sentiment Analysis</h6>
            </div>
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
                        <table class="table">
                          <tr>
                            <th>Sentiment</th>
                            <th>Complaints</th>
                          </tr>
                          <tr>
                            <td>Facebook</td>
                            <td>89</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="sourceChart-tab-pane" role="tabpanel" aria-labelledby="sourceChart-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12">
                        <div id="apexDonut"></div>
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
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-12 d-none grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Monthly Complaints Report</h6>
            <div class="dropdown mb-2">
              <a type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          <!-- <p class="text-muted">Sales are activities related to selling or the number of goods or services sold in a given time period.</p> -->
          <div class="col-12">
            <?php
            $data = [
              'id' => "yearlyReportChart",
              'data' => [
                'source' => "api/v2/tickets/count?by=status&months=12",
              ],
            ];

            $this->load->view('components/theme/widgets/charts/barstackchart', $data);
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-xl-9 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Department Wise Complaints</h6>
            <div class="dropdown mb-2">
              <a type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          <!-- <p class="text-muted">Sales are activities related to selling or the number of goods or services sold in a given time period.</p> -->
          <div class="col-12">
            <?php
            $data = [
              'id' => "apexBarChart",
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
    <div class="col-lg-5 col-xl-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline">
            <h6 class="card-title mb-0">Complaint Chart (By Status)</h6>
            <div class="dropdown mb-2">
              <a type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <?php
              $data = [
                'height' => 300,
                'id' => "apexPieChart",
                'data' => [
                  'source' => "api/v2/tickets/count?by=status&months=12",
                  'static' => [
                    [
                      $page['tickets_count']['unresolved'], $page['tickets_count']['resolved'], $page['tickets_count']['all'], $page['tickets_count']['new'], $page['tickets_count']['in_process'],
                    ]
                  ]
                ],
              ];
              $this->load->view('components/theme/widgets/charts/piechart', $data); ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> <!-- row -->

  <div class="col-lg-5 col-xl-3 grid-margin stretch-card d-none">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Comments</h6>
          <div class="dropdown mb-2">
            <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </a>
          </div>
        </div>
        <div class="row" style="height: 640px; overflow-y:scroll;">
          <?php for ($i = 0; $i < 20; $i++) : ?>
            <a href="javascript:;" class="d-flex align-items-center border-bottom p-2">
              <div class="me-3">
                <img src="https://ui-avatars.com/api/?name=Leonardo+Payne" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="text-body mb-2">Leonardo Payne</h6>
                  <p class="text-muted tx-12">12.30 PM</p>
                </div>
                <p class="text-muted tx-13">Hey! there I'm available...</p>
              </div>
            </a>
          <?php endfor ?>
        </div>
      </div>
    </div>
  </div>
</div>