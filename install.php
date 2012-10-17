<?php
require_once __DIR__."/../../autoload.php";

use Mouf\Actions\InstallUtils;
use Mouf\MoufManager;

// Let's init Mouf
InstallUtils::init(InstallUtils::$INIT_APP);

// Let's create the instance
$moufManager = MoufManager::getMoufManager();

WebLibraryInstaller::installLibrary("javascript.jquery-filetree",
	array(
		'vendor/mouf/html.utils.bootstrap/js/bootstrap.min.js'
	),
	array(
		'vendor/mouf/html.utils.bootstrap/css/bootstrap.min.css'
	)
);

// Let's rewrite the MoufComponents.php file to save the component
$moufManager->rewriteMouf();

// Finally, let's continue the install
InstallUtils::continueInstall();
