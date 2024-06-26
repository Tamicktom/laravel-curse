<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Categoria;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->word();
        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomFloat(2, 0, 1000), // 0 a 1000
            'slug' => Str::slug($this->faker->unique()->word()),
            'imagem' => $this->faker->imageUrl(400, 400),
            'id_user' => User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random(),
        ];
    }
}
