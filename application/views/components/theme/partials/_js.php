<!-- core:js -->
<!-- <script src="<?= base_url("assets") ?>/vendors/core/core.js"></script> -->
<!-- endinject -->

<!-- Plugin js for this page -->
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="<?= base_url("assets") ?>/vendors/feather-icons/feather.min.js"></script>
<script src="<?= base_url("assets") ?>/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="<?= base_url("assets") ?>/js/dashboard-light.js"></script>
<script src="<?= base_url("assets") ?>/js/app.js"></script>
<!-- End custom js for this page -->

<script>
    $('select.form-select').each((index,elem)=>{
        $(elem).select2();
    })
</script>