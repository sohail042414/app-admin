@extends('layouts.app')

@section('content')
<div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page">Users</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- User table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>User List</h5>
              </div>
              <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="dt-responsive table-responsive">
                  <table id="add-row-table" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{ $user->username }}</td>
                          <td>{{ $user->full_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->user_type }}</td>
                          <td>
                            {{-- Check if the logged-in user has permission to update this user --}}
                            @can('update', $user)
                              <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-sm">Edit</a>
                            @endcan
                            {{-- Check if the logged-in user has permission to delete this user --}}
                            @can('delete', $user)
                              <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                            @endcan
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                 
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Main Content ] end -->
      </div>
@endsection
