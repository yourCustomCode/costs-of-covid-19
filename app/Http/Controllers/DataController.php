<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
  public function getTotal()
  {
    $total_rev_lastyear = DB::table('last_rev')->sum('amount');
    $total_real = DB::table('real_rev')->sum('amount');
    $total_loss = $total_rev_lastyear-$total_real;
    $total_credit = DB::table('granted_cred')->sum('amount');
    $loss_left = $total_loss - $total_credit;

    return [
      "revenue_loss_total" => $total_loss,
      "revenue_loss_left" => $loss_left,
      "credit_sum" => $total_credit
    ];
  }

  public function getRecentCredits()
  {
      return DB::table('granted_cred')->select('amount', 'date_granted')->orderByRaw('id DESC')->limit(10)->get();
  }

    public function getRecentRevLast()
    {
        return DB::table('last_rev')->select('amount')->orderByRaw('id DESC')->limit(10)->get();
    }

    public function getRecentRevReal()
    {
        return DB::table('real_rev')->select('amount')->orderByRaw('id DESC')->limit(10)->get();
    }

    public function getRecentRevExp()
    {
        return DB::table('last_rev')->select('amount')->orderByRaw('id DESC')->limit(10)->get();
    }
}