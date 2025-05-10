@extends('layouts.sneat')

@section('body')
<div class="container-xxl container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive text-nowrap">
                <div class="d-flex">
                    <div class="col-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Member Details 🎉</h5>
                            <div class="card col-12">
                                <div class="col-12">
                                    <table class="table table-dark col-12">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Home Address</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Alternative Phone</th>
                                                <th>Gender</th>
                                                <th>Package Status</th>
                                                <th>Current Weight</th>
                                                <th>NID/Birth Certificate Number</th>
                                                <th>RFID No.</th>
                                                <th>Status</th>
                                                <th>Photo</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        @forelse ($user_details as $user)
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <td>{{ $user->applicant_name }}</td>
                                                    <td>{{ $user->home_address }}</td>
                                                    <td>{{ $user->applicant_email }}</td>
                                                    <td>{{ $user->phone_number }}</td>
                                                    <td>{{ $user->alternative_phone_number }}</td>
                                                    <td>{{ $user->gender }}</td>
                                                    <td>{{ $user->package_status }}</td>
                                                    <td>{{ $user->current_weight }}</td>
                                                    <td>{{ $user->nid_number }}</td>
                                                    <td>{{ $user->rfid_number }}</td>
                                                    <td>
                                                        <li data-bs-toggle="tooltip"  class="avatar avatar-xs pull-up">
                                                            <img src="{{ asset('images/applicant_image/'.$user->applicant_image) }}" alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                    </td>
                                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @empty
                                            <tbody>
                                                <tr>
                                                    <td colspan="13" class="text-center">No members found.</td>
                                                </tr>
                                            </tbody>
                                        @endforelse

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
