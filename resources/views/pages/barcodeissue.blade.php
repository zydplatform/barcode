<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GS1ugandaAdministrationsystem') }}</title>
        <link href="{{ asset('argon') }}/img/brand/small.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    </head>
<body>
                      <div class="card-header bg-transparent pb-5">
                                                <div class="text-center">
                        <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/brand/small.png"></span>
                        <h2>Issue & Generate Barcodes</h2>
                        <button type="button" class="btn btn-success">                    <a class="nav-link" href="{{ route('home') }}" style="color: white;">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('GS1 Dashboard') }}
                    </a></button>
                      </div>
                    </div>
       <form role="form" method="POST" action="{{ route('generatebarcodes') }}">
                            @csrf
  <div class="row">
        <div class="col-md-2"></div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Business Name</label>
        <input type="text" class="form-control" id="company" placeholder="Business Name">
      </div>
      <div class="form-group">
        <label>GS1 Member Prefix</label>
        <input type="text" class="form-control" id="gs1prefix" value="655" disabled>
      </div>
      <div class="form-group">
        <label>Company Prefix</label>
        <input type="text" class="form-control" id="companyprefix" value="45225" disabled>
      </div>
            <label>Item Number</label><br>
        <div class="form-group">
        <div class="input-group mb-4">

          <select class="form-control"><option>00001</option>
            <option>00002</option><option>00003</option><option>00004</option><option>00005</option>
            <option>0000</option><option>00007</option><option>00008</option>
          </select>
        </div>
      </div>
            <!-- <div class="form-group">
        <label>Item Number</label><br>
        <input type="number" placeholder="Item number" class="form-control" >
      </div> -->
    </div>
    <div class="col-md-4">

      <div class="form-group">
        <label>Quantity of Barcode Images</label><br>
        <input type="number" name="qty" id="qty" placeholder="number of barcodes" class="form-control" >
      </div>
        <label>Select Barcode Type </label><br>
        <div class="form-group">
        <div class="input-group mb-4">

          <select class="form-control"><option>EAN-13 </option>
            <option>UPC-A</option><option>EAN-8</option><option>UPC-E</option><option>ITF-14</option>
            <option>GS1 Data Matrix</option><option>GS1 QR Code</option><option>GS1-12</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label>Item Barcode Generated [GTIN]</label><br>
        <input type="text" id="barcode" name="barcode" value="6554522535402" class="form-control">
      </div>
    </div>
  </div>
      </div>
      <div class="form-group" style="margin-left: 45%;">
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-default">Process Barcode</button>
      </div>
    </div>
  </div>
</div>
        <div class="col-md-2"></div>
    </div>

</form>

@include('layouts.footers.auth')
    </div>
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
</body>
</html>