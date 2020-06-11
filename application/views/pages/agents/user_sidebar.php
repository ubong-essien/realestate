 <div class="col-lg-4 col-md-4 sidebar">
                    
                    <div class="contact-form-card" style="background-color:#d5d9d9">
                        <ul class="list-group">

                        <li class="list-group-item" ><a id="ag_link" href="<?= base_url('agents');?>">Home</a></li>
                        <?php
                        if($_SESSION['logged_agent_user']):
                        ?>
                        <li class="list-group-item" ><a id="ag_link" href="<?= base_url('dashboard');?>">Dashboard</a></li>
                        <?php
                        endif;
                        ?>
                        <li class="list-group-item" ><a id="ag_link" href="<?= base_url('agents_login');?>">Login</a></li>
                    <li class="list-group-item"><a id="ag_link" href="<?= base_url('agents_register');?>">Register</a></li>
                    <li class="list-group-item"><a id="ag_link" href="#">Terms and Condition</a></li>
                        </ul>
                    </div>
                    
                </div>