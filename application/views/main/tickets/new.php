<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

<!-- Plugin: Froala  -->
<link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>

<!-- Form validation jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="<?= base_url('assets/css/') ?>froala-custom.min.css">

<style>
	.error {
		color: red;
	}
</style>
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
	<?= form_open("api/v2/complaints/add", ['id' => "complaintform"]) ?>
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
									<div class="col">
										<label for="name" class="form-label">Name of Complaint</label>
										<input id="name" class="form-control" name="name" type="text">
										<label id="name-error" class="error" for="name"></label>
									</div>
									<div class="col-xl-3 col-lg-4 col-6">
										<label for="inputTitle" class="form-label">Complaint Source</label>
										<select name="source" class="js-example-basic-single form-select" data-width="100%">
											<?php for ($i = 0; $i < count($this->data['page']['source']); $i++) { ?>
												<option value="<?= $this->data['page']['source'][$i]['slug'] ?>"><?= $this->data['page']['source'][$i]['name'] ?></option>
											<?php } ?>
										</select>
										<label id="complaint-error" class="error" for="source"></label>
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
										<input id="source_link" class="form-control" name="source_link" type="text">
										<label id="source-error" class="error" for="source_link"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- class="full-editor" -->
				<div class="col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="mb-3">
								<label for="inputPostContent" class="form-label">Message</label>
								<textarea name="message" class="form-control" id="inputPostContent" rows="10"></textarea>
								<label id="message-error" class="error" for="message"></label>
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
									<option value="ward" selected>Select Ward</option>
									<?php for ($i = 0; $i < count($this->data['page']['ward']); $i++) { ?>
										<option value="<?= $this->data['page']['ward'][$i]['id'] ?>"><?= $this->data['page']['ward'][$i]['name'] ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Department</label>
								<select name="department_id" class="js-example-basic-single form-select" data-width="100%">
									<option value="department" selected>Select Department</option>
									<?php for ($i = 0; $i < count($this->data['page']['department']); $i++) { ?>
										<option value="<?= $this->data['page']['department'][$i]['id'] ?>"><?= $this->data['page']['department'][$i]['name'] ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Type of Complaint</label>
								<select name="type_of_complaint" class="js-example-basic-single form-select" data-width="100%">
									<option value="complaint" selected>Select Complaint</option>
									<?php for ($i = 0; $i < count($this->data['page']['complaint']); $i++) { ?>
										<option value="<?= $this->data['page']['complaint'][$i]['name'] ?>"><?= $this->data['page']['complaint'][$i]['name'] ?></option>
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
									<option value="status" selected>Select Status</option>
									<?php for ($i = 0; $i < count($this->data['page']['status']); $i++) { ?>
										<option value="<?= $this->data['page']['status'][$i]['slug'] ?>"><?= $this->data['page']['status'][$i]['name'] ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="mb-3">
								<label for="inputTitle" class="form-label">Sentiment Analysis</label>
								<select name="sentiment" class="js-example-basic-single form-select" data-width="100%">
									<option value="sentiment" selected>Select Sentiment Analysis</option>
									<?php for ($i = 0; $i < count($this->data['page']['sentiment']); $i++) { ?>
										<option value="<?= $this->data['page']['sentiment'][$i]['name'] ?>"><?= $this->data['page']['sentiment'][$i]['name'] ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col">
								<label for="comment" class="form-label">Comments</label>
								<input id="comments" class="form-control" name="comments" type="text">
								<label id="comment-error" class="error" for="comments"></label>
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
<script type="text/javascript">
	$('#complaintform').validate({
		rules: {
			name: 'required',
			source_link: 'required',
			source: 'required',
			comments: 'required',
			email: {
				required: true,
				email: true,
			},
			phone: {
				required: true,
				minlength: 10,
				maxlength: 10,
			},
			message: {
				required: true,
			}
		},
		messages: {
			name: 'This Name field is required',
			source: 'This Source field is required',
			source_link: 'This Complaint Source link field is required',
			email: 'Enter a valid email',
			message: 'This Message field is required',
			comments: 'This Comment field is required',
			phone: {
				minlength: 'Number must be at least 10 digit'
			}
		},
		submitHandler: function(form) {
			form.submit();
		}
	});
</script>
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