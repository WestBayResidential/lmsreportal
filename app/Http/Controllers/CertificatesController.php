<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificatesController extends Controller
{
    public function index()
    {
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
            ->where([ ['userid', '>', '5'], ['userid', '<', '100'] ])
            ->get();
    
        return view('certificates.certlist', compact('certs'));
        //return $certs;
    }

}
