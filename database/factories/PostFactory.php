<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //migrationdan gelen dataları tek tek alıp karşılıgına fake değerler atıcam
            "isim" => fake()->firstName(),
            "soyisim" => fake()->lastName(),
            "yazi" => fake()->text(),
            "telefon" => fake()->phoneNumber(),
            "mail" => fake()->email(),
            "ipAdresi" => fake()->ipv4(),
            "tarayici" => fake()->userAgent(),
            "renk" => fake()->hexColor(),
            "image" => fake()->imageUrl($width = 200, $height = 200),
            "barkod" => fake()->ean8(),
            "adres" => fake()->address()
        ];
        //Artık bunlar seed etmiş olucaz
    }
}
