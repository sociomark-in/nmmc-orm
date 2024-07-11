<div id="<?= $id ?>" class="apexchart bar-stacked-chart"></div>
<?php
$xaxis = [];
for ($i = 1; $i <= 12; $i++) {
    array_push($xaxis, "Department " . $i);
}
?>
<script type="module">
    import {
        barStackedChartOptions,
        slugify
    } from "<?= base_url("assets") ?>/js/apexchart-options.js";
    if ($('#<?= $id ?>').length) {
        var options = barStackedChartOptions
        <?php if (!is_null($events) && array_key_exists("dataPointSelection", $events) || isset($events) ) : ?>
            options.chart.events = {
                dataPointSelection: function(event, chartContext, opts) {
                    var dept = chartContext.w.globals.labels[opts.dataPointIndex];
                    console.log(dept);
                    $.ajax({
                        data: {
                            department: dept
                        },
                        method: "POST",
                        url: "<?= base_url($events['dataPointSelection']['url']) ?>",
                        success: function(data) {
                            window.location.replace("<?= base_url($events['dataPointSelection']['redirect']) ?>".replace("(:any)", slugify(data.slug)))
                        }
                    })
                }
            };
        <?php endif ?>
        options.xaxis = {
            categories: <?= json_encode($xaxis) ?>,
        };

        $.ajax({
            url: "<?= base_url('api/v2/tickets/count?by=status&months=12') ?>",
            method: "POST",
            data: {
                output: ['name', 'data']
            },
            success: function(data) {
                console.log(data.output[1]);
                options.series = [{
                    name: 'New Unresolved',
                    data: [44, 55, 41, 67, 22, 43, 44, 55, 41, 67, 22, 43]
                }, {
                    name: 'Resolved',
                    data: [13, 23, 20, 8, 13, 27, 13, 23, 20, 8, 13, 27]
                }, {
                    name: 'In Process',
                    data: [11, 17, 15, 15, 21, 14, 11, 17, 15, 15, 21, 14]
                }, {
                    name: 'Dissolved',
                    data: [21, 7, 25, 13, 22, 8, 21, 7, 25, 13, 22, 8]
                }, ];
                var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
                chart<?= $id ?>.render();
            }
        })
    }
</script>