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
      enabled: false,
    },
  };
}
const pieChartOptions = options;

if ($(".apexchart.bar-chart").length) {
  var options = {
    chart: {
      type: "bar",
      height: "320",
      parentHeightOffset: 0,
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
    colors: [colors.primary],
    grid: {
      padding: {
        bottom: -4,
      },
      borderColor: colors.gridBorder,
      xaxis: {
        lines: {
          show: true,
        },
      },
    },
    xaxis: {
      axisBorder: {
        color: colors.gridBorder,
      },
      axisTicks: {
        color: colors.gridBorder,
      },
    },
    legend: {
      show: true,
      position: "top",
      horizontalAlign: "center",
      fontFamily: fontFamily,
      itemMargin: {
        horizontal: 8,
        vertical: 0,
      },
    },
    stroke: {
      width: 0,
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
      },
    },
  };
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
