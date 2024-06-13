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


        // Generate the rest of the attributes using OpenAI
        $prompt = "
        Crie um título, descrição, preço, logradouro, bairro, tipo, quartos, banheiros, status, tipo de negociação, área do terreno, área construída,  características para um imóvel com as seguintes características:
        - No título, inclua um adjetivo que defina bem o imóvel e pelo menos 2 características do imóvel.
        - Forneça uma descrição com detalhes que vão além do título e das características. Seja criativo! E lembre-se que o papel aqui é chamar a atenção do cliente. Não faça uma descrição muito longa.
        - Possíveis tipos de imóvel: Casa, Apartamento, Comercial, Terreno, Sobrado
        - No logradouro deve conter o número do imóvel.
        - A área do terreno deve ser maior ou igual a construída. Em terrenos a área construída deve ser 0.
        - Bairros possíveis: " . implode(', ', $bairros) . "
        - Cidade, Estado e CEP serão fixos: 'Monte Alto', 'SP', '15910-000'
        - Tipo_negociacao: 'Venda' ou 'Locação'
        - Se for 'Venda', o status pode ser 'Disponível' ou 'Vendido' e o preço deve ser do total da venda.
        - Se for 'Locação', o status pode ser 'Disponível' ou 'Alugado' e o preço deve ser do aluguel mensal.
        - Atributos para terrenos: quartos e banheiros devem ser 'N.A' ou 0.
        - Características: Piscina (bool), area_churrasco (bool), garagem (quant)
        - Observações:
            - Seja criativo nos nomes das ruas e dos números dos imóveis.
            - Não responda nada além dos atributos em JSON.
        Responda no formato JSON, seguindo o MODELO abaixo:
        {
            'titulo': 'Linda casa com piscina no São Cristóvão',
            'descricao': 'Casa nova com 3 quartos, 2 banheiros, piscina, garagem para 2 carros, área de churrasco, localizada em um dos melhores bairros da cidade. Não perca essa oportunidade!'
            'preco': 500000,
            'logradouro': 'Rua Fortunato Buzeto, 81',
            'bairro': 'São Cristóvão',
            'cidade': 'Monte Alto',
            'estado': 'SP',
            'cep': '15910-000',
            'tipo': 'Casa',
            'quartos': 3,
            'banheiros': 2,
            'status': 'Disponível',
            'tipo_negociacao': 'Venda',
            'area_terreno': 300,
            'area_construida': 150,
            'caracteristicas': {
                'piscina': true,
                'area_churrasco': true,
                'garagem': 2
            }
        }";

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
            'area_terreno' => $result->area_terreno,
            'area_construida' => $result->area_construida,
            'status' => $result->status,
            'tipo_negociacao' => $result->tipo_negociacao,
            'caracteristicas' => json_encode($result->caracteristicas),
            'imagens' => json_encode($imageUrls),
        ];
    }
}
