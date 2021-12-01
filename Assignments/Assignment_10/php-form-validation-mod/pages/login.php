<?php
require_once 'classes/Pdo_methods.php';


function init()
{

  global $output;


  function login($post)
  {

    $pdo = new PdoMethods();

    $sql = "SELECT admin_email, admin_password, admin_name, admin_status FROM admins WHERE admin_email = :email";

    $bindings = [
      [':email', $post['email'], 'str']
    ];

    $records = $pdo->selectBinded($sql, $bindings);

    /** IF THERE WAS AN RETURN ERROR STRING */
    if ($records == 'error') {
      return "There was an error logging it";
    }

    /** */
    else {
      if (count($records) != 0) {
        /** IF THE PASSWORD IS NOT VERIFIED USING PASSWORD_VERIFY THEN RETURN FAILED, OTHERWISE RETURN SUCCESS, IF NO RECORDS ARE FOUND RETURN NO RECORDS FOUND. */
        if (($post['password'] === $records[0]['admin_password'])) {
          session_start();
          $_SESSION['access'] = "accessGranted";
          $_SESSION['userName'] = $records[0]['admin_name'];
          $_SESSION['privilege'] = $records[0]['admin_status'];
          return "success";
        } else {
          return "There was a problem logging in with that password";
        }
      } else {
        return "There was a problem logging in with those credentials";
      }
    }
  }


  if (isset($_POST['login'])) {
    $output = login($_POST);
    if ($output === 'success') {
      header('Location: index.php?page=welcome');
    } else {
      header('Location: index.php?page=login');
      
    }
  }




  $acknowledgement = "";
  $form = <<<HTML

<div style="margin:20px">
<h1>Login Page</h1>

<p><?php echo $output ?></p>


<form action="index.php?page=login" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="myemail@email.com">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="login" value="Login">
          </div>
        </div>
      </div>
      </form>
</div>



HTML;

  return [$acknowledgement, $form];
}
