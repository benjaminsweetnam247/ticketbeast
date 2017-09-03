<?php

use App\Concert;
use Carbon\Carbon;

class ConcertTest extends Tests\TestCase
{
  // @test
  function can_get_formatted_date()
  {
    // Create A Concert With A Know Date
    $convert = Concert::create({
      'date' => Carbon::parse('2016-12-01 8:00pm');
    });

    // Retrive The Formattted Date
    $date = $convert->formatted_date;

    // Verify The date is formatted as expected
    $this->assertEquals('Decemeber 1, 2016', $date);
  }
}