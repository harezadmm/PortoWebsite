<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Curate the public portfolio without touching custom entries created
     * through the admin dashboard.
     */
    public function up(): void
    {
        DB::table('capabilities')
            ->whereRaw('LOWER(title) = ?', ['systems & analysis'])
            ->orWhere('description', 'like', '%BPMN process modeling%')
            ->delete();

        // Remove the original seeded demo cards only. Existing real projects
        // entered from the admin dashboard remain untouched.
        DB::table('portfolios')
            ->whereIn('title', [
                'Neon Cyberbot',
                'Floating Prism',
                'Desert Monolith',
                'Liquid Chrome',
            ])
            ->delete();

        $now = now();
        $projects = [
            [
                'title' => 'Bizagi MCP',
                'category' => 'Process automation',
                'description' => 'An MCP server that generates, audits, and previews BPMN 2.0 diagrams compatible with Bizagi Modeler.',
                'image_url' => 'https://opengraph.githubassets.com/1/harezadmm/bizagi-mcp',
                'project_url' => 'https://github.com/harezadmm/bizagi-mcp',
            ],
            [
                'title' => 'Projex',
                'category' => 'Full-stack web app',
                'description' => 'A collaborative project-management app for tracking tasks, progress, and GitHub contribution evidence, built with Next.js and Supabase.',
                'image_url' => 'https://opengraph.githubassets.com/1/harezadmm/projex',
                'project_url' => 'https://github.com/harezadmm/projex',
            ],
            [
                'title' => 'EcoPick',
                'category' => 'Mobile application',
                'description' => 'A Flutter and Supabase mobile app that supports recycling initiatives, green points, and reward redemption in Surabaya.',
                'image_url' => 'https://opengraph.githubassets.com/1/harezadmm/EcoPick-UAS',
                'project_url' => 'https://github.com/harezadmm/EcoPick-UAS',
            ],
        ];

        foreach ($projects as $project) {
            DB::table('portfolios')->updateOrInsert(
                ['title' => $project['title']],
                [...$project, 'updated_at' => $now, 'created_at' => $now],
            );
        }
    }

    /**
     * Destructive data changes are intentionally not reversed automatically.
     */
    public function down(): void
    {
        // Restoring removed dashboard content would require a database backup.
    }
};
