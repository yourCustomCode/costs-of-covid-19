<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Str;

class FormController extends Controller
{
  public function updateUser()
  {
    $industry = Request::get('industry');
    $street = Request::get('street');
    $zip_code = Request::get('zip-code');
    $city = Request::get('city');
    $country = Request::get('country');
    $tax_id = Request::get('tax-id');
    $vat_id = Request::get('vat-id');
    $reg_id = Request::get('reg-id');
    $iban = Request::get('iban');
    $id = Request::get('id');
    $name= Request::get('name');

    DB::table('users')->where('id', '=', $id)->update([
        'industry' => $industry,
        'street' => $street,
        'zip_code' => $zip_code,
        'city' => $city,
        'country' => $country,
        'tax_id' => $tax_id,
        'vat_id' => $vat_id,
        'reg_id' => $reg_id,
        'iban' => $iban,
        'name' => $name
    ]);

    return redirect(RouteServiceProvider::HOME);
  }

  public function addRevLast()
  {
    $id = Request::get('id');
    $amount = Request::get('rev-last');
    $year = 2019;
    //$year = Request::get('year');
    $doc_id = $id."-".Str::random(10);

    Request::file('tax-ret')->storeAs('public/', $doc_id.'.pdf');
    DB::table('last_rev')->insert([
        'userid' => $id,
        'amount' => $amount,
        'year' => $year,
        'doc_id' => $doc_id
    ]);

    return redirect(RouteServiceProvider::HOME);
  }

  public function addRevCurrent()
  {
    $id = Request::get('id');
    $amountreal = Request::get('rev-real');
    $amountexp = Request::get('rev-exp');
    $start = Request::get('start-date');
    $end = Request::get('end-date');

    DB::table('real_rev')->insert([
        'userid' => $id,
        'amount' => $amountreal,
        'start_date' => $start,
        'end_date' => $end
    ]);

    DB::table('exp_rev')->insert([
        'userid' => $id,
        'amount' => $amountexp,
        'start_date' => $start,
        'end_date' => $end
    ]);

    return redirect(RouteServiceProvider::HOME);
  }

  public function test()
  {
    $input = Request::all();
    return $input;
  }
}
