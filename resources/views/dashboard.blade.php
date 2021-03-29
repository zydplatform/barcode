@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-12 mb-5 mb-xl-0 ">
                <!-- col-xl-4 -->
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                                <h2 class="mb-0">Monthly Total Sales</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="chart-orders" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Companies</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Owners</th>
                                    <th scope="col">Ownership</th>
                                    <th scope="col">Business RegNo</th>
                                    <th scope="col">TIN number</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                <tr>
                                    <th scope="row">
                                        {{ $company->name }}
                                    </th>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->ownership }}</td>
                                    <td>{{ $company->owners }}</td>
                                    <td>{{ $company->businessregno }}</td>
                                    <td>{{ $company->tax_id_number }}</td>
                                    <!-- <i class="fas fa-arrow-up text-success mr-3"></i> -->
                                     <td><div class="d-flex flex-row">
                        <form method="delete">
                        @csrf
                        @method('delete')
                        <a data-toggle="modal" data-target="#deleteModal" title="delete"><i class="p-2 fa fa-trash" style="color: #ff5721;cursor: pointer;"></i></a></form></div></td>
                                </tr>
                                 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong style="color: #ff5721;">Delete Company</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color: rgba(255,10,51,1);">Are you sure you want to delete this company ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-md btn-warning" name="delete"><a href="delete-company/{{ $company->id }}" style="color: white;">Confirm Delete</a></button>
        </div>
      </div>
    </div>
  </div>@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush