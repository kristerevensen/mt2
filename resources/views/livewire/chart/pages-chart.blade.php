<div>
    {{-- Be like water. --}}
    <canvas id="myChart" height="100px"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            var ctx = document.getElementById('myChart').getContext('2d');

            var data = @json($dates);

            var labels = data.map(function(d) { return d.dato; });
            var pageviews = data.map(function(d) { return d.pageviews; });
            var sessions = data.map(function(d) { return d.sessions; });

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Pageviews',
                        data: pageviews,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    }, {
                        label: 'Sessions',
                        data: sessions,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                        type: 'line',
                        yAxisID: 'y-axis-2',
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            id: 'y-axis-1',
                            type: 'linear',
                            position: 'left',
                        }, {
                            id: 'y-axis-2',
                            type: 'linear',
                            position: 'right',
                        }]
                    }
                }
            });
        </script>
</div>
