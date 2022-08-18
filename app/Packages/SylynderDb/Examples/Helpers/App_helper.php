<?php

use App\Enums\Status;

if ( ! function_exists('status_color')) 
{
    /**
     * Status Color
     *
     * @param string $status
     * @param string $default
     * @return string
     */
    function status_color($status = '', $default = 'bg-light text-black')
    {
        if (empty($status)) {
            return $default;
        }

        switch($status) {
            case Status::ACTIVE:
            case Status::PUBLISHED:
                return  'bg-green text-white';
            break;
            case Status::INACTIVE:
                return  'bg-danger text-white';
            break;
            case Status::DRAFT:
                return  'bg-warning text-white';
            break;
            default: return $default;
        }
    }
}
