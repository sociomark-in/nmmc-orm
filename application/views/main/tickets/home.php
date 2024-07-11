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
				<div class="col-lg-3 col-md-4 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">All Complaints</h6>
								<div class="dropdown mb-2">
									<a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
									</div>
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
				<div class="col-lg-3 col-md-4 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">Department Complaints</h6>
								<div class="dropdown mb-2">
									<a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
									</div>
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
				<div class="col-lg-3 col-md-4 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">Ward Complaints</h6>
								<div class="dropdown mb-2">
									<a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
									</div>
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


	<div class="row">
		<div class="col-lg-12 col-xl-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">Complaints List</h6>
						<div class="dropdown mb-2">
							<a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
								<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
							</div>
						</div>
					</div>
					<form action="" method="get">
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
										<td><a href="<?= $ticket['source_link'] ?>">Complaint Name</a></td>
										<td><?= $ticket['department_id'] ?></td>
										<td><?= $ticket['ward_id'] ?></td>
										<td><?= $ticket['type_of_complaint'] ?></td>
										<td><?= $ticket['message'] ?></td>
										<td><a href="<?= $ticket['source_link'] ?>"><?= $ticket['source'] ?></a></td>
										<td><span class="badge bg-danger"><?= $ticket['status'] ?></span></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<script>
							let table = new DataTable('#leadsDataTable');
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