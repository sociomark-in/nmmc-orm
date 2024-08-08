<div id="<?= $id ?>" class="apexchart pie-chart"></div>
<script type="module">
    import {
        pieChartOptions
    } from "<?= base_url("assets") ?>/js/apexchart-options.js";
    if ($('#<?= $id ?>').length) {
        var options = pieChartOptions;
        options.chart.height = "<?= $height ?>"

        <?php if (isset($source['static'])) : //STATIC DATABASE  ?>
            <?php if (isset($source['static']['labels'])) : ?>
                options.labels = <?= json_encode($source['static']['labels']) ?>;
            <?php endif ?>
            options.series = <?= json_encode($source['static']['data']) ?>;
            var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
            chart<?= $id ?>.render();
        <?php else : ?>
            $.ajax({
                url: "<?= base_url($source['url']) ?>",
                method: "POST",
                data: {
                    output: ['name', 'data']
                },
                success: function(response) {
                    options.series = response.output[0].data.series;
                    options.labels = response.output[0].data.labels;
                    var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
                    chart<?= $id ?>.render();
                }
            })
        <?php endif ?>
        // console.log(options);
    }
</script>