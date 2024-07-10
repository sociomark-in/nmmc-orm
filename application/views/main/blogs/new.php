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
	<form action="" method="post">
		<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
			<div class="d-flex gap-2">
				<div class="nav-item">
					<a href="<?= base_url("posts/all-blogs") ?>" class="nav-link"><i class="link-arrow" data-feather="chevron-left"></i></a>
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
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Source</label>
									<select class="js-example-basic-single form-select" data-width="100%">
										<option value="facebook">Facebook</option>
										<option value="instagram">Instagram</option>
										<option value="twitter">Twitter</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Type of Complaint</label>
									<select class="js-example-basic-single form-select" data-width="100%">
										<?php for ($i = 1; $i <= 12; $i++) { ?>
											<option value="facebook">Complaint <?= $i ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="mb-3">
									<label for="url" class="form-label">Post Links</label>
									<input id="url" class="form-control" name="url" type="text">
								</div>
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Status</label>
									<select class="js-example-basic-single form-select" data-width="100%">
										<?php for ($i = 1; $i <= 4; $i++) { ?>
											<option value="facebook">Status <?= $i ?></option>
										<?php } ?>
									</select>
								</div>

								<div class="mb-3">
									<label for="inputPostContent" class="form-label">Message</label>
									<textarea class="form-control" id="inputPostContent" rows="10"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 grid-margin stretch-card d-none">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-baseline mb-3">
									<div class="">
										<h6 class="card-title mb-0">Exerpt</h6>
										<p>Add a summary of the post to appear on your home page or blog.</p>
									</div>
								</div>
								<div class="mb-3">
									<textarea class="form-control mini-editor" id="inputExerpt"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 grid-margin stretch-card d-none">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-baseline mb-3">
									<div class="">
										<h6 class="card-title mb-0">Search engine listing preview</h6>
										<p>Add a title and description to see how this Blog post might appear in a search engine listing</p>
									</div>
								</div>
								<div class="mb-3">
									<label for="inputSEOPageTitle" class="form-label">Page Title</label>
									<input type="text" class="form-control" id="inputSEOPageTitle" />
								</div>
								<div class="mb-3">
									<label for="inputSEOPageDesc" class="form-label">Description</label>
									<textarea class="form-control mini-editor" maxlength="300" id="inputSEOPageDesc"></textarea>
								</div>
								<div class="mb-3">
									<label for="inputSEOPageURL" class="form-label">Page URL</label>
									<input type="text" class="form-control" id="inputSEOPageURL" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-12 grid-margin">
				<div class="row">
					<div class="col-12 grid-margin stretch-card d-none">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-baseline mb-3">
									<h6 class="card-title mb-0">Visibility</h6>
								</div>
								<div class="mb-3">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="status" value="2" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											Draft
										</label>
									</div>
								</div>
								<div class="mb-3">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="status" value="1" id="flexCheckChecked" checked>
										<label class="form-check-label" for="flexCheckChecked">
											Published
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 grid-margin stretch-card d-none">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-baseline mb-3">
									<h6 class="card-title mb-0">Featured Image</h6>
								</div>
								<div class="mb-3">
									<input type="file" class="dropify" data-default-file="" data-max-file-size="5M" data-allowed-file-extensions="jpg" />
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
									<select class="js-example-basic-single form-select" data-width="100%">
										<?php for ($i = 1; $i <= 12; $i++) { ?>
											<option value="facebook">Department <?= $i ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="mb-3">
									<label for="inputTitle" class="form-label">Ward</label>
									<select class="js-example-basic-single form-select" data-width="100%">
										<?php for ($i = 1; $i <= 8; $i++) { ?>
											<option value="facebook">Ward <?= $i ?></option>
										<?php } ?>
									</select>
								</div>
								<!-- <div class="mb-3">
									<label for="blogCategorySelect" class="form-label">Blog Category</label>
									<select name="" class="" id="blogCategorySelect">
										<?php for ($i = 0; $i < 10; $i++) : ?>
											<option value="">Select <?= $i ?></option>
										<?php endfor ?>
									</select>
									<script>
										$("#blogCategorySelect").select2({
											theme: "bootstrap-5",
										});
									</script>
								</div>
								<div class="mb-3">
									<label for="inputBlogTags" class="form-label">Tags</label>
									<select name="" class="" id="inputBlogTags" multiple>
										<?php for ($i = 0; $i < 10; $i++) : ?>
											<option value="">Select <?= $i ?></option>
										<?php endfor ?>
									</select>
									<script>
										$("#inputBlogTags").select2({
											theme: "bootstrap-5",
										});
									</script>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<button type="submit" class="btn me-2 btn-primary">Save Complaint</button>
				<button type="reset" class="btn btn-outline-secondary">Cancel</button>
			</div>
		</div>
	</form>
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