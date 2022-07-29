<?php

namespace Database\Factories;

use App\Models\mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class mahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'npm' => $this->faker->word,
        'foto' => $this->faker->word,
        'nama' => $this->faker->word,
        'jk' => $this->faker->word,
        'tanggal_lahir' => $this->faker->word,
        'alamat' => $this->faker->word,
        'keterangan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
