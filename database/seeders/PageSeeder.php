<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed example bootstrap page
        DB::table('pages')->insert([
            'page_code' => md5(Str::random(10)),
            'is_home' => true,
            'name' => 'page',
            'css' => 'body {
                padding-top: 0;
              }',
            'content' => '<main role="main" class="container-fluid"> <main class="container"> <div class="starter-template text-center py-5 px-3"> <h1>Bootstrap starter template</h1> <p class="lead">Use this document as a way to quickly start any new project.<br>All you get is this text and a mostly barebones HTML document.</p></div></main> </main>',
            'created_at' => date("Y-m-d h:m:s"),
            ]);
    }
}
