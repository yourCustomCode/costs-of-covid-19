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

        $recent_credits = [];
        $recent_credits_raw = DB::table('granted_cred')->select('amount')->orderByRaw('id DESC')->limit(4)->get();
        foreach (json_decode($recent_credits_raw, true) as $item) {
            $recent_credits[] = $item["amount"];
        }

        return [
                "revenue_loss_total" => $total_loss,
                "revenue_loss_left" => $loss_left,
                "credit_sum" => $total_credit,
                "recent_col_1" => $recent_credits
            ];
        }
}