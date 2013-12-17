<?php
    
use Illuminate\Database\Capsule\Manager as DB;

class App{
    
	public static function EloConfigure(){
            
		/*$conf_file = 'db.config.ini';
		$config = parse_ini_file($conf_file);
                    
		var_dump($conf_file);
                    
		if(!$config) throw new DBExeption("App:EloConfigure : could not connect"){
			$capsule = new DB();
			$capsule->addConnection($config);
			$capsule->setAsGlobal();
			$capsule->bootEloquent();
			var_dump($capsule);
		}*/
            $capsule = new DB;
            $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'test',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            ]);
            
            // Make this Capsule instance available globally via static methods...
            $capsule->setAsGlobal();
            // Setup the Eloquent ORM... 
            $capsule->bootEloquent();
	}
            
}
    
    
?>