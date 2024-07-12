<div id="<?= $id ?>" class="apexchart pie-chart"></div>
<script type="module">
    import {
        pieChartOptions
    } from "<?= base_url("assets") ?>/js/apexchart-options.js";
    if ($('#<?= $id ?>').length) {
        var options = pieChartOptions;
        options.chart.height = "<?= $height ?>"
        <?php if (isset($data['labels'])) : ?>
            options.labels = <?= json_encode($data['labels']) ?>;
        <?php endif ?>

        <?php if (isset($data['static'])) : ?>
            options.series = <?= json_encode($data['static'][0]) ?>;
            var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
            chart<?= $id ?>.render();
        <?php else : ?>
            $.ajax({
                url: "<?= base_url($data['source']) ?>",
                method: "POST",
                data: {
                    output: ['name', 'data']
                },
                success: function(data) {
                    options.series = [14, 65, 23, 53];
                    var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
                    chart<?= $id ?>.render();
                }
            })
        <?php endif ?>

    }
</script>