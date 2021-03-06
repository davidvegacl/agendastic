<?php
/* ----------------------------------------------------------------------------
 * Agendastic - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2018, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Agendastic Configuration File.
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config
{
    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL = 'http://url-to-agendastic-directory';
    const LANGUAGE = 'spanish';
    const DEBUG_MODE = false;

    const INDEX_PAGE = 'index.php'; // 'index.php' o en blanco si se usa .htaccess con mod_rewrite

    // ------------------------------------------------------------------------
    // MAILING SETTINGS
    // ------------------------------------------------------------------------

    const MAIL_PROTOCOL = 'mail'; // 'mail' o 'smtp'
    const MAIL_SMTP_HOST = '';
    const MAIL_SMTP_USER = '';
    const MAIL_SMTP_PASS = '';
    const MAIL_SMTP_CRYPTO = ''; // 'ssl' o 'tls'
    const MAIL_SMTP_PORT = 25;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST = '';
    const DB_NAME = '';
    const DB_USERNAME = '';
    const DB_PASSWORD = '';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE = false; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME = '';
    const GOOGLE_CLIENT_ID = '';
    const GOOGLE_CLIENT_SECRET = '';
    const GOOGLE_API_KEY = '';
}

/* End of file config.php */
/* Location: ./config.php */
