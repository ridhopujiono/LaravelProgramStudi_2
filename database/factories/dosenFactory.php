<?php

namespace Database\Factories;

use App\Models\dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class dosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nidn' => $this->faker->word,
        'foto' => $this->faker->word,
        'nama' => $this->faker->word,
        'jk' => $this->faker->word,
        'tanggal_lahir' => $this->faker->word,
        'alamat' => $this->faker->word,
        'mata_pelajaran' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
