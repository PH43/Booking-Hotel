<?php

namespace Database\Factories;

use App\Models\BookingRoom;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookingRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $booking = Booking::pluck('id');
        $room = Room::pluck('id');

            return [
                    'booking_id'=>$this->faker->randomElement($booking),
                    'room_id'=>$this->faker->randomElement($room),
                    'startDate'=> now(),
                    'endDate'=> '2021-10-10',
                    'num_days'=> '4',
                    'note'=>$this->faker->text(),
                    'created_at' => now(),
                    'updated_at' => now(),
            ];
    }
}
