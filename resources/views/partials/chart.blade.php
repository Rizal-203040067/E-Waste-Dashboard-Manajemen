<script>
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
                label: "Sampah Per Kategori",
                data: [90, 85, 78, 65, 54, 32],
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx2 = document.getElementById("myChart2");

new Chart(ctx2, {
    type: "bar",
    data: {
        labels: [
            "Setiabudhi",
            "Bojongsoang",
            "Cangkuang",
            "Dayeuhkolot",
            "Mayalaya",
        ],
        datasets: [
            {
                label: "Sampah Per Daerah",
                data: [80, 75, 68, 65, 34, 22],
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx3 = document.getElementById("myChart3");

new Chart(ctx3, {
    type: "bar",
    data: {
        labels: [
            "Gegerkalong",
            "Darul Tauhid",
            "Babakan",
            "Gegerkalong 2",
            "Ledeng",
        ],
        datasets: [
            {
                label: "Sampah Per Dropbox",
                data: [90, 75, 68, 55, 34, 22],
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx4 = document.getElementById("myChart4");

new Chart(ctx4, {
    type: "bar",
    data: {
        labels: [
            "Bambang",
            "Herman Sumanto",
            "Nurul Asih",
            "Zahra Meilani",
            "Septio Nugroho",
            "Sakura laksita",
            "Tirta Wicana",
            "Kala Irawan",
            "Hilmawan Prasasta",
            "Vera Utami",
        ],
        datasets: [
            {
                label: "Kurir Terbanyak",
                data: [80, 75, 68, 65, 64, 42, 40, 36, 32, 28],
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx5 = document.getElementById("myChart5");

new Chart(ctx5, {
    type: "bar",
    data: {
        labels: [
            "Febi Novitasari",
            "Maria Rahimah",
            "Ilsa Wahyuni",
            "Mila Lestari",
            "Lulut Mandala",
            "Dian Hassanah",
            "Purwanto Hardiansyah",
            "Tari Namaga",
            "Jinawi Wibisono",
            "Diana Wijayanti",
        ],
        datasets: [
            {
                label: "Masyarakat Terbaik",
                data: [60, 55, 48, 45, 44, 32, 29, 24, 20, 16],
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx6 = document.getElementById("myChart6");

new Chart(ctx6, {
    type: "bar",
    data: {
        labels: [
            "Baterai",
            "Bohlam",
            "Stopkontak",
            "Kamera",
            "Radio",
            "Flashdisk",
            "Setrika",
            "Ponsel",
            "Komputer",
            "Kulkas",
        ],
        datasets: [
            {
                label: "Jenis Sampah",
                data: [70, 65, 58, 55, 44, 42, 40, 37, 34, 29],
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx7 = document.getElementById("myChart7");

new Chart(ctx7, {
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
                label: "Total Sampah",
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx8 = document.getElementById("myChart8");

new Chart(ctx8, {
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
                label: "Total Sampah",
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
</script>

<script>
// import { Chart } from "chart.js/auto";
// import Chart from "chart.js/auto";

const ctx9 = document.getElementById("myChart9");

new Chart(ctx9, {
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
                label: "Total Sampah",
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
</script>