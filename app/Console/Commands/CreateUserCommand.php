<?php namespace Grace\Console\Commands;

use Schema;
use Sentry;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Contracts\Bus\SelfHandling;


/**
 * Class CreateUserCommand
 * @author Phillip Madsen
 */
class CreateUserCommand extends Command {

  
    protected $name = 'phillips:create-user';
 
    protected $description = 'Create a new user';




    protected $userData = array(
        'first_name' => null,
        'last_name'  => null,
        'email'      => null,
        'password'   => null
    );


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {


        $this->comment('=====================================');
        $this->comment('');
        $this->info('  Step: 1');
        $this->comment('');
        $this->info('    Please follow the following');
        $this->info('    instructions to create a new admin user');
        $this->comment('');
        $this->comment('=====================================');

        $this->askUserFirstName();
        $this->askUserLastName();
        $this->askUserEmail();
        $this->askUserPassword();


        $this->sentryRunner();

    }
   

    // public function fire()
    // {
    //     $first_name = $this->ask('Name : ');
    //     $email = $this->ask('Email : ');
    //     $password = $this->secret('Password : ');

    //     $user = User::firstOrcreate(compact('name', 'email', 'password'));

    //     $this->line('Select role:');

    //     foreach (Role::all() as $role) {
    //         $this->line($role->id . '. ' . $role->name);
    //     }

    //     $role = $this->ask("Role number : ");

    //     $user->addRole($role);

    //     $this->info("User [{$user->name}] created successfully.");
    // }


   protected function askUserFirstName() {

        do {
            // Ask the user to input the first name
            $first_name = $this->ask('Please enter your first name: ');

            // Check if the first name is valid
            if ($first_name == '') {
                // Return an error message
                $this->error('Your first name is invalid. Please try again.');
            }

            // Store the user first name
            $this->userData['first_name'] = $first_name;
        } while (!$first_name);
    }

 protected function askUserLastName() {

        do {
            // Ask the user to input the last name
            $last_name = $this->ask('Please enter your last name: ');

            // Check if the last name is valid.
            if ($last_name == '') {
                // Return an error message
                $this->error('Your last name is invalid. Please try again.');
            }

            // Store the user last name
            $this->userData['last_name'] = $last_name;
        } while (!$last_name);
    }

 protected function askUserEmail() {

        do {
            // Ask the user to input the email address
            $email = $this->ask('Please enter your user email: ');

            // Check if email is valid
            if ($email == '') {
                // Return an error message
                $this->error('Email is invalid. Please try again.');
            }

            // Store the email address
            $this->userData['email'] = $email;
        } while (!$email);
    }
    protected function askUserPassword() {

        do {
            // Ask the user to input the user password
            $password = $this->ask('Please enter your user password: ');

            // Check if email is valid
            if ($password == '') {
                // Return an error message
                $this->error('Password is invalid. Please try again.');
            }

            // Store the password
            $this->userData['password'] = $password;
        } while (!$password);
    }










  protected function sentryRunner() {

       

        // Create the user
        $this->sentryCreateUser();

        // Create dummy user
      //  $this->sentryCreateDummyUser();
    }


 protected function sentryCreateUser() {

        // Prepare the user data array.
        $data = array_merge($this->userData, array(
            'activated'   => 1
        ));

        // Create the user
        $user = Sentry::getUserProvider()->create($data);

        // Associate the Admin group to this user
        $group = Sentry::getGroupProvider()->findById(1);
        $user->addGroup($group);

        // Show the success message
        $this->comment('');
        $this->info('Your user was created successfully.');
    }




// protected function sentryCreateDummyUser() {

//         // Prepare the user data array.
//         $data = array(
//             'first_name'  => 'Phillip',
//             'last_name'   => 'Madsen',
//             'email'       => 'contact@affordableprogrammer.com',
//             'password'    => 'phillip',
//             'activated'   => 1
//         );

//         // Create the user
//         $user = Sentry::getUserProvider()->create($data);

//         // Associate the Admin group to this user
//         $group = Sentry::getGroupProvider()->findById(1);
//         $user->addGroup($group);

//         // Show the success message
//         $this->comment('');
//         $this->info('Admin user was created successfully.');
//         $this->comment('');
//     }




}
