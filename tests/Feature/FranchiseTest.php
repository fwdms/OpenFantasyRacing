<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithFaker;
use Inertia\Testing\AssertableInertia as Assert;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class FranchiseTest extends TestCase
{
    use WithoutMiddleware;

    /** @test */
    public function an_admin_can_get_a_list_of_franchises()
    {
        $this->withoutExceptionHandling();

        $this->get(route('admin.franchise.index'))
            ->assertInertia(
                fn (Assert $page) => $page
                    ->component('Admin/Franchises/Index')
            );
    }

    /** @test */
    public function an_admin_can_create_a_franchise()
    {
        $this->get(route('admin.franchise.create'))
            ->assertInertia(
                fn (Assert $page) => $page
                    ->component('Admin/Franchises/Create')
            );
    }
}
