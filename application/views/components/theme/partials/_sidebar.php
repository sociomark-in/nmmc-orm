<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			<img src="<?= base_url('assets/nmmc-logo.png') ?>" alt="" width="160">
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item <?= link_is_active("") ?>">
				<a href="<?= base_url() ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("complaints/all-tickets") ?>">
				<a href="<?= base_url('complaints/all-tickets') ?>" class="nav-link">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">All Complaints</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("complaints/all-types") ?>">
				<a href="<?= base_url('complaints/all-types') ?>" class="nav-link">
					<i class="link-icon" data-feather="map-pin"></i>
					<span class="link-title">Complaint Types</span>
				</a>
			</li>

			<?php if ($session['appuser']['role']['id'] == 1) : ?>
				<!-- Tickets -->
				<li class="nav-item nav-category">Ticket Management</li>
				<!-- Access Level: admin -->
				<li class="nav-item <?= link_is_active("complaints/all-tickets") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#tickets" role="button" aria-expanded="false" aria-controls="tickets">
						<i class="link-icon" data-feather="database"></i>
						<span class="link-title">Complaint Tickets</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="tickets">
						<ul class="nav sub-menu">
							<li class="nav-item <?= link_is_active("complaints/all-tickets") ?>">
								<a href="<?= base_url('complaints/all-tickets') ?>" class="nav-link">All Tickets</a>
							</li>
							<li class="nav-item <?= link_is_active("complaints/all-tickets/new") ?>">
								<a href="<?= base_url('complaints/tickets/new') ?>" class="nav-link">New Ticket</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item d-none">
					<a class="nav-link" data-bs-toggle="collapse" href="#reports" role="button" aria-expanded="false" aria-controls="reports">
						<i class="link-icon" data-feather="book"></i>
						<span class="link-title">Ticket Reports</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="reports">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="<?= base_url('reports?filter=all_wards') ?>" class="nav-link">Ward Wise</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('reports?filter=all_departments') ?>" class="nav-link">Department Wise</a>
							</li>
						</ul>
					</div>
				</li>


				<!-- Access Level: admin -->
				<!-- Nominations -->
				<li class="nav-item nav-category">Organization Management</li>
				<!-- Access Level: jury -->
				<li class="nav-item <?= link_is_active("departments") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#department" role="button" aria-expanded="false" aria-controls="department">
						<i class="link-icon" data-feather="map-pin"></i>
						<span class="link-title">Departments</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="department">
						<ul class="nav sub-menu">
							<li class="nav-item <?= link_is_active("departments") ?>">
								<a href="<?= base_url('departments') ?>" class="nav-link">Departments</a>
							</li>
							<li class="nav-item <?= link_is_active("department/new") ?>">
								<a href="<?= base_url('department/new') ?>" class="nav-link">Add Department</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item <?= link_is_active("wards") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#ward" role="button" aria-expanded="false" aria-controls="ward">
						<i class="link-icon" data-feather="map-pin"></i>
						<span class="link-title">Wards</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="ward">
						<ul class="nav sub-menu">
							<li class="nav-item <?= link_is_active("wards") ?>">
								<a href="<?= base_url('wards') ?>" class="nav-link">Wards</a>
							</li>
							<li class="nav-item <?= link_is_active("department/new") ?>">
								<a href="<?= base_url('ward/new') ?>" class="nav-link">Add Wards</a>
							</li>
						</ul>
					</div>
				</li>

				<!-- Access Level: admin -->
				<li class="nav-item nav-category">User Management</li>
				<!-- <li class="nav-item">
					<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
						<i class="link-icon" data-feather="users"></i>
						<span class="link-title">Jury Panel</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="emails">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">Juries</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Menu Items</a>
							</li>
						</ul>
					</div>
				</li> -->
				<li class="nav-item">
					<a href="<?= base_url('users/all') ?>" class="nav-link">
						<i class="link-icon" data-feather="users"></i>
						<span class="link-title">Users</span>
					</a>
				</li>
				<li class="nav-item d-none">
					<a href="dashboard.html" class="nav-link">
						<i class="link-icon" data-feather="settings"></i>
						<span class="link-title">Settings</span>
					</a>
				</li>

				<li class="nav-item nav-category">Apps</li>
				<li class="nav-item">
					<a href="dashboard.html" class="nav-link">
						<i class="link-icon" data-feather="settings"></i>
						<span class="link-title">App Settings</span>
					</a>
				</li>

				<li class="nav-item nav-category">Docs</li>
				<li class="nav-item">
					<a href="" target="_blank" class="nav-link">
						<i class="link-icon" data-feather="hash"></i>
						<span class="link-title">Documentation</span>
					</a>
				</li>
			<?php endif ?>
		</ul>
	</div>
</nav>