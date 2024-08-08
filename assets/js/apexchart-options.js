var colors = {
  primary: "#6571ff",
  secondary: "#7987a1",
  success: "#05a34a",
  info: "#66d1d1",
  warning: "#fbbc06",
  danger: "#ff3366",
  light: "#e9ecef",
  dark: "#060c17",
  muted: "#7987a1",
  gridBorder: "rgba(77, 138, 240, .15)",
  bodyColor: "#000",
  cardBg: "#fff",
};
const slugify = (str) =>
  str
    .toLowerCase()
    .trim()
    .replace(/[^\w\s-]/g, "")
    .replace(/[\s_-]+/g, "-")
    .replace(/^-+|-+$/g, "");

var fontFamily = "'Roboto', Helvetica, sans-serif";

// Apex Pie chart end
if ($(".apexchart.pie-chart").length) {
  var options = {
    chart: {
      type: "pie",
      foreColor: colors.bodyColor,
      background: colors.cardBg,
      toolbar: {
        show: false,
      },
    },
    theme: {
      mode: "light",
    },
    tooltip: {
      theme: "light",
    },
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontFamily: fontFamily,
      itemMargin: {
        horizontal: 8,
        vertical: 0,
      },
    },
    stroke: {
      colors: ["rgba(0,0,0,0)"],
    },
    dataLabels: {
      enabled: true,
      offsetX: 50,
      offsetY: 50,
      textAnchor: "middle",
      formatter: function (val, opts) {
        return (
          opts.w.config.labels[opts.seriesIndex] +
          ": " +
          parseFloat(val).toFixed(2) +
          "%"
        );
      },
    },
  };
}
const pieChartOptions = options;

if ($(".apexchart.bar-chart").length) {
  var options = {
    series: [
      {
        name: "Inflation",
        data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2],
      },
    ],
    chart: {
      height: 350,
      type: "bar",
    },
    plotOptions: {
      bar: {
        borderRadius: 10,
        dataLabels: {
          position: "top", // top, center, bottom
        },
      },
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return val + "%";
      },
      offsetY: -20,
      style: {
        fontSize: "12px",
        colors: ["#304758"],
      },
    },

    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
      position: "top",
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      crosshairs: {
        fill: {
          type: "gradient",
          gradient: {
            colorFrom: "#D8E3F0",
            colorTo: "#BED1E6",
            stops: [0, 100],
            opacityFrom: 0.4,
            opacityTo: 0.5,
          },
        },
      },
      tooltip: {
        enabled: true,
      },
    },
    yaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
        formatter: function (val) {
          return val + "%";
        },
      },
    },
    title: {
      text: "Monthly Inflation in Argentina, 2002",
      floating: true,
      offsetY: 330,
      align: "center",
      style: {
        color: "#444",
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
}
const barChartOptions = options;

if ($(".apexchart.bar-stacked-chart").length) {
  var options = {
    chart: {
      type: "bar",
      height: 350,
      stacked: true,
      zoom: {
        enabled: true,
      },
    },
    responsive: [
      {
        breakpoint: 480,
        options: {
          legend: {
            position: "bottom",
            offsetX: -10,
            offsetY: 0,
          },
        },
      },
    ],
    plotOptions: {
      bar: {
        horizontal: false,
        borderRadius: 0,
        dataLabels: {
          total: {
            enabled: true,
            style: {
              fontSize: "13px",
              fontWeight: 900,
            },
          },
        },
      },
    },
    xaxis: {
      type: "datetime",
      categories: [
        "01/01/2011 GMT",
        "01/02/2011 GMT",
        "01/03/2011 GMT",
        "01/04/2011 GMT",
        "01/05/2011 GMT",
        "01/06/2011 GMT",
      ],
    },
    legend: {
      position: "right",
      offsetY: 40,
    },
    fill: {
      opacity: 1,
    },
  };
}
const barStackedChartOptions = options;

export { slugify, barStackedChartOptions, barChartOptions, pieChartOptions };
