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
        <?php if (isset($events) ) : ?>
            options.chart.events = {
                dataPointSelection: function(event, chartContext, opts) {
                    var dept = chartContext.w.globals.labels[opts.dataPointIndex];
                    console.log(dept);
                    $.ajax({
                        data: {
                            department: dept
                        },
                        method: "POST",
                        url: "<?= base_url($data['source']) ?>",
                        success: function(data) {
                            window.location.replace("<?= base_url($events['dataPointSelection']['redirect']) ?>".replace("(:any)", slugify(data.slug)))
                        }
                    })
                }
            };
        <?php endif ?>
        
        $.ajax({
            url: "<?= base_url('api/v2/tickets/count?by=status&months=12') ?>",
            method: "POST",
            data: {
                output: ['name', 'data']
            },
            success: function(data) {
                console.log(data.output[0].data);
                options.xaxis = {
                    categories: data.output[0].months,
                };
                options.series = data.output[0].data;
                var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
                chart<?= $id ?>.render();
            }
        })
    }
</script>