<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Student Management System</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin Dashboard</h5>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card bg-light text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Students</h5>
                                        <h1 class="card-text">15,000</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Teachers</h5>
                                        <h1 class="card-text">2,000</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Parents</h5>
                                        <h1 class="card-text">5,600</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Earnings</h5>
                                        <h1 class="card-text">$19,300</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Exam Results</h5>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <canvas id="examResultsChart"></canvas>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Students</h5>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="card bg-light text-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Total</h5>
                                                        <h1 class="card-text">15,000</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card bg-light text-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Male</h5>
                                                        <h1 class="card-text">7,500</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card bg-light text-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Female</h5>
                                                        <h1 class="card-text">7,500</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Star Students</h5>
                        <table id="star-students-table" class="table table-bordered">
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
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Exam Results</h5>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card bg-light text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">New Teacher</h5>
                                        <h6 class="card-text">It is a long established readable.</h6>
                                        <p class="card-text">Just now</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card bg-light text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Fees Structure</h5>
                                        <h6 class="card-text">It is a long established readable.</h6>
                                        <p class="card-text">Today</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card bg-light text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">New Course</h5>
                                        <h6 class="card-text">It is a long established readable.</h6>
                                        <p class="card-text">24 Sep 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-primary">View All</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sample data for exam results chart
        const examResultsData = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Teacher',
                data: [30, 60, 45, 70, 50, 35, 65],
                borderColor: 'purple',
                borderWidth: 2
            }, {
                label: 'Students',
                data: [60, 30, 70, 40, 65, 55, 35],
                borderColor: 'cyan',
                borderWidth: 2
            }]
        };

        // Create the exam results chart
        const examResultsChart = document.getElementById('examResultsChart').getContext('2d');
        new Chart(examResultsChart, {
            type: 'line',
            data: examResultsData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        // Sample JavaScript code to fetch student data and populate the star students table

        // Function to fetch data from the backend API
        async function fetchStarStudents() {
            try {
                const response = await fetch('/api/star_students'); // Replace with your backend API endpoint
                const starStudentsData = await response.json();

                // Create a table header row
                const tableHeaderRow = document.createElement('tr');
                const nameHeader = document.createElement('th');
                const idHeader = document.createElement('th');
                const marksHeader = document.createElement('th');
                const percentHeader = document.createElement('th');
                const yearHeader = document.createElement('th');
                nameHeader.textContent = 'Name';
                idHeader.textContent = 'ID';
                marksHeader.textContent = 'Marks';
                percentHeader.textContent = 'Percent';
                yearHeader.textContent = 'Year';
                tableHeaderRow.appendChild(nameHeader);
                tableHeaderRow.appendChild(idHeader);
                tableHeaderRow.appendChild(marksHeader);
                tableHeaderRow.appendChild(percentHeader);
                tableHeaderRow.appendChild(yearHeader);

                // Get the table element
                const starStudentsTable = document.getElementById('star-students-table');
                starStudentsTable.appendChild(tableHeaderRow);

                // Populate the table with student data
                starStudentsData.forEach(student => {
                    const row = document.createElement('tr');
                    const nameCell = document.createElement('td');
                    const idCell = document.createElement('td');
                    const marksCell = document.createElement('td');
                    const percentCell = document.createElement('td');
                    const yearCell = document.createElement('td');

                    nameCell.textContent = student.name;
                    idCell.textContent = student.id;
                    marksCell.textContent = student.marks;
                    percentCell.textContent = student.percent;
                    yearCell.textContent = student.year;

                    row.appendChild(nameCell);
                    row.appendChild(idCell);
                    row.appendChild(marksCell);
                    row.appendChild(percentCell);
                    row.appendChild(yearCell);
                    starStudentsTable.appendChild(row);
                });
            } catch (error) {
                console.error('Error fetching star student data:', error);
            }
        }

        // Call the fetchStarStudents function when the page loads
        window.onload = fetchStarStudents;

    </script>
</body>
</html>
@extends('layouts.master')

@section('content')
    @include('partials/navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
@stop