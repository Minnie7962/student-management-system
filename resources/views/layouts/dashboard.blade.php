<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap and custom styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                @include('layouts.sidebar') <!-- This will contain the sidebar -->
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <nav class="navbar navbar-light bg-white">
                    <span class="navbar-brand mb-0 h1">Admin Dashboard</span>
                </nav>

                <!-- Dashboard Cards -->
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5>Students</h5>
                                <h2>15.00K</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5>Teachers</h5>
                                <h2>2.00K</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Add other cards similarly -->
                </div>

                <!-- Chart and Student Stats -->
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <canvas id="examResultsChart"></canvas>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5>Total Students</h5>
                                <h2>15,000</h2>
                                <p>Male/Female Ratio</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more components as needed -->
            </div>
        </div>
    </div>
    <!-- Dashboard Cards Section -->
<div class="row mt-4">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h5>Students</h5>
                <h2>15.00K</h2>
                <i class="fas fa-user-graduate"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h5>Teachers</h5>
                <h2>2.00K</h2>
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h5>Parents</h5>
                <h2>5.6K</h2>
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h5>Earnings</h5>
                <h2>$19.3K</h2>
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
    </div>
</div>
<!-- Exam Results and Student Stats -->
<div class="row mt-4">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h5>All Exam Results</h5>
                <canvas id="examResultsChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>Total Students</h5>
                <h2>15,000</h2>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Male: 60%</div>
                </div>
                <div class="progress mt-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Female: 40%</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Star Students Section -->
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5>Star Students</h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Marks</th>
                            <th>Percent</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Evelyn Harper</td>
                            <td>PRE43178</td>
                            <td>1185</td>
                            <td>98%</td>
                            <td>2014</td>
                        </tr>
                        <tr>
                            <td>Diana Plenty</td>
                            <td>PRE43174</td>
                            <td>1165</td>
                            <td>91%</td>
                            <td>2014</td>
                        </tr>
                        <tr>
                            <td>John Millar</td>
                            <td>PRE43177</td>
                            <td>1175</td>
                            <td>92%</td>
                            <td>2014</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap JS and Chart.js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Example for Chart.js (Exam Results)
        var ctx = document.getElementById('examResultsChart').getContext('2d');
        var examResultsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [{
                    label: 'Students',
                    data: [120, 130, 110, 140, 150, 125],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false,
                }, {
                    label: 'Teachers',
                    data: [90, 80, 95, 100, 85, 70],
                    borderColor: 'rgba(153, 102, 255, 1)',
                    fill: false,
                }]
            }
        });
    </script>
</body>
</html>