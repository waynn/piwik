<?php
$translations = array(
	'Installation_Installation' => 'Installation',
	'Installation_InstallationStatus' => 'Installation status',
	'Installation_PercentDone' => '%s %% Done',
		
	'Installation_NoConfigFound' => 
		"The Piwik configuration file couldn't be found and you are trying to access a Piwik page.<br>".
		"<b>&nbsp;&nbsp;&raquo; You can <a href='index.php'>install Piwik now</a></b>".
		"<br><small>If you installed Piwik before and have some tables in your DB, don't worry,".
		"you can reuse the same tables and keep your existing data!</small>",

	'Installation_MysqlSetup' => 'Mysql database setup',
	'Installation_MysqlErrorConnect' => 'Error while trying to connect to the Mysql database',

	'Installation_JsTag' => 'Javascript tag',	
	'Installation_JsTagHelp' => 
		'<p>To count all visitors, you must insert the javascript code on all of your pages.</p>'.
		'<p>Your pages do not have to be made with PHP, Piwik will work on all kinds of pages (whether it is HTML, ASP, Perl or any other languages).</p>'.
		'<p>Here is the code you have to insert: (copy and paste on all your pages) </p>',

	'Installation_Congratulations' => 'Congratulations',
	'Installation_ContratulationsHelp' => 
		'<p>Congratulations! Your Piwik installation is complete.</p>'.
		'<p>Make sure your javascript code is entered on your pages, and wait for your first visitors!</p>',
	'Installation_GoToPiwik' => 'Go to Piwik',

	'Installation_SetupWebsite' => 'Setup a website',
	'Installation_SetupWebsiteError' => 'There was an error when adding the website',

	'Installation_GeneralSetup' => 'General Setup',
	'Installation_GeneralSetupSuccess' => 'General Setup configured with success',

	'Installation_SystemCheck' => 'System check',
	'Installation_SystemCheckPhp' => 'PHP version',
	'Installation_SystemCheckPdo' => 'Pdo extension',				
	'Installation_SystemCheckPdoMysql' => 'Pdo_Mysql extension',
	'Installation_SystemCheckPdoError' => 'You need to enable the <code>php_pdo</code> and <code>php_pdo_mysql</code> extensions in your php.ini file.',			
	'Installation_SystemCheckPdoErrorHelp' => 
		"On a windows server you can add the lines 	<code>extension=php_pdo.dll\nextension=php_pdo_mysql.dll</code> in your php.ini".
		'<br><br>On a Linux server you can compile php with the following option <code>--with-pdo-mysql </code>'.
		'<br><br>More information on the <a style="color:red" href="http://php.net/pdo">PHP website</a>.',
	'Installation_SystemCheckPhpXml' => 'PHP-XML extension',
	'Installation_SystemCheckWriteDirs' => 'Directories with write access',
	'Installation_SystemCheckWriteDirsHelp' => 'To fix this error on your Linux system, try typing in the following command(s)',
	'Installation_SystemCheckMemoryLimit' => 'Memory limit',	
	'Installation_SystemCheckMemoryLimitHelp' => 
		'On a high traffic website, the archiving process may require more memory than currently allowed.'.
		'<br>See the directive memory_limit in your php.ini file if necessary.',
	'Installation_SystemCheckGD' => 'GD &gt; 2.x (graphics)',
	'Installation_SystemCheckGDHelp' => 'The sparklines (small graphs) will not work.',
	'Installation_SystemCheckTimeLimit' => 'set_time_limit() allowed',
	'Installation_SystemCheckTimeLimitHelp' => 
		'On a high traffic website, executing the archiving process may require more time than currently allowed.'.
		'<br>See the directive max_execution_time  in your php.ini file if necessary',
	'Installation_SystemCheckMail' => 'mail() allowed',
	'Installation_SystemCheckError' => 'An error occured - must be fixed before you proceed',
	'Installation_SystemCheckWarning' => 'Piwik will work normally but some features may be missing',
	
	'Installation_Tables' => 'Creating the tables',
	'Installation_TablesWarning' => 'Some <span id="linkToggle">Piwik tables</span> are already installed in the DB',
	'Installation_TablesFound' => 'The following tables have been found in the database',
	'Installation_TablesWarningHelp' => 'Either choose to reuse the existing database tables or select a clean install to erase all existing data in the database.',
	'Installation_TablesReuse' => 'Reuse the existing tables',
	'Installation_TablesDelete' => 'Delete the detected tables',
	'Installation_TablesDeletedSuccess' => 'Existing Piwik tables deleted with success',
	'Installation_TablesCreatedSuccess' => 'Tables created with success!',
	'Installation_TablesDeleteConfirm' => 'Are you sure you want to delete all the Piwik tables from this database?',

	'Installation_Welcome' => 'Welcome!',
	'Installation_WelcomeHelp' => 
		'<p>Piwik is an open source web analytics software that makes it easy to get the information you want from your visitors.</p>'.
		'<p>This process is split up into %s easy steps and will take around 5 minutes.</p>',	
);
