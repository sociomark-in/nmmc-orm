<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">New Wards under NMMC</h4>
        </div>

    </div>
    <?= form_open("api/v2/ward/add", ['id' => ""]) ?>
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-12 grid-margin">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <div class="row">
                                    <div class="col">
                                        <label for="name" class="form-label">Name of Ward</label>
                                        <input id="name" class="form-control" name="name" type="text">
                                        <label id="name-error" class="error" for="name"></label>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                                        <div class="">
                                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Ward</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-8 col-12 grid-margin">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0" id="leadsDataTable">
                                            <thead>
                                                <tr>
                                                    <th class="pt-0">Name</th>
                                                    <th class="pt-0">Slug</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($wards_list as $key => $wards) : ?>
                                                    <tr>
                                                        <td><a href="<?= base_url('wards/edit/' . $wards['id']) ?>"><?= $wards['name'] ?></a></td>
                                                        <td><a href="<?= base_url('wards/edit/' . $wards['id']) ?>"><?= $wards['slug'] ?></a></td>
                                                        <!-- <td><?= $department['slug'] ?></td> -->
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                        <script>
                                            let table = new DataTable('#leadsDataTable', {
                                                dom: 'Bfrtip',
                                                buttons: ['copy', 'excel', 'pdf', 'print'],
                                                order: [
                                                    [0, 'asc']
                                                ]
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= form_close() ?>
</div>