<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dashboard
        $moduleAdminDashboard = Module::updateOrCreate(['name' => 'Admin Dashboard']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminDashboard->id,
            'name' => 'Access Dashboard',
            'slug' => 'admin.dashboard',
        ]);

        // Role management
        $moduleAdminRole = Module::updateOrCreate(['name' => 'Role Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminRole->id,
            'name' => 'Access Roles',
            'slug' => 'admin.role.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminRole->id,
            'name' => 'Create Role',
            'slug' => 'admin.role.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminRole->id,
            'name' => 'Edit Role',
            'slug' => 'admin.role.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminRole->id,
            'name' => 'Delete Role',
            'slug' => 'admin.role.destroy',
        ]);

        // User management
        $moduleAdminUser = Module::updateOrCreate(['name' => 'User Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminUser->id,
            'name' => 'Access Users',
            'slug' => 'admin.user.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminUser->id,
            'name' => 'Create User',
            'slug' => 'admin.user.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminUser->id,
            'name' => 'Edit User',
            'slug' => 'admin.user.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminUser->id,
            'name' => 'Delete User',
            'slug' => 'admin.user.destroy',
        ]);

        // Meeting management
        $moduleAdminMeeting = Module::updateOrCreate(['name' => 'Meeting Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminMeeting->id,
            'name' => 'Access Meetings',
            'slug' => 'admin.meeting.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminMeeting->id,
            'name' => 'Create Meeting',
            'slug' => 'admin.meeting.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminMeeting->id,
            'name' => 'Edit Meeting',
            'slug' => 'admin.meeting.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminMeeting->id,
            'name' => 'Delete Meeting',
            'slug' => 'admin.meeting.destroy',
        ]);

        // Event management
        $moduleAdminEvent = Module::updateOrCreate(['name' => 'Events Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminEvent->id,
            'name' => 'Access Events',
            'slug' => 'admin.event.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminEvent->id,
            'name' => 'Create Events',
            'slug' => 'admin.event.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminEvent->id,
            'name' => 'Edit Events',
            'slug' => 'admin.event.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminEvent->id,
            'name' => 'Delete Events',
            'slug' => 'admin.event.destroy',
        ]);

        
        // Testimonial management
        $moduleAdminProject = Module::updateOrCreate(['name' => 'Project Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminProject->id,
            'name' => 'Access Projects',
            'slug' => 'admin.project.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminProject->id,
            'name' => 'Create Project',
            'slug' => 'admin.project.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminProject->id,
            'name' => 'Edit Project',
            'slug' => 'admin.project.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminProject->id,
            'name' => 'Delete Project',
            'slug' => 'admin.project.destroy',
        ]);

        
        // Speaker management
        $moduleAdminAnualResport = Module::updateOrCreate(['name' => 'Anual Report']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminAnualResport->id,
            'name' => 'Access Anual Reports',
            'slug' => 'admin.report.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminAnualResport->id,
            'name' => 'Create Anual Report',
            'slug' => 'admin.report.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminAnualResport->id,
            'name' => 'Edit Anual Report',
            'slug' => 'admin.report.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminAnualResport->id,
            'name' => 'Delete Anual Report',
            'slug' => 'admin.report.destroy',
        ]);

        
        // Banner management
        $moduleAdminBanner = Module::updateOrCreate(['name' => 'Banner Management']);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminBanner->id,
            'name' => 'Access Banner',
            'slug' => 'admin.banner.index',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminBanner->id,
            'name' => 'Create Banner',
            'slug' => 'admin.banner.create',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminBanner->id,
            'name' => 'Edit Banner',
            'slug' => 'admin.banner.edit',
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAdminBanner->id,
            'name' => 'Delete Banner',
            'slug' => 'admin.banner.destroy',
        ]);
    }
}
