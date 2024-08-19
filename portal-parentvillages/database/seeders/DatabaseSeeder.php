<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        $questions = [
            [
                "name" => "Contact Number"
            ],
            [
                "name" => "How did you hear about us?"
            ],
            [
                "name" => "Would you like to remain anonymous?"
            ],
            [
                "name" => "Race and Ethnicity?"
            ],
            [
                "name" => "Would it be best if you had an interpreter?"
            ],
            [
                "name" => "Do you have a disability?"
            ],
            [
                "name" => "Do you feel that you are in danger?"
            ],
            [
                "name" => "Have you or your child(ren) or family member been affected by any act of violence or crime? Are you or your child(ren) a victim of violence or crime?"
            ],
            [
                "name" => "There are many acts of crime or violence we do not always think of. Please check if you or your child(ren) or a family member have been affected by any of the following"
            ],
            [
                "name" => "What services are you looking for?"
            ],
            [
                "name" => "Are any of your needs a result of being a victim of a crime?"
            ],
            [
                "name" => "Are you in need of financial assistance for any of the following, or have you had to pay for any of these services due to being a victim or a family member of a victim of crime in Massachusetts within the last three years?"
            ],
            [
                "name" => "Do the expenses of services prevent you or a family member from not currently receiving mental health/clinical/therapeutic services?"
            ],
            [
                "name" => "Are you receiving public assistance (SNAP, WIC, TANF, SSI)?"
            ],
            [
                "name" => "What services are you looking for?"
            ],
            [
                "name" => "How many children do you need childcare for?"
            ],
            [
                "name" => "What area of education are you looking for resources/services for?"
            ],
            [
                "name" => "Do you have a voucher?"
            ],
            [
                "name" => "What is/are the age(s)?"
            ],
            [
                "name" => "Would you like to share any additional information?"
            ],
            [
                "name" => "If you have a program(s) in mind, please list them below."
            ],
            [
                "name" => "Where is your location (zip code)?"
            ],
            [
                "name" => "What type of childcare are you looking for?"
            ],
            [
                "name" => "What days are you in need of childcare?"
            ],
            [
                "name" => "How many hours per day will you need childcare? What time(s) of the day?"
            ],
            [
                "name" => "Will you need transportation as well?"
            ],
            [
                "name" => "Would you like to add any other information regarding childcare?"
            ]
        ];


        Question::insert($questions);
    }
}
