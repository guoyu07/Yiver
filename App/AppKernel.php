<?php
 use cms\HttpKernel\HttpKernel as HttpKernel;
 Class AppKernel extends HttpKernel
 {
 	

 	protected $middleware = [
        'App\Http\MiddleWare\Authenticate',
    ];

 	public function __construct()
 	{
 		parent::__construct();837dd5fbbf5167d910f4287c8675d297866fd576
 	}

 	public function registerAlias()
 	{
 		$alias = array(
 			'Controller'=>'cms\HttpKernel\Controller',
 			'Request'=>'cms\Http\Request',
 			'View'=>'cms\Facades\View',
 			'Response'=>'cms\Http\Response',
 			'Config'=>'cms\Config\Config',
 			'ActiveRecord'=>'cms\AR\ActiveRecord',
 			'Url'=>'cms\Http\Url',
 			'MySql'=>'cms\Db\Mysql',
 		);
 		parent::registerCoreAlias($alias);
 	}
 }
?>