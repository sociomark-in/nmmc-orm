<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Departments under NMMC</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a class="btn btn-primary btn-icon-text mb-2 mb-md-0" href="<?= base_url('departments/new') ?>">
                <i class="icon-lg pb-3px" data-feather="plus"></i>
                New Department
            </a>
        </div>
    </div>
    <div class="row flex-grow-1">
        <?php foreach ($page['departments']['list'] as $key => $ward) : ?>
            <div class="col-xxl-2 col-xl-3 col-md-6 col-12 stretch-card grid-margin">
                <a href="<?= base_url('department/' . $ward['slug']) ?>" class="card">
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-auto col-lg-3 col-6">
                                <img src="<?= base_url("assets/") ?>nmmc_icon.jpg" alt="NMMC Ward" height="50">
                            </div>
                            <div class="col-lg col-12">
                                <h3 class="card-title m-0"><?= $ward['name'] ?></h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>