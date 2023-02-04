<?php
    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/helpers/validateuser.php');
    // include(ROOT_PATH . '/app/helpers/middlewear.php');

    $errors = [];
    $username = '';
    $admin = '';
    $email = '';
    $password = '';
    $confirmpass = '';
    $table = 'users';
    $id = '';

    $admin_users = selectAll($table);

    //function that logs the user in
    function loginUser($user){
        $_SESSION['id'] = $user["id"];
        $_SESSION['username'] = $user["username"];
        $_SESSION['email'] = $user["email"];
        $_SESSION['admin'] = $user["admin"];
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['type'] = "success";

        if ($_SESSION['admin']) {
            header("location: " . BASE_URL . "/admin/dashboard.php");
        }else{
            header("location: " . BASE_URL . "/index.php");
        }
        exit();
    }

//creating admin and normal user
    if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {

        $errors = validateUser($_POST, $errors);
        
        if (count($errors) === 0) {
            unset($_POST['passwordconfirm'], $_POST['register-btn'], $_POST['create-admin']);
            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            if ($_POST['admin']) {

                $_POST['admin'] = 1;
                $_POST['profile_image'] = 'default.jpg';
                // dump($_POST);
                $user_id = create($table, $_POST);
                $_SESSION['message'] = "Admin user created successfully";
                $_SESSION['type'] = "success";
                header("location: " . BASE_URL . "/admin/users/index.php");
                exit();
            }else{
                $_POST['admin'] = 0;
                $_POST['profile_image'] = 'default.jpg';
                $user_id = create($table, $_POST);
                $user = selectOne($table, ['id' => $user_id]);

                // log user in after creating account
                loginUser($user);
            }

        }else{

            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmpass = $_POST["passwordconfirm"];
            $admin = isset($_POST['admin']) ? 1 : 0;
        }
        // dump($user);
    }


    //login function
    if (isset($_POST['login-btn'])) {

        $errors = validateLogin($_POST, $errors);

        if (count($errors) === 0) {
            $user = selectOne($table, ['email' => $_POST["email"]]);

            if ($user && password_verify($_POST["password"], $user['password'])) {
                //if true, log user in
                loginUser($user);

            }else{
                array_push($errors, 'Check email and password');
            }
            
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
    }

    //Delete admin functionality
    if (isset($_GET['del_id'])) {
        // adminOnly();
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        $_SESSION['message'] = 'User was deleted successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/users/index.php');
        exit();
    }


    if(isset($_GET['user_id'])) {
        $user = selectOne('users', ["id" => $_GET['user_id']]);
        $id = $user['id'];
        $username = $user['username'];
        $email = $user['email'];
        $admin = $user['admin'];
        $user_image = $user['profile_image'];
    }


    if (isset($_POST['updateUser'])) {
        // adminOnly();

        $errors = validateUser($_POST, $errors);

        if (!empty($_FILES['profile_image']['name'])) {
            $imageName = time() ."_". $_FILES['profile_image']['name'];
            $destination = ROOT_PATH . '/assets/img/' . $imageName;
    
            $result = move_uploaded_file($_FILES['profile_image']['tmp_name'], $destination);
    
            if ($result) {
                $_POST['profile_image'] = $imageName;
            }else{
                array_push($errors, 'Image failed to upload');
            }
    
        }else{

            $id = $_POST['id'];
            $oneUser = selectOne('users', ["id" => $id]);
            $_POST['profile_image'] = $oneUser['profile_image'];
        }
        

        if (count($errors) === 0) {
            $id = $_POST['id'];
            
            unset($_POST['passwordconfirm'], $_POST['id'], $_POST['updateUser']);
            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
            
            // dump($_POST);

            $count = update($table, $id, $_POST);
            $_SESSION['message'] = "User Profile Updated Successfully";
            $_SESSION['type'] = "success";
            header("location: " . BASE_URL . "/");
            exit();

        }else{

            $password = $_POST["password"];
            $confirmpass = $_POST["passwordconfirm"];
            $admin = isset($_POST['admin']) ? 1 : 0;
            $username = $_POST["username"];
            $email = $_POST["email"];
            $user_image = $_POST['profile_image'];
        }

        // dump($_POST);
    }


    if (isset($_POST['updateUserAdmin'])) {
        // adminOnly();

        $errors = validateUser($_POST, $errors);

        if (!empty($_FILES['profile_image']['name'])) {
            $imageName = time() ."_". $_FILES['profile_image']['name'];
            $destination = ROOT_PATH . '/assets/img/' . $imageName;
    
            $result = move_uploaded_file($_FILES['profile_image']['tmp_name'], $destination);
    
            if ($result) {
                $_POST['profile_image'] = $imageName;
            }else{
                array_push($errors, 'Image failed to upload');
            }
    
        }else{

            $id = $_POST['id'];
            $oneUser = selectOne('users', ["id" => $id]);
            $_POST['profile_image'] = $oneUser['profile_image'];
        }
        

        if (count($errors) === 0) {
            $id = $_POST['id'];
            
            unset($_POST['passwordconfirm'], $_POST['id'], $_POST['updateUserAdmin']);
            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
            
            // dump($_POST);

            $count = update($table, $id, $_POST);
            $_SESSION['message'] = "User Profile Updated Successfully";
            $_SESSION['type'] = "success";
            header("location: " . BASE_URL . "/admin/users/index.php");
            exit();

        }else{

            $password = $_POST["password"];
            $confirmpass = $_POST["passwordconfirm"];
            $admin = isset($_POST['admin']) ? 1 : 0;
            $username = $_POST["username"];
            $email = $_POST["email"];
            $user_image = $_POST['profile_image'];
        }

    }


?>