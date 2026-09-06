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
                'description' => 'MCP server untuk membuat, mengaudit, dan mempratinjau diagram BPMN 2.0 yang kompatibel dengan Bizagi Modeler.',
                'image_url' => 'https://opengraph.githubassets.com/1/harezadmm/bizagi-mcp',
                'project_url' => 'https://github.com/harezadmm/bizagi-mcp',
            ],
            [
                'title' => 'Projex',
                'category' => 'Full-stack web app',
                'description' => 'Aplikasi manajemen proyek kelompok untuk melacak tugas, progres, dan bukti kontribusi GitHub dengan Next.js dan Supabase.',
                'image_url' => 'https://opengraph.githubassets.com/1/harezadmm/projex',
                'project_url' => 'https://github.com/harezadmm/projex',
            ],
            [
                'title' => 'EcoPick',
                'category' => 'Mobile application',
                'description' => 'Aplikasi Flutter dan Supabase untuk mendukung gerakan daur ulang, poin hijau, dan penukaran hadiah di Surabaya.',
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
