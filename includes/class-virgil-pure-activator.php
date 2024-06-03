<?php

use VirgilSecurityPure\Config\Log;
use VirgilSecurityPure\Config\Option;
use VirgilSecurityPure\Core\Logger;
use VirgilSecurityPure\Helpers\DBQueryHelper;

/**
 * Class Virgil_Pure_Activator
 */
class Virgil_Pure_Activator {

    /**
     * @return void
     */
	public static function activate(): void
    {
        $dbQuery = new DBQueryHelper();
        $dbQuery->createTableLog();

        if(!get_option(Option::DEV_MODE))
            update_option(Option::DEV_MODE, 0);

        Logger::log(Log::PLUGIN_ACTIVATION);
	}
}
