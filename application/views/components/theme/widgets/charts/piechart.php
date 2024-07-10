<div id="<?= $id ?>" class="apexchart pie-chart"></div>
<script type="module">
    import {
        pieChartOptions
    } from "<?= base_url("assets") ?>/js/apexchart-options.js";
    if ($('#<?= $id ?>').length) {
        var options = pieChartOptions;
        options.series = [14, 65, 23, 53];
        var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
        chart<?= $id ?>.render();
    }
</script>