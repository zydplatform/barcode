@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--4">
        <div class="row">

        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Sales</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">GS1-Company code</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Total Barcodes </th>
                                    <th scope="col">Total Products</th>
                                    <th scope="col">Total Sales</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>Planet Systems</td>
                                    <td>gs1ug-9091</td>
                                    <td>planetsystems.ceo.ug</td>
                                    <td>4000</td>
                                    <td>230</td>
                                    <td>2100</td>
                                    
                                </tr>
                                                                <tr>
                                    <td>Jesa Dairy Ltd</td>
                                    <td>gs1ug-75681</td>
                                    <td>jesa.ceo.ug</td>
                                    <td>450</td>
                                    <td>20</td>
                                    <td>23900</td>
                                    
                                </tr>
                                                                <tr>
                                    <td>Uganda Batteries</td>
                                    <td>gs1ug-7091</td>
                                    <td>ugbatteries.ceo.ug</td>
                                    <td>450</td>
                                    <td>630</td>
                                    <td>789</td>
                                     
                                </tr>
                                                                <tr>
                                    <td>Mukwano Industries</td>
                                    <td>gs1ug-4561</td>
                                    <td>mukwano.ceo.ug</td>
                                    <td>560</td>
                                    <td>20</td>
                                    <td>800</td>
                                     
                                </tr>
                                 
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