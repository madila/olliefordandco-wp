<?php


class OllieFordandCoFramework {

    private $site_maintenance;

    public function __construct()
    {
        if((defined('WP_MAINTENANCE') && WP_MAINTENANCE)) {
            require_once "site-maintenance.php";
            $this->site_maintenance = new OFC_Site_Maintenance();
        }
    }

}

$Ofc_framework = new OllieFordandCoFramework();
