<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CertificatesController extends Controller
{
    public function select()
    {

        //dd(request()->all());

        $period = request("daterange");
        $startperiod = substr($period, 0, 10);
        $endperiod = substr($period, -10);

        $start_uxtime = strtotime($startperiod);
        $end_uxtime = strtotime($endperiod);

        Log::debug('String period: '.$period);
        Log::debug('String start period: '.$startperiod);
        Log::debug('Converted start time: '.$start_uxtime);
        Log::debug('String end period: '.$endperiod);
        Log::debug('Converted end time: '.$end_uxtime);

        $certs = DB::connection('mysql_mdl')->table('certificate_issues')
            ->select('certificate_issues.id', 
                     'certificate_issues.userid', 
                     'certificateid', 
                     'code', 
                     DB::raw('from_unixtime(`mdl_certificate_issues`.`timecreated`) as award'),
                     'lastname',
                     'firstname',
                     'data',
                     'name')
            ->join('user_info_data', 'certificate_issues.userid', '=', 'user_info_data.userid')
            ->join('user', 'certificate_issues.userid', '=', 'user.id')
            ->join('certificate', 'certificate_issues.certificateid', '=', 'certificate.id')
            ->where('user_info_data.fieldid', '=', '7')
            ->wherebetween('certificate_issues.timecreated', [$start_uxtime, $end_uxtime] )
            ->get();
    
        return view('certificates.certlist', compact('certs'));
        //return $certs;
    }


}
