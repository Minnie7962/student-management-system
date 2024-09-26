<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-graduate"></i>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chalkboard-teacher"></i>
                                Teachers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-book"></i>
                                Subjects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-book-reader"></i>
                                Library
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users"></i>
                                Parents
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-dollar-sign"></i>
                                Earnings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-calendar-check"></i>
                                Attendance
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <!-- Key Metrics -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Students</h5>
                                <p class="card-text">15.00K</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Teachers</h5>
                                <p class="card-text">2.00K</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Parents</h5>
                                <p class="card-text">5.6K</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Earnings</h5>
                                <p class="card-text">$19.3K</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <canvas id="examResultsChart"></canvas>
                    </div>
                </div>

                <!-- Student Performance List -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h3>Student Performance</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Evelyn Harper</span>
                                <span>PRE43178</span>
                                <span>96%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Diane Plenty</span>
                                <span>PRE43174</span>
                                <span>91%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>John Millar</span>
                                <span>PRE43187</span>
                                <span>92%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('examResultsChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Exam Results',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },
            options: {}
        });
    </script>
</body>
</html>
