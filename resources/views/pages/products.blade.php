@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
  <!-- Main content -->
  <div class="main-content" id="panel">

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Products</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Company Name</th>
                    <th scope="col" class="sort" data-sort="name">Product Name</th>
                    <th scope="col" class="sort" data-sort="name">Product Price</th>
                    <th scope="col" class="sort" data-sort="budget">Product Specifications</th>
                    <th scope="col" class="sort" data-sort="name">Product Brand</th>
                    <th scope="col" class="sort" data-sort="status">Quantity</th>
                    <th scope="col" class="sort" data-sort="name">Item Reference Number</th>
                    <th scope="col" class="sort" data-sort="name">MFG date</th>
                    <th scope="col" class="sort" data-sort="name">EXP date</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach ($companies as $company)
                  <tr>

                    <th scope="row">
                      
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$company->name}}</span>
                        </div>
                      </div>
                      
                    </th>
                    
                    @foreach ($products as $product)
                    <td class="budget">
                      {{$product->productname}}
                    </td>
                    <td class="budget">
                      {{$product->productprice}}
                    </td>
                    <td>{{$product->productdetails}}</td>
                    <td class="budget">{{$product->productbrand}}</td>
                    <td class="budget">{{$product->productqty}}</td>
                    <td class="budget">{{$product->item_reference_number}}</td>
                    <td class="budget">{{$product->mfgdate}}</td>
                    <td class="budget">{{$product->expdate}}</td>
<!--                     <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td> -->
                    <td>    <!-- delete product --><a data-toggle="modal" data-target="#deleteModal" title="delete"><i class="p-2 fa fa-trash" style="color: #ff5721;cursor: pointer;"></i></a>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong style="color: #ff5721;">Delete Company</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color: rgba(255,10,51,1);">Are you sure you want to delete this Company ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-md btn-warning" name="delete"><a href="#" style="color: white;">Confirm Delete</a></button>
        </div>
      </div>
    </div>
  </div>
  <!-- delete product --></td>
                  </tr>
                  
                </tbody>
                @endforeach
                @endforeach
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
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