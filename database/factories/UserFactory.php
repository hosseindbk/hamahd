<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'              => 'محمد حسین دیوان بیگی',
            'username'          => 'hosseindbk',
            'email'             => 'hosseindbk@yahoo.com',
            'api_token'         => 'sFn72M45SwplaBxNUuZwCZmMdBVdT37XJvWgOtOBdH5a0H4db1fe9e1ldWO8QHRT643rfDGheA9z5dhU5qbi6HUaITqWs9yxdHmU',
            'level'             => 'admin',
            'image'             => 'image/user/fc69a90a4c1d93f47897551c2c09ddc4mahdialiakbarzade.jpg',
            'phone'             => '09128119938',
            'phone_verify'      => '1',
            'telphone'          => '02177247752',
            'type_id'           => '1',
            'birthday'          => '1371/04/16',
            'address'           => 'نارمک خیابان دردشت بین کوچه 50 و 52 پلاک 53 طبقه اول',
            'status'            => '1',
            'bio'               => 'نارمک خیابان دردشت بین کوچه 50 و 52 پلاک 53 طبقه اول',
            'email_verified_at' => null,
            'password'          => '$2y$10$aht8hinWz1ixIdvZ4oL5xedEcxkNkTjKaO8ecGCbN1oCMwdkvgLQW', // password
            'remember_token'    => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
