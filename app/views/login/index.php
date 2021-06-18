<div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">Login</h1>
            <form method="POST" >
                <div class="form-group">
                    <label for="username" style="color: white;">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="password" style="color: white;">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required/>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" id="login" class="btn btn-light btn-block" value="Masuk" />
                <?php if(count($_POST)>0) {
                    foreach($data['admin'] as $account):
                        if ($account['username']==$_POST["username"]){
                            if ($account['password']==$_POST["password"]){
                                header('Location: ' . BASEURL . '/management');
                                exit();
                            }
                            else{
                                ?>
                                <script>
                                    alert("Password yang anda masukkan salah!");
                                </script>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <script>
                                alert("Username dan password anda salah!");
                            </script>
                            <?php
                        }
                    endforeach;
                    }?>
                </div>
            </form>
            </div>
        </div>
</div>
<br><br><br>