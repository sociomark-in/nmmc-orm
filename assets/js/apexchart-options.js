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
const slugify = str =>
    str
      .toLowerCase()
      .trim()
      .replace(/[^\w\s-]/g, '')
      .replace(/[\s_-]+/g, '-')
      .replace(/^-+|-+$/g, '');

var fontFamily = "'Roboto', Helvetica, sans-serif";

// Apex Pie chart end
if ($(".apexchart.pie-chart").length) {
  var options = {
    chart: {
      height: 200,
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
    colors: [colors.primary, colors.warning, colors.danger, colors.info],
    legend: {
      show: true,
      position: "left",
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
    series: [44, 55, 13, 33],
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

export { slugify, barChartOptions, pieChartOptions };
