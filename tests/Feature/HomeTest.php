<?php

namespace Tests\Feature;

use Inertia\Testing\AssertableInertia;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function user_can_see_home_page()
    {
        $response = $this->get(route('home.index'));

        $response->assertInertia(
            fn (AssertableInertia $page) => $page
                ->component('Home')
        );
    }
}
