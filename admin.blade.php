 @extends('layouts.app')

 @section('title', 'student list')
 @section('header', 'Student list')

 @section('content')
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
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
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
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        Parent Meeting [ Date : 31 Aug, 2024 ] Notice To : Student
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">Meeting info for students and parents.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        Up Coming Holiday [ Date : 20 Sep, 2024 ] Notice To : All
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body">Upcoming holiday notification.</div>
                </div>
            </div>
        </div>
    </div>

 @endsection
