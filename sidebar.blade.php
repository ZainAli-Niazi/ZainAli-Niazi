 <!-- Sidebar -->
 <div class="sidebar">
     <div class="sidebar-header">
         <div class="text-center mb-4">
             <img src="{{ URL::to('/uploads/images/zain.JPG') }}" width="70" height="70"  border-radius="50%
             "   alt="zain ali" class="rounded-circle">
             <h6 class="mt-2 fw-bold">Niazi School<br>MANAGEMENT</small></h6>
         </div>
     </div>
            

 




     <!-- Navigation Menu -->
     <ul class="nav flex-column py-3">
         <li class="nav-item">
             <a href="{{ route('dashboard.admin') }}" class="nav-link active">
                 <i class="fas fa-home"></i>
                 Dashboard
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#academicsMenu">
                 <i class="fas fa-layer-group"></i>
                 Academics
                 <i class="fas fa-chevron-down ms-auto" style="font-size: 0.8rem;"></i>
             </a>
             <div class="collapse" id="academicsMenu">
                 <a href="#" class="nav-link small">Academic Years</a>
                 <a href="#" class="nav-link small">Class</a>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#studentMenu">
                 <i class="fas fa-user-graduate"></i>
                 Students
                 <i class="fas fa-chevron-down ms-auto" style="font-size: 0.8rem;"></i>
             </a>
             <div class="collapse" id="studentMenu">
                 <a href="{{ route('students.create') }}" class="nav-link">Add Student</a>
                 <a href="{{route('students.list')}}" class="nav-link">Student List</a>
                 <a href="#" class="nav-link">Attendance</a>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#staffMenu">
                 <i class="fas fa-chalkboard-teacher"></i>
                 Staff
                 <i class="fas fa-chevron-down ms-auto" style="font-size: 0.8rem;"></i>
             </a>
             <div class="collapse" id="staffMenu">
                 <a href="#" class="nav-link">Teachers</a>
                 <a href="#" class="nav-link">Staff Members</a>
                 <a href="#" class="nav-link">Add Staff</a>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#TeachersMenu">
                 <i class="fas fa-chalkboard-teacher"></i>
                 Teachers
                 <i class="fas fa-chevron-down ms-auto" style="font-size: 0.8rem;"></i>
             </a>
             <div class="collapse" id="TeachersMenu">
                 <a href="{{ route('teachers.create') }}" class="nav-link">Add Teacher</a>
                 <a href="#" class="nav-link">Teachers List</a>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#FeesMenu" role="button" aria-expanded="false"
                 aria-controls="FeesMenu">
                 <i class="fa-solid fa-money-check-dollar me-2"></i> Fees
                 <i class="fas fa-chevron-down ms-auto" style="font-size: 0.8rem;"></i>
             </a>
             <div class="collapse ps-3" id="FeesMenu">
                 <a href="#" class="nav-link small text-dark">Add Fees</a>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#SettingsMenu" role="button" aria-expanded="false"
                 aria-controls="SettingsMenu">
                 <i class="fa-solid fa-gear me-2"></i> Settings
                 <i class="fas fa-chevron-down ms-auto" style="font-size: 0.8rem;"></i>
             </a>
             <div class="collapse ps-3" id="SettingsMenu">
                 <a href="#" class="nav-link small text-dark">Profile Settings</a>
             </div>
         </li>
     </ul>
 </div>


 {{--     
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-book"></i>
                    Examination
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-line"></i>
                    Reports
                </a>
            </li> --}}
