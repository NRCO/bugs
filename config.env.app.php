<?php

return array(

	'url' => '',


	'attached' => array(
		'directory' => 'uploads/',
		'format' => 'ICN',
		'method' => 'i'
	),


	'database' => array(
		'driver' => 'mysql',
		'host'  => $_ENV["APP_DB_HOST"],
		'database' => $_ENV["APP_DB_NAME"],
		'username' =>  $_ENV["APP_DB_USER"],
		'password' =>  $_ENV["APP_DB_PASSWORD"]
	),

	/**  Date format
	  * Check http://php.net/manual/en/function.date.php for informations
	  * Internationnal date and time:   				'date_format'=>'Y-m-d H:i',
	  * Internationnal date and time with seconds:  'date_format'=>'Y-m-d H:i:s',
	  * USA way of writing time:							'date_format'=>'F jS \a\t g:i A',
	**/
	'my_bugs_app'=>array(
		'name'=> 'Bugs',
		'date_format'=>'Y-m-d H:i',
	),

	/**  Timezone
	 * Specify your timezone
	 * - http://php.net/manual/en/timezones.php
	 */
	'timezone' => $_ENV["APP_TZ"],

	/**  wysiwyg editor
	  *  Default : 'BasePage'=>'/app/vendor/ckeditor/ckeditor.js',
	  *  No one  : 'BasePage'=>'',
	  *  If you want to use no wysiwyg editor please set this to empty.
	  *  Do not mark this as comment
	  *  Fill out with the entire path, begining with app/
	  *  Editor base page type permitted:  .js   .php
	  ////This (below) for ckeditor
			'directory' = > 'vendor/ckeditor',
			'BasePage' => '/app/vendor/ckeditor/ckeditor.js',
			'name' => 'ckeditor',
	  ////This (below) for Trumbowyg editor
		'directory' = > 'vendor/Trumbowyg/',
		'BasePage' => '/app/vendor/Trumbowyg/trumbowyg.min.js',
		'name' => 'trumbowyg',
	*/
	'editor' => array(
		'BasePage' => '/app/vendor/ckeditor/ckeditor.js',
		'directory' => 'vendor/ckeditor',
		'name' => 'ckeditor',
	),


	/**  Mail
	 * Mail Settings
	 * - Put in the name and email you would like email from Tiny Issue to come from
	 * - This is usually only for setting up new accounts
	 *
	 * Default Mail Transport
	 *	|
	 *	| Possible Values
	 *	| 	mail (PHP Mail Function) --- default
	 *	| 	PHP (php language mail function)
	 *	| 	sendmail (Sendmail - almost the same as 'mail' option but with authentications details)
	 *	| 	gmail (using Google's gmail system)
	 *	| 	pop3 (Define Custom POP3)
	 *	| 	smtp (Define Custom SMTP)
	 *
	 */
	'mail' => array(
		'from' => array(
			'name' =>  $_ENV["APP_SMTP_SENDER"],
			'email' =>  $_ENV["APP_SMTP_EMAIL"]
		),
		/**
		 * Transport Settings
		 * Transport settings if using mail or smtp
		 * 'mail' or 'smtp' must be lower case
		 */
		'transport' => 'mail',
		'sendmail' => array('path' => ''),
		'smtp' => array(
			'server' => 'smtp.gmail.com',
			'port' => 587,
			/*
			* Encryption support, SSL/TLS, used with gmail servers
			* Default: blank
			* 'ssl' or 'tls' must be lower case
			* Here example for gmail server
			*/
			'encryption' => 'tls',
			'username' =>  $_ENV["APP_SMTP_EMAIL"],
			'password' =>  $_ENV["APP_SMTP_PASSWORD"]
		),

		/* Characters encoding
		* Possible values or endless, but most usual are 'UTF-8' (Europe) or 'iso-8859-1' (North-America)
		* Default value : 'UTF-8'
		*/
		'encoding' => 'UTF-8',

		/*
		* Final delivery format
		* Default: multipart/mixed
		* 'text/plain' or 'html'  or 'multipart/mixed' must be lower case
		*/
		'plainHTML' => 'multipart/mixed',
		'linelenght' => 80
	),

	/**  Session key
	 * Put in a random key combination to use as your session keys
	 * You must use 16 or 32 characters
	 * You can use this online generator: http://online-code-generator.com/generate-salt-random-string.php
	 */
	'key' => 'UseAtLeast16char',

	/**  mod_rewrite
	 * True if you are using mod rewrite
	 * False if you are not
	 */
	'mod_rewrite' => true,

	/**  Percentage
	 *Percentage of issue done
	 *Make sure your array count 5 items, the fifth must be 100
	 *In order:  (done, open, inProgress, Testing, SysNeed)
	 *Default: (100,0,10,80,100)
	*/
	'Percent' => array (100,0,10,80,100),

	/**  duration
	 *How long is supposed to be given to fix an issue
	 *Duration in days
	 *Default: 30
	*/
	'duration' => 30,

);
