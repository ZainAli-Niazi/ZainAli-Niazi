<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>YB School Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            padding: 1rem;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
            width: 250px;
            z-index: 1030;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
        }


        .sidebar .nav-item i {
            width: 20px;
        }

        .main-content {
            flex: 1;
            overflow-y: auto;
            padding: 30px;
            background-color: #f1f5f9;
        }

        .form-section {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            max-width: 80%;
        }

        .form-control,
        .form-select {
            border-radius: 6px;
        }

        .form-label {
            font-weight: 500;
        }

        .content-wrapper {
            margin-left: 270px;
            padding: 30px;
        }

        .required-star {
            color: red;
            font-weight: bold;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #4a6cf7;
            color: #ffffff !important;
            border-radius: 10px
        }

        .content-area {
            margin-left: 250px;
            padding: 30px;
            min-height: 100vh;
        }

        .card-box {
            border-radius: 12px;
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        .card-box i {
            font-size: 24px;
        }

        .notice-board {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
        }

        .footer {
            text-align: center;
            padding: 15px;
            color: #666;
        }

        .footer a {
            color: #dc3545;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="layout">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="text-center mb-4">
                <img src="https://i.imgur.com/IkK1pMK.png" width="80" alt="Logo" />
                <h6 class="mt-2 fw-bold">YB SCHOOL<br><small class="text-muted">MANAGEMENT</small></h6>
            </div>


            <!-- Sidebar nav -->
            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="fas fa-home me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#academicsMenu" role="button"
                        aria-expanded="false" aria-controls="academicsMenu">
                        <i class="fas fa-layer-group me-2"></i> Academics
                    </a>
                    <div class="collapse ps-3" id="academicsMenu">
                        <a href="#" class="nav-link small text-dark">Academic Years</a>
                        <a href="#" class="nav-link small text-dark">Class</a>
                        <a href="#" class="nav-link small text-dark">Sections</a>
                        <a href="#" class="nav-link small text-dark">Subjects</a>
                        <a href="#" class="nav-link small text-dark">Assign Class Teacher</a>
                        <a href="#" class="nav-link small text-primary fw-bold">Assign Subject</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#communicateMenu" role="button"
                        aria-expanded="false" aria-controls="communicateMenu">
                        <i class="fas fa-bullhorn me-2"></i> Communicate
                    </a>
                    <div class="collapse ps-3" id="communicateMenu">
                        <a href="#" class="nav-link small text-dark">Notice Board</a>
                        <a href="#" class="nav-link small text-dark">SMS</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#studentsInfoMenu" role="button"
                        aria-expanded="false" aria-controls="studentsInfoMenu">
                        <i class="fas fa-user-graduate me-2"></i> Students Info
                    </a>
                    <div class="collapse ps-3" id="studentsInfoMenu">
                        <a href=" " class="nav-link small text-dark">Student List</a>
                        <a href="#" class="nav-link small text-dark">Admission</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#FeesMenu" role="button"
                        aria-expanded="false" aria-controls="FeesMenu">
                        <i class="fa-solid fa-money-check-dollar me-2"></i> Fees
                    </a>
                    <div class="collapse ps-3" id="FeesMenu">
                        <a href=" " class="nav-link small text-dark"> Add Fees</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#homeworkMenu" role="button"
                        aria-expanded="false" aria-controls="homeworkMenu">
                        <i class="fas fa-book me-2"></i> HomeWork
                    </a>
                    <div class="collapse ps-3" id="homeworkMenu">
                        <a href="#" class="nav-link small text-dark">Add Homework</a>
                        <a href="#" class="nav-link small text-dark">Homework List</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#StudentReportMenu" role="button"
                        aria-expanded="false" aria-controls="StudentReportMenu">
                        <i class="fas fa-user-graduate me-2"></i> Student Report
                    </a>
                    <div class="collapse ps-3" id="StudentReportMenu">
                        <a href="#" class="nav-link small text-dark">Progress Report</a>
                        <a href="#" class="nav-link small text-dark">Student List</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#Role&PermissionMenu"
                        role="button" aria-expanded="false" aria-controls="Role&PermissionMenu">
                        <i class="fa-solid fa-gavel"></i> Role & Permission
                    </a>
                    <div class="collapse ps-3" id="Role&PermissionMenu">
                        <a href="#" class="nav-link small text-dark">Progress Report</a>
                        <a href="#" class="nav-link small text-dark">Homework List</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#AdministratorMenu" role="button"
                        aria-expanded="false" aria-controls="AdministratorMenu">
                        <i class="fa-solid fa-user-tie"></i> Administrator
                    </a>
                    <div class="collapse ps-3" id="AdministratorMenu">
                        <ul class="nav flex-column ms-3">
                            <a href="#" class="nav-link small text-dark">Department</a>
                            <a href="#" class="nav-link small text-dark">Designation</a>
                            <a href="#" class="nav-link small text-dark">Staff</a>
                            <a href="#" class="nav-link small text-dark">User Settings</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#LeaveMenu" role="button"
                        aria-expanded="false" aria-controls="LeaveMenu">
                        <i class="fa-solid fa-lungs-virus"></i> Leave
                    </a>
                    <div class="collapse ps-3" id="LeaveMenu">
                        <a href="#" class="nav-link small text-dark">Leave Requests</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#SettingsMenu" role="button"
                        aria-expanded="false" aria-controls="SettingsMenu">
                        <i class="fa-solid fa-gear"></i> Settings
                    </a>
                    <div class="collapse ps-3" id="SettingsMenu">
                        <a href="#" class="nav-link small text-dark">Profile Settings</a>

                    </div>
                </li>
            </ul>
        </div>


        
        <!-- Main Content -->
        <div class="content-area">
            <div class="d-flex justify-content-between">
                <h3 class="fw-bold">Dashboard</h3>
                <a href="#" class="text-primary">LogOut</a>
            </div>

            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="card-box bg-primary">
                        <i class="fas fa-user-graduate"></i>
                        <h5 class="mt-2">Students</h5>
                        <h6>19</h6>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-box bg-info">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h5 class="mt-2">Teachers</h5>
                        <h6>8</h6>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card-box bg-success">
                        <i class="fas fa-users-cog"></i>
                        <h5 class="mt-2">Staff</h5>
                        <h6>8</h6>
                    </div>
                </div>
            </div>

            <!-- Notice Board -->
            <div class="notice-board">
                <h5 class="mb-3">Notice Board</h5>

                <div class="accordion" id="noticeAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                Holiday [ Date : 29 Aug, 2024 ] Notice To : Teacher
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">Holiday details for teachers.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                Homework Details for Students [ Date : 30 Aug, 2024 ] Notice To : Student
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">Homework details for students.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                Gangesh Churthi Holiday [ Date : 07 Sep, 2024 ] Notice To : All
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">All-school holiday information.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                Parent Meeting [ Date : 31 Aug, 2024 ] Notice To : Student
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">Meeting info for students and parents.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                Up Coming Holiday [ Date : 20 Sep, 2024 ] Notice To : All
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse">
                            <div class="accordion-body">Upcoming holiday notification.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer mt-5">
                2025 © Niazi School Management — Developed by <a href="#">ZainAli</a>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
