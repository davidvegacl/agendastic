<?php

defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Agendastic - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2018, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.1.0
 * ---------------------------------------------------------------------------- */

/**
 * Check if Agendastic is installed.
 *
 * This function will check some factors to determine if Agendastic is
 * installed or not. It is possible that the installation is properly configure
 * without being recognized by this method.
 *
 * Notice: You can add more checks into this file in order to further check the
 * installation state of the application.
 *
 * @return bool returns whether E!A is installed or not
 */
function is_ea_installed()
{
    $ci = &get_instance();

    return $ci->db->table_exists('ea_users');
}

/**
 * Get the data of a sample service.
 *
 * @return array
 */
function get_sample_service()
{
    return [
        'name' => 'Servicio de pruebas',
        'duration' => 45,
        'price' => 10000,
        'currency' => '$',
        'description' => 'Este es un servicio de pruebas insertado por el instalador',
        'availabilities_type' => 'fixed',
        'attendants_number' => 1,
        'id_service_categories' => null,
    ];
}

/**
 * Get the data of a sample provider.
 *
 * @return array
 */
function get_sample_provider()
{
    return [
        'first_name' => 'Juan',
        'last_name' => 'Perez',
        'email' => 'juan@perez.com',
        'phone_number' => '0123456789',
        'services' => [],
        'settings' => [
            'username' => 'juanperez',
            'password' => '59fe9d073a9c3c606a7e01e402dca4b49b6aa517bd0fdf940c46cb13a7b63dd0',
            'salt' => 'dc5570debc71fc1fe94b1b0aee444fcde5b8cb83d62a6a2b736ead6557d7a2e1',
            'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":null,"sunday":null}',
            'notifications' => false,
            'google_sync' => false,
            'sync_past_days' => 5,
            'sync_future_days' => 5,
            'calendar_view' => CALENDAR_VIEW_DEFAULT,
        ],
    ];
}
