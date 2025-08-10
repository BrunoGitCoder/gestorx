<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistema de Gestão de Estoque',
                'description' => 'Aplicação para controle de entrada e saída de produtos, com relatórios automáticos e integração com fornecedores.',
            ],
            [
                'title' => 'Plataforma de Cursos Online',
                'description' => 'Portal para publicação e venda de cursos, com sistema de aulas em vídeo, avaliações e certificados digitais.',
            ],
            [
                'title' => 'Aplicativo de Controle Financeiro',
                'description' => 'App mobile para registrar despesas e receitas, com gráficos e categorização automática.',
            ],
            [
                'title' => 'Sistema de Reservas para Restaurantes',
                'description' => 'Plataforma para clientes realizarem reservas online, com confirmação por e-mail e SMS.',
            ],
            [
                'title' => 'Painel de Monitoramento de Vendas',
                'description' => 'Dashboard para acompanhar vendas em tempo real, integrando com sistemas de pagamento e e-commerce.',
            ],
            [
                'title' => 'Aplicativo de Entregas Rápidas',
                'description' => 'Sistema para solicitação de entregas, com geolocalização e acompanhamento de status em tempo real.',
            ],
            [
                'title' => 'Portal de Notícias Comunitárias',
                'description' => 'Website colaborativo para publicação de notícias e eventos locais, com sistema de moderação.',
            ],
            [
                'title' => 'Sistema de Gestão Escolar',
                'description' => 'Plataforma para controle acadêmico, boletins, matrícula online e comunicação com pais e alunos.',
            ],
            [
                'title' => 'Aplicativo de Treinos Personalizados',
                'description' => 'App para montar e acompanhar treinos de academia, com vídeos demonstrativos e registro de progresso.',
            ],
            [
                'title' => 'Loja Virtual de Artesanato',
                'description' => 'E-commerce para venda de produtos artesanais, com integração de pagamento e cálculo automático de frete.',
            ],
        ];

        foreach ($projects as $project) {
            Project::create([
                'user_id' => 1,
                'title' => $project['title'],
                'description' => $project['description'],
            ]);
        }
    }
}
