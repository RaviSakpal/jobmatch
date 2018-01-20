<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = new \App\Job([
            'user_id' => 1,
            'job_title' => 'web Developer',
            'skill1' => 'Photoshop',
            'skill2' => 'HTML',
            'skill3' => 'CSS',
            'experience' => 5,
            'description' =>'Full Time',
            'wage' =>'120',
        ]);
        $job->save();
       $job = new \App\Job([
           'user_id' => 1,
           'job_title' => 'web Developer',
           'skill1' => 'Photoshop',
           'skill2' => 'HTML',
           'skill3' => 'CSS',
           'experience' => 5,
           'description' =>'Full Time',
           'wage' =>'120',
        ]);
        $job->save();
		 $job = new \App\Job([
             'user_id' => 1,
             'job_title' => 'java Developer',
             'skill1' => 'EJB',
             'skill2' => 'Linux',
             'skill3' => 'XML',
             'experience' => 7,
             'description' =>'Full Time',
             'wage' =>'220',
        ]);
        $job->save();
		 $job = new \App\Job([
             'user_id' => 1,
             'job_title' => 'system designer',
             'skill1' => 'Python',
             'skill2' => 'Photoshop',
             'skill3' => 'Illustrator',
             'experience' => 6,
             'description' =>'Full Time',
             'wage' =>'320',
        ]);
        $job->save();
		 $job = new \App\Job([
             'user_id' => 1,
             'job_title' => 'IT technician',
             'skill1' => 'MS Suite',
             'skill2' => 'Office 365',
             'skill3' => 'Share Point ',
             'experience' => 3,
             'description' =>'Full Time',
             'wage' =>'120',
        ]);
        $job->save();
		 $job = new \App\Job([
             'user_id' => 1,
             'job_title' => 'Lecturer ',
             'skill1' => 'Mathematics ',
             'skill2' => 'Information Security',
             'skill3' => 'surveying',
             'experience' => 5,
             'description' =>'Full Time',
             'wage' =>'420',
        ]);
        $job->save();
		 $job = new \App\Job([
             'user_id' => 1,
             'job_title' => 'Software Engineer ',
             'skill1' => 'PS3',
             'skill2' => 'OpenGL',
             'skill3' => 'QT',
             'experience' => 5,
             'description' =>'Full Time',
             'wage' =>'420',
        ]);
        $job->save();
    }
}
