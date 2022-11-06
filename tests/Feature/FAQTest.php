<?php

namespace Tests\Feature;

use Inertia\Testing\AssertableInertia;
use Tests\TestCase;

class FAQTest extends TestCase
{
    /** @test */
    public function user_can_see_faq_page()
    {
        $response = $this->get(route('faq.index'));

        $response->assertInertia(
            fn (AssertableInertia $page) => $page
            ->component()
        );
    }
}
