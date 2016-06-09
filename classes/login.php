
<?php
require_once 'core/initPublic.php';
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username'	=> array(
                'fieldName'	=> 'Username',
                'required' 	=> true
            ),
            'password'	=> array(
                'fieldName'	=> 'Password',
                'required' 	=> true
            )
        ));

        if ($validation->passed()) {
            $user 		= new User();
            $remember 	= (Input::get('remember') === on) ? true : false;
            $login 		= $user->login(Input::get('username'),Input::get('password'), $remember);

            if ($login) {
                Redirect::to('index.php');
            } else {
                echo "Sorry we could not log you in";
            }
        } else {
            foreach ($validation->errors() as $error) {
                echo $error, '<br>';
            }
        }
    }
}
?>

<?php

    echo"
    
        <form role=\"form\">
            <div class=\"form-group\">
                <label for=\"email1\">                                                          Email address                                                                        </label>
                <input type=\"email\" class=\"form-control\" placeholder=\"Enter email\"  name=\"username\" id=\"username\"                                                                 >
            </div>
            <div class=\"form-group\">
                <label for=\"password\">                                                        Password                                                                             </label>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\"                                                                  >       
            </div>
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"remember\" id=\"remember\"/>                Check me out
                </label>
            </div>
            <input type=\"hidden\" name=\"token\" value=\"<?php echo Token::generate(); ?>\"                                                                                               />
            <button type=\"submit\" class=\"btn btn-default\">                                  Submit                                                                              </button>
        </form>
    
    ";

?>