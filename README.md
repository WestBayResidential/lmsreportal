# lmsreportal.git

This repository is a portal to a collection of pre-formulated reports that 
are derived from the West Bay Residential Service's Professional Development
System, also referred to as **WBLMS**.

## Implementation Notes 

This repository is deployed via my account on _Laravel Forge_, on a server
named _hollow-valley_ and that is instantiated in _Digital Ocean's_ cloud, also
via the Augury account. The repository is cloned onto the server under a local
user account name **forge**, and is located at 

```/home/forge/default```. 

Note that the account is secured with an ssh key pair that is established on
the server via Forge from a public key that is uploaded to the Forge account,
and the private key is on my localhost at:

```~/.ssh/forge_id_rsa```. 

To log on to _hollow-valley_ from my laptop, use the command:

```ssh reportal.forge```

This application was built using the Laravel framework, and there are some
critical aspects of the implementation that are noted here.

### Database Connectivity

There are two MySQL databases supporting the application:
* a local db that contains the application's users login details
* a connection to the MySQL database on the production WBLMS host for sourcing
  data directly from the production system for reporting purposes.

The configuration details specifying database connectivity are specified in:

```/home/forge/default/config/database.php```

You also need to be aware that the configured parameters for the database may
be overriden by environment variable that appear to take precendence. The
environment variables are:

```
MDL_DB_CONNECTION=mysql_mdl
MDL_DB_HOST=127.0.0.1
MDL_DB_PORT=3306
MDL_DB_DATABASE=moodle26
MDL_DB_USERNAME=homestead
MDL_DB_PASSWORD=secret
```

These are just examples. In general, the values specified in the _.env_ file
are not retained in the repo, and are used to modify values in a particular
envrironment. Either remove these values from the file _.ent_, or make sure
that they agree with the values found in the database config file in
_config/database.php_



### Production Database

The connection is hosted over a standing ssh tunnel that is maintained in
a tmux session that should be a continuously running process. Under the user
account **forge** the default ssh configuration file contains details for
launching the tunnel with the correct username ("mdltunnel") and the associated
private key:

```/home/forge/.ssh/id_rsa_mt```

Once attached to the standing TMUX session, the tunnel can be
(re)launched with the command:

```ssh prodwblms.mdltunnel```


