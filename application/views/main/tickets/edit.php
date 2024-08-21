<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

<!-- Plugin: Froala  -->
<link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
<link rel="stylesheet" href="<?= base_url('assets/css/') ?>froala-custom.min.css">

<script>
	$(document).ready(function() {
		var editor1 = new FroalaEditor('textarea.full-editor', {
			height: 300
		});
		var editor2 = new FroalaEditor('textarea.mini-editor', {
			height: 100,
			wordCounterMax: 100,
			toolbarButtons: {
				moreMisc: {
					buttons: ['undo', 'redo', 'html', 'help'],
					align: 'right',
				}
			}
		});
	});
</script>
<!-- Plugin: Froala  -->

<script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.8/dist/jquery.inputmask.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url("assets/css/") ?>dropify-custom.min.css">
<link rel="stylesheet" href="<?= base_url("assets/css/") ?>select2-custom.min.css">

<!-- Array ( [id] => 71 [source] => facebook [department_id] => 17 [ward_id] => 8 [type_of_complaint] => other [message] => lorum ipsum [source_link] => https://www.instagram.com/p/C9PmXQFPenA/?img_index=71 [status] => in_process [created_at] => 2024-04-11 14:49:12 [updated_at] => 2024-04-11 14:49:12 ) -->

<div class="page-content">
	<?= form_open("api/v2/complaints/edit") ?>
	<input type="hidden" name="ticket_id" value="<?= $page['slug'] ?>">
	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div class="d-flex gap-2">
			<div class="nav-item">
				<a href="<?= base_url("complaints/all-tickets") ?>" class="nav-link"><i class="link-arrow" data-feather="chevron-left"></i></a>
			</div>
			<div>
				<h4 class="mb-3 mb-md-0">Edit Complaint</h4>
			</div>
		</div>
		<div class="">
			<button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Changes</button>
			<button type="reset" class="btn btn-outline-secondary">Cancel</button>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-9 col-lg-8 col-12 grid-margin">
			<div class="row">
				<div class="col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="">
								<div class="row">
									<div class="col">
										<label for="name" class="form-label">Name of Complaint</label>
										<input id="name" class="form-control" name="name" value="<?= $page['ticket']['name'] ?>" type="text">
									</div>
									<div class="col-xl-3 col-lg-4 col-6">
										<label for="inputTitle" class="form-label">Complaint Source</label>
										<select name="source" class="js-example-basic-single form-select" data-width="100%">
											<?php for ($i = 0; $i < count($page['source']); $i++) { ?>
												<?php if ($page['ticket']['source'] == $page['source'][$i]['slug']) : ?>
													<option value="<?= $page['source'][$i]['name'] ?>" selected><?= $page['source'][$i]['name'] ?></option>
												<?php else : ?>
													<option value="<?= $page['source'][$i]['name'] ?>"><?= $page['source'][$i]['name'] ?></option>
												<?php endif ?>
											<?php } ?>
										</select>
									</div>
									<div class="col">
										<label for="date" class="form-label">Complaint Date</label>
										<input id="created_at" class="form-control" name="created_at" type="date">
										<label id="created-error" class="error" for="created_at"></label>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<label for="url" class="form-label">Complaint Link</label>
										<input id="source_link" class="form-control" name="source_link" value="<?= $page['ticket']['source_link'] ?>" type="text">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--full-editor-->
				<div class="col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="mb-3">
								<label for="inputPostContent" class="form-label">Message</label>
								<textarea name="message" class="form-control" id="inputPostContent" rows="10"><?= $page['ticket']['message'] ?></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-4 col-12 grid-margin">
			<div class="row">
				<div class="col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline mb-3">
								<h6 class="card-title mb-0">Complaint Details</h6>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Ward</label>
								<select name="ward_id" class="js-example-basic-single form-select" data-width="100%">
									<?php for ($i = 0; $i < count($page['ward']); $i++) { ?>
										<?php if ($page['ticket']['ward_id'] == $page['ward'][$i]['id']) : ?>
											<option value="<?= $page['ward'][$i]['id'] ?>" selected><?= $page['ward'][$i]['name'] ?></option>
										<?php else : ?>
											<option value="<?= $page['ward'][$i]['id'] ?>"><?= $page['ward'][$i]['name'] ?></option>
										<?php endif ?>
									<?php } ?>
								</select>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Department</label>
								<select name="department_id" class="js-example-basic-single form-select" data-width="100%">
									<?php for ($i = 0; $i < count($page['department']); $i++) { ?>
										<?php if ($page['ticket']['department_id'] == $page['department'][$i]['id']) : ?>
											<option value="<?= $page['department'][$i]['id'] ?>" selected><?= $page['department'][$i]['name'] ?></option>
										<?php else : ?>
											<option value="<?= $page['department'][$i]['id'] ?>"><?= $page['department'][$i]['name'] ?></option>
										<?php endif ?>
									<?php } ?>
								</select>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Type of Complaint</label>
								<select name="type_of_complaint" class="js-example-basic-single form-select" data-width="100%">
									<option value="complaint" selected>Select Complaint</option>
									<?php for ($i = 0; $i < count($page['complaint']); $i++) { ?>
										<?php if ($page['ticket']['type_of_complaint'] == $page['complaint'][$i]['name']) : ?>
											<option value="<?= $page['complaint'][$i]['id'] ?>" selected><?= $page['complaint'][$i]['name'] ?></option>
										<?php else : ?>
											<option value="<?= $page['complaint'][$i]['id'] ?>"><?= $page['complaint'][$i]['name'] ?></option>
										<?php endif ?>
									<?php } ?>
								</select>
							</div>

						</div>
					</div>
				</div>

				<div class="col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline mb-3">
								<h6 class="card-title mb-0">Complaint Status</h6>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Status</label>
								<select name="status" class="js-example-basic-single form-select" data-width="100%">
									<?php for ($i = 0; $i < count($page['status']); $i++) { ?>
										<?php if ($page['ticket']['status'] == $page['status'][$i]['slug']) : ?>
											<option value="<?= $page['status'][$i]['name'] ?>" selected><?= $page['status'][$i]['name'] ?></option>
										<?php else : ?>
											<option value="<?= $page['status'][$i]['name'] ?>"><?= $page['status'][$i]['name'] ?></option>
										<?php endif ?>
									<?php } ?>
								</select>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Sentiment Analysis</label>
								<select name="sentiment" class="js-example-basic-single form-select" data-width="100%">
									<?php for ($i = 0; $i < count($page['sentiment']); $i++) { ?>
										<option value="<?= $page['sentiment'][$i]['name'] ?>"><?= $page['sentiment'][$i]['name'] ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col">
								<label for="comment" class="form-label">Comments</label>
								<input id="comment" class="form-control" name="comment" value="<?= $page['ticket']['comments'] ?>" type="text">
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="col-12">
				<button type="submit" class="btn me-2 btn-primary">Save Complaint</button>
				<button type="reset" class="btn btn-outline-secondary">Cancel</button>
			</div> -->
	</div>
	<?= form_close() ?>
</div>

<script>
	$('.dropify').dropify({
		error: {
			'fileSize': 'The file size is too big ({{ value }} max).',
			'minWidth': 'The image width is too small ({{ value }}}px min).',
			'maxWidth': 'The image width is too big ({{ value }}}px max).',
			'minHeight': 'The image height is too small ({{ value }}}px min).',
			'maxHeight': 'The image height is too big ({{ value }}px max).',
			'imageFormat': 'The image format is not allowed ({{ value }} only).'
		}
	});
</script>