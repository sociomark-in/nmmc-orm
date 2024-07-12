<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<!-- <script src=""></script> -->
<div class="page-content">

	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div>
			<h4 class="mb-3 mb-md-0">All Complaints</h4>
		</div>
		<div class="d-flex align-items-center flex-wrap text-nowrap">
			<a class="btn btn-primary btn-icon-text mb-2 mb-md-0" href="<?= base_url('complaints/tickets/new') ?>">
				<i class="icon-lg pb-3px" data-feather="plus"></i>
				New Complaint
			</a>
		</div>
	</div>
	<!-- row -->
	<div class="row">
		<div class="col-12 col-xl-12 stretch-card">
			<div class="row flex-grow-1">
				<div class="col-xl-2 col-lg-4 col-md-4 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">All</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-2"><?= $page['tickets_count']['all'] ?></h3>
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
								<h6 class="card-title mb-0">New</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-2 text-primary"><?= $page['tickets_count']['new'] ?></h3>
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


	<div class="row">
		<div class="col-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">Complaints List</h6>
					</div>
					<form action="" method="get" class="d-none">
						<div class="mb-3">
							<div class="row justify-content-between">
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="">
										<div class="input-group">
											<input type="search" name="k" class="form-control" placeholder="Search Through Complaint Message" data-input>
											<span class="input-group-text input-group-addon" data-toggle><i data-feather="search"></i></span>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="">
										<select name="dept" id="" class="form-select">
											<option value="">Select A Department</option>
											<?php for ($i = 0; $i < 20; $i++) : ?>
												<option value="<?= "department-" . $i  ?>"><?= "Department " . $i  ?></option>
											<?php endfor ?>
										</select>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="">
										<select name="ward" id="" class="form-select">
											<option value="">Select A Ward</option>
											<?php for ($i = 0; $i < 20; $i++) : ?>
												<option value="<?= "ward-" . $i  ?>"><?= "Ward " . $i  ?></option>
											<?php endfor ?>
										</select>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="row">
										<div class="col-xl col-lg-6">
											<div class="">
												<div class="input-group flatpickr">
													<input type="text" name="daterange" class="form-control flatpickr-daterange" id="daterange" placeholder="Select Date Range" data-input>
													<span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
												</div>
											</div>
										</div>
										<div class="col-xl-auto col-lg-6">
											<button class="btn btn-primary" type="submit">Update&nbsp;Filter</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="table-responsive">
						<table class="table table-hover mb-0" id="leadsDataTable">
							<thead>
								<tr>
									<th class="pt-0">Date</th>
									<th class="pt-0">Title</th>
									<th class="pt-0">Department</th>
									<th class="pt-0">Ward</th>
									<th class="pt-0">Type of Complaint</th>
									<th class="pt-0">Message</th>
									<th class="pt-0">Post Link</th>
									<th class="pt-0">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tickets_all as $key => $ticket) : ?>
									<tr>
										<td><?= date("Y-m-d h:i:s", strtotime($ticket['created_at'])) ?></td>
										<td><a href="<?= base_url('complaints/ticket/' . $ticket['id'] . '/edit') ?>">Complaint Name</a></td>
										<td><?= $ticket['department_id'] ?></td>
										<td><?= $ticket['ward_id'] ?></td>
										<td><?= $ticket['type_of_complaint'] ?></td>
										<td><?= $ticket['message'] ?></td>
										<td><a href="<?= $ticket['source_link'] ?>"><?= $ticket['source'] ?></a></td>
										<!-- <td><span class="badge bg-danger"><?= $ticket['status'] ?></span></td> -->
										<?php if ($ticket['status'] == "unresolved") { ?>
											<td><span class="badge bg-danger"><?= $ticket['status'] ?></span></td>
										<?php } elseif ($ticket['status'] == "resolved") { ?>
											<td><span class="badge bg-success"><?= $ticket['status'] ?></span></td>
										<?php } else { ?>
											<td><span class="badge bg-warning"><?= $ticket['status'] ?></span></td>
										<?php } ?>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<script>
							let table = new DataTable('#leadsDataTable', {
								dom: 'Bfrtip',
								buttons: ['copy', 'excel', 'pdf', 'print']
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(".flatpickr-daterange").each((index, elem) => {
		$(elem).flatpickr({
			maxDate: "<?= date("Y-m-d") ?>",
			mode: 'range',
			dateFormat: "Y-m-d",
			conjunction: " :: ",
		});
	})
</script>