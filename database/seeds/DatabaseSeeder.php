<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
    }
}
