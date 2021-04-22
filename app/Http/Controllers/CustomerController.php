<?php

namespace App\Http\Controllers;


use function dd;
use function dump;
use function env;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function json_decode;
use function json_encode;
use function var_dump;


class CustomerController extends Controller
{
    public function regionForm(){
        return view('pie-chart-form');
    }

    public function pieChart(Request $request)
    {
        $region = $request->input('region');
        $url = env('URL') .'?estateAddressPostcode=';
        if ($region){
            $response = Http::withToken(env('TOKEN'))->get( $url . $region);
            $inquiries =[];
            foreach (json_decode($response)->inquiries as $inquiry){
                $funding_object = $inquiry->financing->funding_object;
                $inquiries[$funding_object] =
                    isset($inquiries[$funding_object]) ? $inquiries[$funding_object] + 1 : 1;
            }

            return view('pie-chart')
                ->with('inquiries', json_encode($inquiries));
        }
    }
}
