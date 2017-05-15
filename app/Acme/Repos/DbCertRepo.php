<?php namespace Acme\Repos;

use Acme\Certificate;


class DbCertRepo implements CertRepoInterface {
    
    public function getPaginated()
    {
        
        return Certificate::paginate(50);
    
    }

}

