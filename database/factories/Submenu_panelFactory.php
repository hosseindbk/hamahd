<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submenu_panel>
 */
class Submenu_panelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'     => fake()->name(),
            'slug'      => fake()->name(),
            'status'    => 1,
            'menu_id'   => 1,
            'user_id'   => 1,
        ];
    }
}
