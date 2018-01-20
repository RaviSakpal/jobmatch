<?php

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'IT Transformation Consultant',
            'photo_id'=>7,
            'skill1'=>'critical thinking',
            'skill2'=>'critical thinking',
            'skill3'=>'critical thinking',
            'skill4'=>'critical thinking',
            'description'=>'Amazon Web Services (AWS) is seeking a world-class technical leader and strategy advisor who is passionate about helping our customers achieve their most challenging business goals using AWS Services.
AWS IT Transformation Consultants enable customers to achieve their most challenging business and organizational goals through well-managed complex transformation of IT using strategic application of AWS cloud technologies. As a trusted customer advocate, IT Transformation Consultants help organizations understand, plan and implement best practices around advanced AWS-supported scenarios, and drive migrations of enterprise application workloads to AWS cloud. They develop cloud strategies based on IT standards, leading customers and partners over technical and business hurdles of cloud adoption using agile project management approaches.',
            'internest1'=>'exercise',
            'internest2'=>'exercise',
            'internest3'=>'exercise',
            'internest4'=>'exercise',
            'wage'=>600
        ]);

        DB::table('jobs')->insert([

                    'user_id'=>1,
                    'job_title'=>'End User Computing Director',
                    'photo_id'=>3,
                    'skill1'=>'programming',
                    'skill2'=>'hi',
                    'skill3'=>'design',
                    'skill4'=>'design',
                    'description'=>'Flexibility, opportunity and incredible experiences reward the hard work required to succeed at Deloitte. We champion and support our talented people in achieving their career goals and collectively celebrate success.',
                    'internest1'=>'programming contest',
                    'internest2'=>'programming contest',
                    'internest3'=>'critical thinking',
                    'internest4'=>'programming contest',
                    'wage'=>200
                    ]);
        DB::table('jobs')->insert([

                'user_id'=>2,
                    'job_title'=>'Inside Sales Specialist - Cloud Client Computing',
                    'photo_id'=>4,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'hi',
                    'skill3'=>'coordination',
                    'skill4'=>'design',
                    'description'=>'If you are passionate about computer technology and eager to develop a career in technology sales, Dell is the place to be. Within Cloud Client Computing, we are looking for a Inside Sales Specialist to work as part of a team based in Sydney.',
                    'internest1'=>'reading Newspaper',
                    'internest2'=>'critical thinking',
                    'internest3'=>'exercise',
                    'internest4'=>'programming contest',
                    'wage'=>400
                    ]);
        DB::table('jobs')->insert([

                    'user_id'=>3,
                    'job_title'=>'Security Architect/Threat Hunter',
                    'photo_id'=>5,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'independent learning',
                    'skill3'=>'coordination',
                    'skill4'=>'debug',
                    'description'=>'We are passionate about nurturing careers.We support new innovation and thinking, and openly collaborate and share new ideas. We\'re healthy and active in our lives and wellbeing is encouraged at every level. Our people play an important role in the future of health and healthcare and we believe that working together, we are stronger.',
                    'internest1'=>'meditation',
                    'internest2'=>'playing game',
                    'internest3'=>'fitness',
                    'internest4'=>'reading blogs',
                    'wage'=>400
        ]);

        DB::table('jobs')->insert([

                    'user_id'=>4,
                    'job_title'=>'Senior End User Computing specialist',
                    'photo_id'=>6,
                    'skill1'=>'management',
                    'skill2'=>'marketing capacity',
                    'skill3'=>'operating capacity',
                    'skill4'=>'debug',
                    'description'=>'Nestlé enjoys a reputation as one of the world’s largest FMCGs and a leader in nutrition, health and wellness. Our teams support the success of Nestlé’s most iconic brands, including Nescafé, Milo and Uncle Tobys.
We’re home to the largest business excellence IT program in the world. With teams spread throughout every region of the globe, our specialists work with a diverse range of people and cultures in many different locations. Our inclusive and high performance culture is a testament to the great training, development, rewards and recognition we extend to every member of our 5,000-strong Oceania workforce. And no matter where your team is based, you can be assured that you’ll be essential to - and fully integrated in - our operations.',
                    'internest1'=>'cooking',
                    'internest2'=>'printing',
                    'internest3'=>'fitness',
                    'internest4'=>'reading blogs',
                    'wage'=>500
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'IT Transformation Consultant',
                    'photo_id'=>7,
                    'skill1'=>'critical thinking',
                    'skill2'=>'progrmming',
                    'skill3'=>'coordination',
                    'skill4'=>'visiting Technical website',
                    'description'=>'Amazon Web Services (AWS) is seeking a world-class technical leader and strategy advisor who is passionate about helping our customers achieve their most challenging business goals using AWS Services.
AWS IT Transformation Consultants enable customers to achieve their most challenging business and organizational goals through well-managed complex transformation of IT using strategic application of AWS cloud technologies. As a trusted customer advocate, IT Transformation Consultants help organizations understand, plan and implement best practices around advanced AWS-supported scenarios, and drive migrations of enterprise application workloads to AWS cloud. They develop cloud strategies based on IT standards, leading customers and partners over technical and business hurdles of cloud adoption using agile project management approaches.',
                    'internest1'=>'dd',
                    'internest2'=>'hunting',
                    'internest3'=>'fitness',
                    'internest4'=>'reading microblog',
                    'wage'=>600
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Software Engineer',
                    'photo_id'=>8,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'progrmming',
                    'skill3'=>'management',
                    'skill4'=>'playing game',
                    'description'=>'Software Engineer Job Responsibilities:
Develops information systems by designing, developing, and installing software solutions in conjunction with automated equipment..
Software Engineer Job Duties:
Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions.
Implement software required to operate in conjunction with laser printing machines,
Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.',
                    'internest1'=>'critical thinking',
                    'internest2'=>'backetball',
                    'internest3'=>'debug',
                    'internest4'=>'visiting Technical website',
                    'wage'=>600
        ]);


        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Senior .Net Developer',
                    'photo_id'=>9,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'coordination',
                    'skill3'=>'management',
                    'skill4'=>'playing game',
                    'description'=>'DWS is one of Australia’s leading providers of technology and consulting services, and supports some of Australia’s largest organisations and the Australian Government.
Through long-term partnerships with our customers our 800 staff deliver solutions across the IT spectrum, with specialists working in big data, cloud computing, and enterprise architecture.',
                    'internest1'=>'critical thinking',
                    'internest2'=>'backetball',
                    'internest3'=>'debug',
                    'internest4'=>'reading blogs',
                    'wage'=>800
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Salesforce Consultant/Business Analyst',
                    'photo_id'=>12,
                    'skill1'=>'marketing capacity',
                    'skill2'=>'coordination',
                    'skill3'=>'operating capacity',
                    'skill4'=>'playing game',
                    'description'=>'At Arxxus, we work on some of the most innovative salesforce.com solutions in Australia. We are a strategic salesforce.com partner and a member of the salesforce.com ventures program. Our team has completed in excess of 1,000 successful customer engagements in ANZ.

We work as a team to deliver cutting edge cloud computing solutions to complex business challenges. Our goal with every customer is to deliver transformational outcomes through our core service offerings of cloud strategy, implementation and managed services.',
                    'internest1'=>'management',
                    'internest2'=>'programming contest',
                    'internest3'=>'exercise',
                    'internest4'=>'independent learning',
                    'wage'=>900
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Postdoctoral Research Officer in Modelling of Excitonic Physics
Company Name RMIT University  Company Location Melbourne, AU',
                    'photo_id'=>17,
                    'skill1'=>'hi',
                    'skill2'=>'design',
                    'skill3'=>'intergratingCapacity',
                    'skill4'=>'playing game',
                    'description'=>'Postdoctoral Research Officer in Modelling of Excitonic Physics
Job no: 557307
Work type: Full time - Fixed term/Contract
Categories: Research, Sciences, Education
Convenient central city location in Melbourne, the world’s most liveable city
Full time - Fixed term/Contract
$82,143 - $88,172 p.a. + 17% superannuation',
                    'internest1'=>'management',
                    'internest2'=>'reading newspaper',
                    'internest3'=>'exercise',
                    'internest4'=>'critical thinking',
                    'wage'=>100
        ]);


        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'IT Helpdesk Support Technician',
                    'photo_id'=>10,
                    'skill1'=>'innovation',
                    'skill2'=>'design',
                    'skill3'=>'marketing capacity',
                    'skill4'=>'visiting Technical website',
                    'description'=>'L’Oréal Australia is part of the L’Oréal Group – the world’s largest pure beauty company with over 100 years of history and experience. We are a passionate team in a growing market, working to deliver our mission of Beauty for All through our local portfolio of 25 brands.
L’Oréal was founded by a scientist and we have always focused on cutting-edge research and innovation. Our innovation now also centres around the opportunity that the worldwide digital transformation provides and we are leaders in connecting beauty and technology.',
                    'internest1'=>'management',
                    'internest2'=>'reading newspaper',
                    'internest3'=>'exercise',
                    'internest4'=>'reading blogs',
                    'wage'=>100
        ]);
        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Enterprise Solution Architect',
                    'photo_id'=>54,
                    'skill1'=>'programming',
                    'skill2'=>'hi',
                    'skill3'=>'coordination',
                    'skill4'=>'design',
                    'description'=>'The Solution Architect will be responsible for leading Solution definition and development activities for key business development opportunities and internal solution development across the business.',
                    'internest1'=>'reading Newspaper',
                    'internest2'=>'visiting Technical website ',
                    'internest3'=>'critical thinking',
                    'internest4'=>'programming contest',
                    'wage'=>677
        ]);


        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Scala + Bigdata Engineer',
                    'photo_id'=>42,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'test',
                    'skill3'=>'coordination',
                    'skill4'=>'design',
                    'description'=>'We\'re looking for a Scala Developer/Big Data engineer to entrust with the interesting technical challenges involved in creating and growing our product. You’ll be working with devs from data science, data engineering, backend, web and UX backgrounds to build Anna, an automated data scientist who is already beginning to transform how businesses use data. You’ll also be a huge advocate for Scala and Spark best practices, mentoring the team and helping to get the most out of our stack.',
                    'internest1'=>'reading Newspaper',
                    'internest2'=>'critical thinking',
                    'internest3'=>'exercise',
                    'internest4'=>'programming contest',
                    'wage'=>400
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Service Desk Analyst',
                    'photo_id'=>45,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'independent learning',
                    'skill3'=>'coordination',
                    'skill4'=>'debug',
                    'description'=>'We are now managing the support of the End User Computing environment of a new customer which has created exciting career opportunities for people wishing to join our newly established Customer Service team in our Docklands office as Service Desk Analysts.',
                    'internest1'=>'meditation',
                    'internest2'=>'playing game',
                    'internest3'=>'fitness',
                    'internest4'=>'reading blogs',
                    'wage'=>400
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Senior SDE',
                    'photo_id'=>76,
                    'skill1'=>'management',
                    'skill2'=>'marketing capacity',
                    'skill3'=>'operating capacity',
                    'skill4'=>'debug',
                    'description'=>'Following Microsoft’s mission to empower every person and every organization on the planet to achieve more, the DX GISV Technical Evangelism and Development (TED) team enables top companies and ISVs around the world to create scalable, resilient and efficient software solutions applying a smart mix of different technologies and platforms, including cloud computing, highly scalable data engines, hybrid networking and distributed messaging systems.',
                    'internest1'=>'dd',
                    'internest2'=>'printing',
                    'internest3'=>'fitness',
                    'internest4'=>'reading blogs',
                    'wage'=>500
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Communications, Media & Technology – Cloud Advisory ',
                    'photo_id'=>69,
                    'skill1'=>'management',
                    'skill2'=>'marketing capacity',
                    'skill3'=>'operating capacity',
                    'skill4'=>'debug',
                    'description'=>'Join Accenture and help transform leading organizations and communities around the world. The sheer scale of our capabilities and client engagements and the way we collaborate, operate and deliver value provides an unparalleled opportunity to grow and advance. Choose Accenture, and make delivering innovative work part of your extraordinary career.',
                    'internest1'=>'dd',
                    'internest2'=>'printing',
                    'internest3'=>'fitness',
                    'internest4'=>'reading blogs',
                    'wage'=>500
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Senior Devops Engineer (AWS)',
                    'photo_id'=>45,
                    'skill1'=>'critical thinking',
                    'skill2'=>'progrmming',
                    'skill3'=>'coordination',
                    'skill4'=>'visiting Technical website',
                    'description'=>'We have an exciting new 8 week contract role based in Mascot with our Client for a Senior Devops Engineer. You will need to have proven skills with AWS. Ideal start date is 5th June.

The role:

This role’s primary purpose is to deliver cloud solutions that ensure customer and internal requirements are met. This will require a proven ability to deliver on time and on budget complex technical solutions in multiple roles or projects.',
                    'internest1'=>'dd',
                    'internest2'=>'hunting',
                    'internest3'=>'fitness',
                    'internest4'=>'reading microblog',
                    'wage'=>600
        ]);


        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'UX/UI Designer',
                    'photo_id'=>48,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'progrmming',
                    'skill3'=>'management',
                    'skill4'=>'playing game',
                    'description'=>'We are currently searching for a UX/UI Designer to join our Melbourne Development team. Our ideal candidate is comfortable working at C level to help identify, define and implement solutions. Kloud\'s consultants are comfortable the latest technology,&ndash; they cherish, and are proud of, their deep and wide scope of experience and don\'t want to lose those skills by being trapped in meetings all day.',
                    'internest1'=>'critical thinking',
                    'internest2'=>'backetball',
                    'internest3'=>'debug',
                    'internest4'=>'visiting Technical website',
                    'wage'=>600
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Technical Writer',
                    'photo_id'=>49,
                    'skill1'=>'integratingCapacity',
                    'skill2'=>'coordination',
                    'skill3'=>'management',
                    'skill4'=>'playing game',
                    'description'=>'Melbourne CBD Location
6 Month Contract Role
ASAP start date
A Technical Writer job working for a Australian Insurance Firm in Melbourne CBD.
Your new company
You will be working for an up and coming Australian Insurance Firm. A Technical Writer is required to work on a 6 month initial contract.',
                    'internest1'=>'critical thinking',
                    'internest2'=>'backetball',
                    'internest3'=>'debug',
                    'internest4'=>'reading blogs',
                    'wage'=>900
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Account Executive General Business',
                    'photo_id'=>54,
                    'skill1'=>'marketing capacity',
                    'skill2'=>'coordination',
                    'skill3'=>'operating capacity',
                    'skill4'=>'playing game',
                    'description'=>'Salesforce is looking for an Account Executive to join one of our successful sales teams. This is a combination BDM and Account Manager opportunity where you will be selling into the General Business segment (specifically 400-1250 seats). It will involve you positioning our best in class solutions across CRM, Service Cloud, Platform and more to businesses looking to transform their processes.',
                    'internest1'=>'management',
                    'internest2'=>'programming contest',
                    'internest3'=>'exercise',
                    'internest4'=>'independent learning',
                    'wage'=>900
        ]);

        DB::table('jobs')->insert([
                    'user_id'=>5,
                    'job_title'=>'Account Executive (Req 1980)',
                    'photo_id'=>535,
                    'skill1'=>'marketing capacity',
                    'skill2'=>'coordination',
                    'skill3'=>'operating capacity',
                    'skill4'=>'playing game',
                    'description'=>'The Account Executive will work in the development of new HPC & Life Sciences accounts. The Account Executive is required to be in front of the end user, even if not selling direct, to build the relationship and share the DDN story. This position will be field based and involve travel approximately 30%-40% of the time. The job involves managing a territory and growing business through their own experience, including previously established relationships; so a successful applicant must have strong industry contacts and a demonstrated success in personally closing business in the HPC & Life Sciences space. Success involves a long and complex sales cycle and the majority of sales go through channel partners; so strong contacts with related channels are a requirement.',
                    'internest1'=>'management',
                    'internest2'=>'programming contest',
                    'internest3'=>'exercise',
                    'internest4'=>'independent learning',
                    'wage'=>900
        ]);


    }
}
