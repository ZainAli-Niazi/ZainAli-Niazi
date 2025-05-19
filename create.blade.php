@extends('layouts.app')

@section('title', 'Add Teachers  ')
@section('header', 'Add Teachers')

@section('content')
 
<div class="form-section">
    <h4 class="mb-4">Add Staff</h4>
    <form action=" " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Role <span class="required-star">*</span></label>
                <select class="form-select @error('role') is-invalid @enderror" name="role" required>
                    <option value="">Select Role</option>
                    <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                    <option value="Teacher" {{ old('role') == 'Teacher' ? 'selected' : '' }}>Teacher</option>
                    <option value="Accountant" {{ old('role') == 'Accountant' ? 'selected' : '' }}>Accountant
                    </option>
                    <option value="Receptionist" {{ old('role') == 'Receptionist' ? 'selected' : '' }}>
                        Receptionist</option>
                </select>
                @error('role')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Department</label>
                <select class="form-select @error('department') is-invalid @enderror" name="department">
                    <option value="">Select Department</option>
                    <option value="Academic" {{ old('department') == 'Academic' ? 'selected' : '' }}>Academic
                    </option>
                    <option value="Administration"
                        {{ old('department') == 'Administration' ? 'selected' : '' }}>Administration</option>
                    <option value="Accounts" {{ old('department') == 'Accounts' ? 'selected' : '' }}>Accounts
                    </option>
                </select>
                @error('department')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Designation</label>
                <select class="form-select @error('designation') is-invalid @enderror" name="designation">
                    <option value="">Select Designation</option>
                    <option value="Principal" {{ old('designation') == 'Principal' ? 'selected' : '' }}>
                        Principal</option>
                    <option value="Vice Principal"
                        {{ old('designation') == 'Vice Principal' ? 'selected' : '' }}>Vice Principal</option>
                    <option value="Teacher" {{ old('designation') == 'Teacher' ? 'selected' : '' }}>Teacher
                    </option>
                    <option value="Office Staff" {{ old('designation') == 'Office Staff' ? 'selected' : '' }}>
                        Office Staff</option>
                </select>
                @error('designation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label">First Name <span class="required-star">*</span></label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                    name="first_name" placeholder="First Name" required value="{{ old('first_name') }}">
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                    name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Date Of Birth</label>
                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob"
                    value="{{ old('dob') }}">
                @error('dob')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label">Email <span class="required-star">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" placeholder="Email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Mobile <span class="required-star">*</span></label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                    id="phone" name="phone" placeholder="Mobile" required
                    value="{{ old('phone') }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Emergency Mobile</label>
                <input type="tel" class="form-control @error('emergency_phone') is-invalid @enderror"
                    id="emergency_phone" name="emergency_phone" placeholder="Emergency Mobile"
                    value="{{ old('emergency_phone') }}">
                @error('emergency_phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label">Marital Status</label>
                <select class="form-select @error('marital_status') is-invalid @enderror"
                    name="marital_status">
                    <option value="">Select Status</option>
                    <option value="Single" {{ old('marital_status') == 'Single' ? 'selected' : '' }}>Single
                    </option>
                    <option value="Married" {{ old('marital_status') == 'Married' ? 'selected' : '' }}>Married
                    </option>
                    <option value="Divorced" {{ old('marital_status') == 'Divorced' ? 'selected' : '' }}>
                        Divorced</option>
                    <option value="Widowed" {{ old('marital_status') == 'Widowed' ? 'selected' : '' }}>Widowed
                    </option>
                </select>
                @error('marital_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Gender <span class="required-star">*</span></label>
                <select class="form-select @error('gender') is-invalid @enderror" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Date Of Joining</label>
                <input type="date" class="form-control @error('joining_date') is-invalid @enderror"
                    name="joining_date" value="{{ old('joining_date', '2024-08-30') }}">
                @error('joining_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label class="form-label">Staff Photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror"
                    name="photo">
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <div class="staff-photo-container">
                    <img src="https://i.imgur.com/MG1EYrR.png" class="staff-photo" alt="Staff Icon">
                    <small class="text-muted">Staff Photo Preview</small>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label">Father Name <span class="required-star">*</span></label>
                <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                    name="father_name" placeholder="Father's Name" required
                    value="{{ old('father_name') }}">
                @error('father_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Mother Name</label>
                <input type="text" class="form-control @error('mother_name') is-invalid @enderror"
                    name="mother_name" placeholder="Mother's Name" value="{{ old('mother_name') }}">
                @error('mother_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label">Current Address</label>
                <textarea class="form-control @error('current_address') is-invalid @enderror" name="current_address" rows="2"
                    placeholder="Current Address">{{ old('current_address') }}</textarea>
                @error('current_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Permanent Address <span class="required-star">*</span></label>
                <textarea class="form-control @error('permanent_address') is-invalid @enderror" name="permanent_address"
                    rows="2" placeholder="Permanent Address" required>{{ old('permanent_address') }}</textarea>
                @error('permanent_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
 


 
@endsection