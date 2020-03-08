<?php


/**
 * Return a formatted Carbon date.
 *
 * @param  Carbon\Carbon $date
 * @param  string $format
 * @return stringe
 */



function humanize_date($date_at): string
{
	  $date = new \Date($date_at);
      return ucwords($date->format('F j, Y'));

}


function year($date_at): string
{
	  $date = new \Date($date_at);
      return ucwords($date->format('Y'));

}


function humanize_view($date_at): string
{
	  $date = new \Date($date_at);
      return ucwords($date->format('j F Y, h:i a', strtotime("13:30:30 UTC")));

}


function dates($date_at): string
{
	  $date = new \Date($date_at);
      return ucwords($date->format('Y/m/d'));

}


function input_date($date_at): string
{
	  $date = new \Date($date_at);
      return ucwords($date->format('d/m/Y'));

}

function humanize_time($time): string
{
$date = new \Date($time);
     return ucwords($date->format('g:i A'));
	//dd(date_format($time, 'g:i A'));
      //return date_format($time, 'g:i A');
}

