<?php

namespace Database\Seeders;

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
      $this->call(UsersSeeder::class);
      $this->call(RolesAndPermissionsSeeder::class);
        // $this->call(ApplicationsTableSeeder::class);
        // $this->call(DocumentsTableSeeder::class);
        // $this->call(JobsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(RolesTableSeeder::class);
        // $this->call(ModelHasPermissionsTableSeeder::class);
        // $this->call(ModelHasRolesTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        // $this->call(RoleHasPermissionsTableSeeder::class);
        // $this->call(NotificationsTableSeeder::class);
    }
}
