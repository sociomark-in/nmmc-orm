<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to the NMMC ORM</h4>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-xl col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row m-0 h-100 align-items-center">
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between">
                    <div class="">
                      <div class="mb-3">
                        <h4 class="mb-1">Welcome Back, Hemant!</h4>
                        <p class="tx-18">You have <a href=""><u>4 meetings</u></a> today,</p>
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
        <div class="col-xl col-lg-4 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">All Complaints</h6>
                <div>
                  <a class="btn p-0 btn-icon-text text-dark" href="">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3 class="mb-2">3,897</h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>+3.3%</span>
                      <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl col-lg-4 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Department Complaints</h6>
                <div>
                  <a class="btn p-0 btn-icon-text text-dark" href="">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4 class="mb-2">3,897</h4>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>+3.3%</span>
                      <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl col-lg-4 col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Ward Complaints</h6>
                <div>
                  <a class="btn p-0 btn-icon-text text-dark" href="">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h3 class="mb-2">3,897</h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>+3.3%</span>
                      <i data-feather="arrow-up" class="icon-sm mb-1"></i>
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
    <div class="col-lg-7 col-xl-9 grid-margin stretch-card">
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
                'source' => "",
              ],
              'events' => null
            ];
            
            $this->load->view('components/theme/widgets/charts/barstackchart', $data); 
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-xl-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline">
            <h6 class="card-title mb-0">Complaint Chart</h6>
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
          <!-- <div id="storageChart"></div> -->
          <div id="apexDonut"></div>
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