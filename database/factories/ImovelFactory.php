<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use OpenAI\Laravel\Facades\OpenAI;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imovel>
 */
class ImovelFactory extends Factory
{   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $bairros = ['São Cristóvão', 'São Francisco', 'Laranjeiras', 'Parque das Flores', 'São Remo', 'Jardim Bela Vista', 'Paraíso', 'Real Paraíso', 'Centro', 'Bela Vista do Mirante', 'Jardim Canaã', 'Jaqueline', 'Jardim das Oliveiras', 'Acapulco', 'Jardim Santana', 'Bandeirantes', 'São Guilherme', 'Centenário', 'Vale do Sonho', 'Imperial', 'Vera Cruz'];

        $area_contruida = fake()->numberBetween(50, 290);
        $area_terreno = $this->gerarAreaTerreno($area_contruida, 300);

        $imovel = [
            'descricao' => fake()->realText(),
            'preco' => $this->gerarPrecoArredondado(100000, 500000),
            'logradouro' => fake()->streetAddress(),
            'bairro' => fake()->randomElement($bairros),
            'cidade' => 'Monte Alto',
            'estado' => 'SP',
            'cep' => '15910-000',
            'tipo' => fake()->randomElement(['Casa', 'Apartamento', 'Comercial', 'Terreno', 'Sobrado']),
            'quartos' => fake()->numberBetween(1, 5),
            'banheiros' => fake()->numberBetween(1, 3),
            'area_terreno' => $area_terreno,
            'area_construida' => $area_contruida,
            'status' => fake()->randomElement(['Disponível', 'Vendido', 'Alugado']),
            'tipo_negociacao' => fake()->randomElement(['Venda', 'Locação']),
            'caracteristicas' => json_encode(['piscina' => fake()->boolean(), 'area_churrasco' => fake()->boolean(), 'garagem' => fake()->numberBetween(1,3)]),
            'imagens' => json_encode([fake()->imageUrl(), fake()->imageUrl(), fake()->imageUrl()])
        ];

        $imovelJson = json_encode($imovel);

        $prompt = "Crie um título curto e uma descrição para um anúncio de venda de um imóvel. Se baseia no array a seguir: {$imovelJson}. Responda no formato json.";

        $result = json_decode(OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ])->choices[0]->message->content);


        $imovel['titulo'] = $result->titulo;
        $imovel['descricao'] = $result->descricao;

        return $imovel; 
    }

    private function gerarPrecoArredondado(int $min, int $max): int
    {
        // Divide the range by the factor to get an approximate range for prices
        $factor = 5000;
        $minFactor = $min / $factor;
        $maxFactor = $max / $factor;

        // Generate a random number within the range and multiply by the factor
        return fake()->numberBetween($minFactor, $maxFactor) * $factor;
    }

    private function gerarAreaTerreno(int $min, int $max): int
    {
        $factor = 10;
        $minFactor = $min / $factor;
        $maxFactor = $max / $factor;

        return fake()->numberBetween($minFactor, $maxFactor) * $factor;
    }
}
