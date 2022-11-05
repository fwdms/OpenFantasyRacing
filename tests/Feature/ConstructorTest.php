<?php

namespace Tests\Feature;

use Tests\TestCase;
use Database\Seeders\FranchiseSeeder;
use Database\Seeders\ConstructorSeeder;
use Inertia\Testing\AssertableInertia as Assert;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ConstructorTest extends TestCase
{
    use WithoutMiddleware;

    public function setup(): void
    {
        parent::setup();

        $this->seed([
            FranchiseSeeder::class,
            ConstructorSeeder::class
        ]);
    }

    /** @test */
    public function admins_can_view_the_constructors_index()
    {
        $this->get(route('admin.constructor.index'))
            ->assertInertia(
                fn (Assert $page) => $page
                ->component('Admin/Constructors')
                ->has('franchises')
            );
    }

    /** @test */
    public function can_get_constructors_index()
    {
        $this->get(route('constructor.index', 'f1'))
            ->assertInertia(
                fn (Assert $page) => $page
                ->component('Constructors/Index')
                ->has('franchise')
                ->has('teams')
            );
    }
}
