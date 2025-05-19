 @extends('layouts.app')

 @section('title', 'student list')
 @section('header', 'Student list')

 @section('content')

     <button class="fullscreen-toggle" id="fullscreenToggle" title="Toggle Fullscreen">
         <i class="fas fa-expand"></i>
     </button>
     <div class="container-fluid">
         <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
             <h1 class="h3 mb-0 text-gray-800">Student List</h1>
             <a href="#" class="btn btn-primary">
                 <i class="fas fa-plus me-2"></i> Add Student
             </a>
         </div>

         <!-- Search and Filter Card -->
         <div class="card search-filter-card mb-4">
             <div class="card-body">
                 <h5 class="card-title mb-4"><i class="fas fa-search me-2"></i>Search & Filter</h5>
                 <form>
                     <div class="row g-3">
                         <div class="col-md-3">
                             <label for="studentName" class="form-label">Student Name</label>
                             <input type="text" class="form-control" id="studentName" placeholder="Enter name">
                         </div>
                         <div class="col-md-2">
                             <label for="rollNumber" class="form-label">Roll Number</label>
                             <input type="text" class="form-control" id="rollNumber" placeholder="Roll no">
                         </div>
                         <div class="col-md-2">
                             <label for="classSelect" class="form-label">Class</label>
                             <select class="form-select" id="classSelect">
                                 <option selected value="">All Classes</option>
                                 <option>Class 1</option>
                                 <option>Class 2</option>
                                 <option>Class 3</option>
                                 <option>Class 4</option>
                                 <option>Class 5</option>
                             </select>
                         </div>
                         <div class="col-md-2">
                             <label for="sectionSelect" class="form-label">Section</label>
                             <select class="form-select" id="sectionSelect">
                                 <option selected value="">All Sections</option>
                                 <option>Section A</option>
                                 <option>Section B</option>
                                 <option>Section C</option>
                             </select>
                         </div>
                         <div class="col-md-3 d-flex align-items-end">
                             <button type="submit" class="btn btn-primary me-2">
                                 <i class="fas fa-search me-2"></i> Search
                             </button>
                             <button type="reset" class="btn btn-outline-secondary">
                                 <i class="fas fa-sync-alt me-2"></i> Reset
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>

         <!-- Student List Card -->
         <div class="card">
             <div class="card-header">
                 <h5 class="card-title mb-0"><i class="fas fa-list me-2"></i>Student Records</h5>
             </div>
             <div class="card-body p-0">
                 <div class="table-container" id="studentTableContainer">
                     <table class="table table-hover mb-0">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Photo</th>
                                 <th>Student Name</th>
                                 <th>Admission ID</th>
                                 <th>Roll No</th>
                                 <th>Class</th>
                                 <th>Section</th>
                                 <th>Father Name</th>
                                 <th>Phone</th>
                                 <th>Status</th>
                                 <th>Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                 </td>
                                 <td>Md. Mehedi Hasan</td>
                                 <td>ST-2023-001</td>
                                 <td>101</td>
                                 <td>Class 1</td>
                                 <td>Section A</td>
                                 <td>Md. Rahman</td>
                                 <td>+8801712345678</td>
                                 <td><span class="badge badge-active">Active</span></td>
                                 <td>
                                     <div class="action-buttons">
                                         <button class="action-btn action-btn-view">
                                             <i class="fas fa-eye"></i>
                                         </button>
                                         <button class="action-btn action-btn-edit">
                                             <i class="fas fa-edit"></i>
                                         </button>
                                         <button class="action-btn action-btn-delete">
                                             <i class="fas fa-trash"></i>
                                         </button>
                                     </div>
                                 </td>
                             </tr>
<tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                

                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" alt="Student" class="student-img">
                                    </td>
                                    <td>Sara Ahmed</td>
                                    <td>ST-2023-002</td>
                                    <td>102</td>
                                    <td>Class 1</td>
                                    <td>Section A</td>
                                    <td>Usman Ahmed</td>
                                    <td>+8801812345678</td>
                                    <td><span class="badge badge-active">Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn action-btn-view">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="action-btn action-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="action-btn action-btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                

                         </tbody>
                     </table>
                 </div>
             </div>

         </div>
     </div>
 @endsection
