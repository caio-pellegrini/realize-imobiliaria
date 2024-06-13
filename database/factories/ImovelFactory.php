<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use OpenAI\Laravel\Facades\OpenAI;
use Unsplash\HttpClient;
use Unsplash\Search;

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

        // Initialize Unsplash API
        HttpClient::init([
            'applicationId' => 'D960jgr1iBHKa9hVF70cgYZwGw9MK1Voq6rklOkedig',
            'secret' => 'hyle0W2UMbeE_oIoucXlznPo3jLvwdCKd5lqDxnUcEA',
            'callbackUrl' => 'https://your-application.com/oauth/callback',
            'utmSource' => 'Laravel Realize'
        ]);

        // Fetch house images
        $response = Search::photos('house exterior', 1, 1, 'landscape');
        $photos = $response->getResults();
        $response2 = Search::photos('house interior', 1, 2, 'landscape');
        $photos = array_merge($photos, $response2->getResults());

        // Extract image URLs
        $imageUrls = [];
        foreach ($photos as $photo) {
            $imageUrls[] = $photo['urls']['small'];
        }

        // Generate areas
        $area_terreno = fake()->numberBetween(50, 300);
        $area_construida = fake()->numberBetween(0, $area_terreno);

        // Generate the rest of the attributes using OpenAI
        $prompt = "
        Crie um título, descrição, preço, logradouro, bairro, cidade, estado, cep, tipo, quartos, banheiros, status, tipo de negociação, características para um imóvel com as seguintes características:
        - Área do terreno: $area_terreno m²
        - Área construída: $area_construida m²
        - Possíveis tipos: Casa, Apartamento, Comercial, Terreno, Sobrado
        - Bairros possíveis: " . implode(', ', $bairros) . "
        - Atributos para terrenos: quartos e banheiros devem ser 'N.A' ou 0.
        Responda no formato JSON.";

        $result = json_decode(OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ])->choices[0]->message->content);

        return [
            'titulo' => $result->titulo,
            'descricao' => $result->descricao,
            'preco' => $result->preco,
            'logradouro' => $result->logradouro,
            'bairro' => $result->bairro,
            'cidade' => $result->cidade,
            'estado' => $result->estado,
            'cep' => $result->cep,
            'tipo' => $result->tipo,
            'quartos' => $result->tipo == 'Terreno' ? 'N.A' : $result->quartos,
            'banheiros' => $result->tipo == 'Terreno' ? 'N.A' : $result->banheiros,
            'area_terreno' => $area_terreno,
            'area_construida' => $area_construida,
            'status' => $result->status,
            'tipo_negociacao' => $result->tipo_negociacao,
            'caracteristicas' => json_encode($result->caracteristicas),
            'imagens' => json_encode($imageUrls),
        ];
    }
}
