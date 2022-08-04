<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
/* con esta linea le estamos diciendo a laravel que tiene que ejcutar el seeder que se encuentra en el la clase curso seeder 
       $this->call(CursoSeeder::class);
*/
        /* Larvel 8 te recomienda que si crear un factory lo ejecutes en esta parte  ejemplo real*/
        Curso::factory(50)->create();
    }
}
