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
<div class="page-content">
	<?= form_open("api/v2/complaints/add") ?>
		<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
			<div class="d-flex gap-2">
				<div class="nav-item">
					<a href="<?= base_url("complaints/all-tickets") ?>" class="nav-link"><i class="link-arrow" data-feather="chevron-left"></i></a>
				</div>
				<div>
					<h4 class="mb-3 mb-md-0">New Complaint</h4>
				</div>
			</div>
			<div class="">
				<button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Complaint</button>
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
										<div class="col-xl-3 col-lg-4 col-6">
											<label for="inputTitle" class="form-label">Complaint Source</label>
											<select name="source" class="js-example-basic-single form-select" data-width="100%">
												<option value="facebook">Facebook</option>
												<option value="instagram">Instagram</option>
												<option value="twitter">Twitter</option>
											</select>
										</div>
										<div class="col">
											<label for="url" class="form-label">Source Link</label>
											<input id="source_link" class="form-control" name="source_link" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="mb-3">
									<label for="inputPostContent" class="form-label">Message</label>
									<textarea name="message" class="form-control full-editor" id="inputPostContent" rows="10"></textarea>
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
									<h6 class="card-title mb-0">Visibility</h6>
								</div>
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Type of Complaint</label>
									<select name="type_of_complaint" class="js-example-basic-single form-select" data-width="100%">
										<?php for ($i = 1; $i <= 12; $i++) { ?>
											<option value="Complaint <?= $i ?>">Complaint <?= $i ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Status</label>
									<select name="status"  class="js-example-basic-single form-select" data-width="100%">
											<option value="New">New</option>
											<option value="In_progress">In Progress</option>
											<option value="resolved">Resolved</option>
											<option value="unresolved">Unresolved</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-baseline mb-3">
									<h6 class="card-title mb-0">Choose Department & Ward</h6>
								</div>
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Department</label>
									<select name="department_id"  class="js-example-basic-single form-select" data-width="100%">
										<?php for ($i = 0; $i < count($this->data['page']['department']); $i++) { ?>
											<option value="<?= $this->data['page']['department'][$i]['id'] ?>"><?= $this->data['page']['department'][$i]['name'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Ward</label>
									<select name="ward_id" class="js-example-basic-single form-select" data-width="100%">
										<?php for ($i = 0; $i < count($this->data['page']['ward']); $i++) { ?>
											<option value="<?= $this->data['page']['ward'][$i]['id'] ?>"><?= $this->data['page']['ward'][$i]['name'] ?></option>
										<?php } ?>
									</select>
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
	<?= form_close()?>
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