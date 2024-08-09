<div id="<?= $id ?>" class="apexchart bar-chart"></div>
<?php 
$xaxis = [];
for ($i=1; $i <= 8; $i++) { 
    array_push($xaxis, "Department " . $i);
}
?>
<script type="module">
    import {
        barChartOptions, slugify
    } from "<?= base_url("assets") ?>/js/apexchart-options.js";
    if ($('#<?= $id ?>').length) {
        var options = barChartOptions
        if(<?= array_key_exists("dataPointSelection", $events) ?>){
            options.chart.events = {
                dataPointSelection: function(event, chartContext, opts) {
                    var dept = chartContext.w.globals.labels[opts.dataPointIndex];
                    $.ajax( {
                        data: {
                            department: dept
                        },
                        method:"POST",
                        url: "<?= base_url($events['dataPointSelection']['url']) ?>",
                        success: function(data){
                            window.location.replace("<?= base_url($events['dataPointSelection']['redirect']) ?>".replace("(:any)", slugify(data.slug)))
                        }
                    })
                }
            };
        }

        $.ajax({
            url: "<?= base_url($source['url']) ?>",
            method: "POST",
            data: {
                output: ['name', 'data']
            },
            success: function(response) {
                console.log(response.output[0]);
                options.xaxis = {
                    categories: response.output[0].data.labels,
                    // categories: <?= json_encode($xaxis) ?>,
                };
                options.series = [{
                    name: "Complaints",
                    data: response.output[0].data.series,
                }, ];
                var chart<?= $id ?> = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
                chart<?= $id ?>.render();
            }
        })
        
    }
</script>