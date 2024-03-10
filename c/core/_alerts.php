<<<<<<< HEAD
<?php  
    //put alerts here
    $currpage = str_replace('.php', '', basename($_SERVER['PHP_SELF']));

    $note = @$_GET['note'];

    if ($note == "error") {
        echo "
            <script>
                toastr.error('Error');
            </script>
        ";
    } else if ($note == "invalid") {
        echo "
            <script>
                toastr.error('Invalid');
            </script>
        ";
    } else if ($note == "empty_search") {
        echo "
            <script>
                toastr.error('Empty input is not allowed');
            </script>
        ";
    } else if ($note == "invalid_upload") {
        echo "
            <script>
                toastr.error('The file is not valid or exceeded the file size limit');
            </script>
        ";
    } else {

        // index

        if ($currpage == "index") {
            
            if ($note == "noexist") {
                echo "
                    <script>
                        toastr.error('Either username or password is incorrect');
                    </script>
                ";
            } else if ($note == "approved") {
                echo "
                    <script>
                        toastr.success('Request approved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // accountSettings

        if ($currpage == "accountSettings") {
            
            if ($note == "mismatch") {
                echo "
                    <script>
                        toastr.error('Current password do not match');
                    </script>
                ";
            } else if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // schools

        if ($currpage == "schools") {
            
            if ($note == "removed") {
                echo "
                    <script>
                        toastr.success('School removed');
                    </script>
                ";
            } else if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // requests

        if ($currpage == "requests") {
            
            if ($note == "approved") {
                echo "
                    <script>
                        toastr.success('Request approved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // users
        
        if ($currpage == "users" || $currpage == "user_search") {
            
            if ($note == "added") {
                echo "
                    <script>
                        toastr.success('User has been added');
                    </script>
                ";
            } else if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else if ($note == "removed") {
                echo "
                    <script>
                        toastr.success('User has been removed');
                    </script>
                ";
            } else if ($note == "char_exceed") {
                echo "
                    <script>
                        toastr.error('Email must be NOT greater than 50 characters');
                    </script>
                ";
            } else if ($note == "pass_exceed") {
                echo "
                    <script>
                        toastr.error('Password must be NOT greater than 16 characters');
                    </script>
                ";
            } else {
                echo "";
            }

        }
        
    }
=======
<?php  
    //put alerts here
    $currpage = str_replace('.php', '', basename($_SERVER['PHP_SELF']));

    $note = @$_GET['note'];

    if ($note == "error") {
        echo "
            <script>
                toastr.error('Error');
            </script>
        ";
    } else if ($note == "invalid") {
        echo "
            <script>
                toastr.error('Invalid');
            </script>
        ";
    } else if ($note == "empty_search") {
        echo "
            <script>
                toastr.error('Empty input is not allowed');
            </script>
        ";
    } else if ($note == "invalid_upload") {
        echo "
            <script>
                toastr.error('The file is not valid or exceeded the file size limit');
            </script>
        ";
    } else {

        // index

        if ($currpage == "index") {
            
            if ($note == "noexist") {
                echo "
                    <script>
                        toastr.error('Either username or password is incorrect');
                    </script>
                ";
            } else if ($note == "approved") {
                echo "
                    <script>
                        toastr.success('Request approved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // accountSettings

        if ($currpage == "accountSettings") {
            
            if ($note == "mismatch") {
                echo "
                    <script>
                        toastr.error('Current password do not match');
                    </script>
                ";
            } else if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // schools

        if ($currpage == "schools") {
            
            if ($note == "removed") {
                echo "
                    <script>
                        toastr.success('School removed');
                    </script>
                ";
            } else if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // requests

        if ($currpage == "requests") {
            
            if ($note == "approved") {
                echo "
                    <script>
                        toastr.success('Request approved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // users
        
        if ($currpage == "users" || $currpage == "user_search") {
            
            if ($note == "added") {
                echo "
                    <script>
                        toastr.success('User has been added');
                    </script>
                ";
            } else if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else if ($note == "removed") {
                echo "
                    <script>
                        toastr.success('User has been removed');
                    </script>
                ";
            } else if ($note == "char_exceed") {
                echo "
                    <script>
                        toastr.error('Email must be NOT greater than 50 characters');
                    </script>
                ";
            } else if ($note == "pass_exceed") {
                echo "
                    <script>
                        toastr.error('Password must be NOT greater than 16 characters');
                    </script>
                ";
            } else {
                echo "";
            }

        }
        
    }
>>>>>>> 50738457b13b2043e6e07348bcdb0c2b7e3976f7
?>