<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('time_zone')) {

    function time_zone()
    {
        $ci = &get_instance();
        $set_time_zone = 'Asia/Dhaka'; //Asia/Dhaka
        $date = new DateTime();
        $timeZone = $date->getTimezone();
        !empty($set_time_zone) ? $get_zone = $set_time_zone : $get_zone = $timeZone->getName();
        return $get_zone;
    }
}


if (!function_exists('d_time')) {
    function d_time()
    {
        $dt = new DateTime('now', new DateTimezone(time_zone()));
        if ($dt) {
            $date_time = $dt->format('Y-m-d H:i:s');
        } else {
            $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
            $date_time = $dt->format('Y-m-d H:i:s');
        }
        return $date_time;
    }
}


if (!function_exists('format_datetime')) 
{
    function format_datetime($datetime)
    {
        return date('d M Y h:i a', strtotime($datetime));
    }
}

if (!function_exists('format_date')) 
{
    function format_date($date)
    {
        return date('d M Y', strtotime($date));
    }
}


if (!function_exists('format_time')) 
{
    function format_time($time)
    {
        return date('h:i a', strtotime($time));
    }
}



if (!function_exists('__get_time_ago')) {
    function __get_time_ago($time_ago, $id = null)
    {
        $ci = get_instance();

        $dt = new DateTime('now', new DateTimezone(time_zone($id)));
        $date_time = strtotime($dt->format('Y-m-d H:i:s'));

        $time_ago = strtotime($time_ago);
        $cur_time   = $date_time;
        $time_elapsed   = $cur_time - $time_ago;
        $seconds    = $time_elapsed;
        $minutes    = round($time_elapsed / 60);
        $hours      = round($time_elapsed / 3600);
        $days       = round($time_elapsed / 86400);
        $weeks      = round($time_elapsed / 604800);
        $months     = round($time_elapsed / 2600640);
        $years      = round($time_elapsed / 31207680);
        // Seconds

        //return $seconds;

        if ($seconds <= 60) {
            return 'Just now';
        }
        //Minutes
        elseif ($minutes <= 60) {
            if ($minutes == 1) {
                return 'one min ago';
            } else {
                return "$minutes " . 'minutes ago';
            }
        }
        //Hours
        elseif ($hours <= 24) {
            if ($hours == 1) {
                return 'an hour ago';
            } else {
                return "$hours " . 'hour ago';
            }
        }
        //Days
        elseif ($days <= 7) {
            if ($days == 1) {
                return 'Yesterday';
            } else {
                return "$days " . 'days ago';
            }
        }
        //Weeks
        elseif ($weeks <= 4.3) {
            if ($weeks == 1) {
                return 'a week ago';
            } else {
                return "$weeks " . 'weeks ago';
            }
        }
        //Months
        elseif ($months <= 12) {
            if ($months == 1) {
                return 'a month ago';
            } else {
                return "$months " . 'month ago';
            }
        }
        //Years
        else {
            if ($years == 1) {
                return 'one year ago';
            } else {
                return "$years " . 'years ago';
            }
        }
    }
}