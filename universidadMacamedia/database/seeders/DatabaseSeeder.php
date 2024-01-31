<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'adminUser',
            'email' => 'admin@admin.com'
        ]);

        $role = new ModelsRole();
        $role->name = 'Administrador';
        $role->save();
        
        

        $user->assignRole($role);

        $this->call([
            CarreraSeeder::class,
            EstadoSeeder::class,
            MateriaSeeder::class
        ]);
    }
}
