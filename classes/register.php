<?php
require_once 'core/initPublic.php';

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username'	=> array(
                'fieldName'	=> 'Username',
                'required' 	=> true,
                'min'		=> 2,
                'max'		=> 20,
                'unique'	=> 'users'
            ),
            'password'	=> array(
                'fieldName'	=> 'Password',
                'required' 	=> true,
                'min'		=> 6
            ),
            'passwordAgain' => array(
                'fieldName'	=> 'Password Repeat',
                'required' 	=> true,
                'min'		=> 6,
                'matches'	=> 'password'
            ),
            'name'	=> array(
                'fieldName'	=> 'name',
                'required' 	=> true,
                'min'		=> 2,
                'max'		=> 50
            ),
            'phone' => array(
                'fieldName' => 'phone',
                'required'  => true,
                'min'       =>9,
                'max'       =>20,
            ),
            'email' => array(
                'fieldName' => 'email',
                'required'  => true,
                'min'       =>9,
                'max'       =>20,
                'unique'    =>'email'    
            ),
            'mota' => array(
                'fieldName' => 'email',
                'required'  => true,
                'min'       =>0,
                'max'       =>200,
            ),
            
        ));

        if ($validation->passed()) {
            $user = new User();
            $salt = Hash::salt(32);
            try {
                    $user->create(array(
                        'username' 	=> Input::get('username'),
                        'password' 	=> Hash::make(Input::get('password'),$salt),
                        'salt' 		=> $salt,
                        'name' 		=> Input::get('name'),
                        'joined' 	=> date('Y-m-d H:i:s'),
                        'userGroup'	=> 1,
                        'mota'      => Input::get('mota'),
                        'phone'     => Input::get('phone'),
                        'email'     => Input::get('email'),
                    ));
                    Session::flash('home','You have been registered and can now log in');
                    Redirect::to('index.php');
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }
        else {
                    foreach ($validation->errors() as $error) {
                            echo $error, '<br>';
                    }
                }
    }
}
?>
    
    <form action="" method="post">
    
        <div class="field form-group">
            <label for="username">Username</label>
            <input name="username" id="username" type="text" class="form-control" autocomplete="off" placeholder="Enter UserName" value="<?php echo escape(Input::get('username')); ?>" />
        </div>
        
        <div class="field form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password"                                                                      />
        </div>
        
        <div class="field form-group">
            <label for="password_again">Enter your password again</label>
            <input type="password" class="form-control" name="passwordAgain" id="passwordAgain" placeholder="Enter Password again"                                                      />
        </div>
        
        <div class="field form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" value="<?php echo escape(Input::get('name')); ?>"                               />
        </div>
        
        <div class="field form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone"placeholder="Enter Your Phone Number" value="<?php echo escape(Input::get('phone')); ?>"                     />
        </div>
        
        <div class="field form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email"  value="<?php echo escape(Input::get('email')); ?>"                               />
        </div>
        
        <div class="field form-group">
            <label for="mota">Mô tả</label>
            <textarea type="text" class="form-control" name="mota" id="mota" rows='3' placeholder="Mô tả về bạn">                                                               </textarea>
        </div>
        
        <div class="field form-group">
            <label for="avatar">Ảnh đại diện</label>
            <input type="file" name="file" id="file" rows='3'/>
        </div>
        
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"                                                                                                      />
        
        <input type="submit" value="Register"                                                                                                                                           />
    
    </form>
    
