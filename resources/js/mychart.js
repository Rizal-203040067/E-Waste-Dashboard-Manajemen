// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx = document.getElementById("myChart");

new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "Perangkat Rumah Tangga",
            "Perangkat Hiburan",
            "Perangkat Komunikasi",
            "Perangkat Listrik",
            "Perangkat Cahaya",
        ],
        datasets: [
            {
                label: "2022",
                data: [60, 45, 88, 55, 74, 72],
                borderWidth: 1,
            },
        ],
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 18,
                    },
                },
            },
        },
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
