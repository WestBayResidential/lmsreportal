<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificatesController extends Controller
{
    public function select()
    {

        //dd(request()->all());

        $period = request("daterange");
        $startperiod = substr($period, 10);
        $endperiod = substr($period, -10);

        $start_uxtime = strtotime($startperiod);
        $end_uxtime = strtotime($endperiod);

echo $start_uxtime;

        $certs = DB::connection('mysql_mdl')->table('certificate_issues')
            ->select('certificate_issues.id', 
                     'userid', 
                     'certificateid', 
                     'code', 
                     DB::raw('from_unixtime(`mdl_certificate_issues`.`timecreated`) as award'),
                     'lastname',
                     'name')
            ->join('user', 'certificate_issues.userid', '=', 'user.id')
            ->join('certificate', 'certificate_issues.certificateid', '=', 'certificate.id')
            ->wherebetween('certificate_issues.timecreated', [$start_uxtime, $end_uxtime] )
            ->get();
    
        return view('certificates.certlist', compact('certs'));
        //return $certs;
    }


}
