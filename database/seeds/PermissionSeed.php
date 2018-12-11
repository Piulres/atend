<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'permission_access',],
            ['id' => 3, 'title' => 'permission_create',],
            ['id' => 4, 'title' => 'permission_edit',],
            ['id' => 5, 'title' => 'permission_view',],
            ['id' => 6, 'title' => 'permission_delete',],
            ['id' => 7, 'title' => 'role_access',],
            ['id' => 8, 'title' => 'role_create',],
            ['id' => 9, 'title' => 'role_edit',],
            ['id' => 10, 'title' => 'role_view',],
            ['id' => 11, 'title' => 'role_delete',],
            ['id' => 12, 'title' => 'user_access',],
            ['id' => 13, 'title' => 'user_create',],
            ['id' => 14, 'title' => 'user_edit',],
            ['id' => 15, 'title' => 'user_view',],
            ['id' => 16, 'title' => 'user_delete',],
            ['id' => 17, 'title' => 'user_action_access',],
            ['id' => 18, 'title' => 'user_action_create',],
            ['id' => 19, 'title' => 'user_action_edit',],
            ['id' => 20, 'title' => 'user_action_view',],
            ['id' => 21, 'title' => 'user_action_delete',],
            ['id' => 23, 'title' => 'time_management_create',],
            ['id' => 24, 'title' => 'time_management_edit',],
            ['id' => 25, 'title' => 'time_management_view',],
            ['id' => 26, 'title' => 'time_management_delete',],
            ['id' => 43, 'title' => 'time_report_create',],
            ['id' => 44, 'title' => 'time_report_edit',],
            ['id' => 45, 'title' => 'time_report_view',],
            ['id' => 46, 'title' => 'time_report_delete',],
            ['id' => 47, 'title' => 'internal_notification_access',],
            ['id' => 48, 'title' => 'internal_notification_create',],
            ['id' => 49, 'title' => 'internal_notification_edit',],
            ['id' => 50, 'title' => 'internal_notification_view',],
            ['id' => 51, 'title' => 'internal_notification_delete',],
            ['id' => 52, 'title' => 'faq_management_access',],
            ['id' => 53, 'title' => 'faq_management_create',],
            ['id' => 54, 'title' => 'faq_management_edit',],
            ['id' => 55, 'title' => 'faq_management_view',],
            ['id' => 56, 'title' => 'faq_management_delete',],
            ['id' => 57, 'title' => 'faq_category_access',],
            ['id' => 58, 'title' => 'faq_category_create',],
            ['id' => 59, 'title' => 'faq_category_edit',],
            ['id' => 60, 'title' => 'faq_category_view',],
            ['id' => 61, 'title' => 'faq_category_delete',],
            ['id' => 62, 'title' => 'faq_question_access',],
            ['id' => 63, 'title' => 'faq_question_create',],
            ['id' => 64, 'title' => 'faq_question_edit',],
            ['id' => 65, 'title' => 'faq_question_view',],
            ['id' => 66, 'title' => 'faq_question_delete',],
            ['id' => 67, 'title' => 'basic_crm_access',],
            ['id' => 68, 'title' => 'basic_crm_create',],
            ['id' => 69, 'title' => 'basic_crm_edit',],
            ['id' => 70, 'title' => 'basic_crm_view',],
            ['id' => 71, 'title' => 'basic_crm_delete',],
            ['id' => 72, 'title' => 'crm_status_access',],
            ['id' => 73, 'title' => 'crm_status_create',],
            ['id' => 74, 'title' => 'crm_status_edit',],
            ['id' => 75, 'title' => 'crm_status_view',],
            ['id' => 76, 'title' => 'crm_status_delete',],
            ['id' => 77, 'title' => 'crm_customer_access',],
            ['id' => 78, 'title' => 'crm_customer_create',],
            ['id' => 79, 'title' => 'crm_customer_edit',],
            ['id' => 80, 'title' => 'crm_customer_view',],
            ['id' => 81, 'title' => 'crm_customer_delete',],
            ['id' => 82, 'title' => 'crm_note_access',],
            ['id' => 83, 'title' => 'crm_note_create',],
            ['id' => 84, 'title' => 'crm_note_edit',],
            ['id' => 85, 'title' => 'crm_note_view',],
            ['id' => 86, 'title' => 'crm_note_delete',],
            ['id' => 87, 'title' => 'crm_document_access',],
            ['id' => 88, 'title' => 'crm_document_create',],
            ['id' => 89, 'title' => 'crm_document_edit',],
            ['id' => 90, 'title' => 'crm_document_view',],
            ['id' => 91, 'title' => 'crm_document_delete',],
            ['id' => 92, 'title' => 'team_access',],
            ['id' => 93, 'title' => 'team_create',],
            ['id' => 94, 'title' => 'team_edit',],
            ['id' => 95, 'title' => 'team_view',],
            ['id' => 96, 'title' => 'team_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
