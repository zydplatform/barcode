<?php

namespace App\Http\Controllers;
Use App\Models\Companies;
Use App\Models\Product;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Picqer;
// use Illuminate\Support\Facades\Validator;

class BarcodeController extends Controller
{
    //
    public function makeBarcode(Request $request){
    	// validate

    	$validator = Validator::make($request->all(),[
    		'barcode' => 'required|string'
    	]);

    	if(!$validator->fails()){
    		$id = $request->input('id');
    		$product = Product::where('id', $id)->first();
    		$label = $request->input('barcode');
    		$qty = $request->input('qty');
    		$barcode_description = $request->input('description');
    		$join=$label.$barcode_description;
    		$barcode_generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    		$barcode = $barcode_generator->getBarcode($join, $barcode_generator::TYPE_EAN_13);

    		return view('pages.printbarcodes',['label' => $label, 'qty' => $qty, 'join'=>$join, 'barcode_description' => $barcode_description, 'barcode' => $barcode], ['product' => $product]);
    		// dd($barcode);
    	}
    	return response()->json($validator->messages(), 400, array(), JSON_PRETTY_PRINT);
    }

    public function getBarcodes(){
    $products = Product::all();
    $companies = Companies::all();

    // $products = Product::get()->toJson(JSON_PRETTY_PRINT);
    // return response($products, 200);
    return view('pages.barcodes', ['products'=>$products], ['companies'=> $companies]);

   }

    public function IssueBarcodes(){
    return view('pages.barcodeissue');

   }

    public function Barcodepayment(Request $request){
            $id = $request->input('id');
            $qty = $request->input('qty');
            $product = Product::where('id', $id)->first();
        return view('barcode-payment', ['qty' => $qty], ['product' => $product]);
    }
}
