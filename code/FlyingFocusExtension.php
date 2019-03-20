<?php

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class FlyingFocusExtension extends Extension {

	public function onAfterInit() {
		Requirements::javascript('resources/vendor/dia-nz/silverstripe-flying-focus/javascript/flying-focus.js');
	}

}
