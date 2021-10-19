<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::pluck('id');
        $coupon = Coupon::pluck('id');

            return [
                    'user_id'=>$this->faker->randomElement($user),
                    'booking_date'=> date(now()) ,
                    'qty_room'=> rand(1,4),
                    'coupon_id'=>$this->faker->randomElement($coupon),
                    'created_at' => now(),
                    'updated_at' => now(),
            ];
    }
}
