<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Types of Complaints</h4>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-6 col-12 grid-margin">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-2">
                                <h6 class="card-title mb-0">All Types</h6>
                            </div>
                            <table class="table table-hover mb-0" id="complaintsDataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($page['data']['complaint_types'] as $key => $type) : ?>
                                        <tr>
                                            <td> <?= $type['name'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                    <script>
                                        let table = new DataTable('#complaintsDataTable', {
                                            dom: 'Bfrtip',
                                            buttons: ['copy', 'excel', 'pdf', 'print'],
                                            order: [
                                                [0, 'asc']
                                            ]
                                        });
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12 grid-margin d-none">
            <div class="row">
                <?= form_open("api/v2/complaint/add", ['id' => ""]) ?>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <label for="name" class="form-label">Name of Complaint</label>
                                        <input id="name" class="form-control" name="name" type="text">
                                        <label id="name-error" class="error" for="name"></label>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                                        <div class="">
                                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Complaint Type</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>