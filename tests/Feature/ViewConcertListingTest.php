<?php

namespace Tests\Feature;

use App\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewConcertListingTest extends TestCase
{

    use DatabaseMigrations;
    /** @test */
    function user_can_view_a_concert_listing()
    {
      // Arange
      // Create a concert
      $concert = Concert::create([
        'title' => 'The Red Cord',
        'subtitle' => 'With Animosity and Lethargy',
        'date' => Carbon::parse('December 13, 2016, 8:00pm'),
        'ticket_price' => 3250,
        'venue' => 'The Mosh Pit',
        'venue_address' => '123 Example lane',
        'city' => 'Laraville',
        'state' => 'ON',
        'zip' => '17916',
        'additional_information' => 'for tickets, call (555) 5555-5555.',
      ]);

      // Act
      // View the concert Listing
         $this->visit('/concerts/'.$concert->id);


      // Assert
      // See the concert detail
        $this->see('The Red Cord');
        $this->see('With Animosity and Lethargy');
        $this->see('December 13, 2016');
        $this->see('8:00pm');
        $this->see('32.50');
        $this->see('The Mosh Pit');
        $this->see('123 Example Lane');
        $this->see('Laraville, ON 17916');
        $this->see('For tickets, call (555) 5555-5555.');
      }
}

