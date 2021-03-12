<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(

            //0 = username, 1 = email, 2 = password, 3 = is_pa_user, 4 = is_consultant, 5 = is_company, 6 = info_cunsultant_id, 7 = info_company_id
            
            array(
                "username" => "darocrife",
                "email" => "daro@gmail.com", 
                "password" =>"darocrife",
                "is_pa_user" => TRUE,
                "is_consultant" => FALSE,
                "is_company" => FALSE, 
                "info_consultant_id" => NULL, 
                "info_company_id" => NULL
            ), 
            array(
                "username" => "prova",
                "email" => "prova@gmail.com", 
                "password" =>"password",
                "is_pa_user" => FALSE,
                "is_consultant" => TRUE,
                "is_company" => FALSE, 
                "info_consultant_id" => NULL, 
                "info_company_id" => NULL
            ) 
        );

        $i = 0;

        //for ($i = 0; $i < count($users); $i++) {

            $new = new User();

            
            $new->username = $users[$i]["username"];
            $new->email = $users[$i]["email"];
            $new->password = $users[$i]["password"];
            $new->is_pa_user = $users[$i]["is_pa_user"];
            $new->is_consultant = $users[$i]["is_consultant"];
            $new->is_company = $users[$i]["is_company"];
            $new->info_consultant_id = $users[$i]["info_consultant_id"];
            $new->info_company_id = $users[$i]["info_company_id"];
            

            $new->save();
            
            /*
            $new->username = "prova";
            $new->email = "prova";
            $new->password = "prova";
            $new->is_pa_user = TRUE;
            $new->is_consultant = FALSE;
            $new->is_company = FALSE;
            $new->info_consultant_id = NULL;
            $new->info_company_id = NULL;

            $new->save();
            */
        }
     
    } 
}
