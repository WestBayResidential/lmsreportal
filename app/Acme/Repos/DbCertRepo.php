<?php namespace Acme\Repos;


class DbCertRepo implements CertRepoInterfact {
    
    public function getPaginated()
    {
        
        return Certificate::paginate(50);
    
    }

}

