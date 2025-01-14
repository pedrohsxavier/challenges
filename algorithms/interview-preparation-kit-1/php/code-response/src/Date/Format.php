<?php
namespace Date;

class Format
{
  public static function long($date)
  {
    $months = \explode(' ', 'janeiro fevereiro março abril maio junho julho agosto setembro outubro novembro dezembro');
    $date = \explode('/', $date);
    if (sizeof($date) === 3) {
      $date[1] = $months[$date[1] - 1];
      return join(' de ', $date);
    } else {
      return 'Invalid data input';
    }
  }
}
