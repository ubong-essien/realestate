<div class="col-lg-4 col-md-4 sidebar">
                        <!--<div class="contact-form-card" >
                            <div class="card" id="pixdash">
                                <span class="fa fa-user fa-5x"></span>
                            </div>
                                <hgroup id="dashname">
                                <h5>John Doe</h5>
                                <h6>Campus Homes Agent</h6>
                                </hgroup>
                        </div>-->
                        <div class="contact-form-card" style="background-color:#d5d9d9">
                            
                            <ul class="list-group">
                            
                            <li class="list-group-item" ><a id="ag_link" href="<?= base_url('agents');?>">Home</a></li>
                            <li class="list-group-item" ><a id="ag_link" href="<?= base_url('dashboard');?>">Dashboard</a></li>
                            
                            <li class="list-group-item" ><a id="ag_link" href="<?= base_url('create_listing');?>">Create listing</a></li>
                             <li class="list-group-item" ><a id="ag_link" href="<?= base_url("agents_listing")."/".$_SESSION['logged_agent_id'];?>">Show My Listing</a></li>
                             <li class="list-group-item"><a id="ag_link" href="<?= base_url('agents_register');?>">Notifications</a></li>
                             <li class="list-group-item"><a id="ag_link" href="<?= base_url('agents_doc');?>">My Documents</a></li>
                             <li class="list-group-item"><a id="ag_link" href="<?= base_url('agent_logout');?>">Logout</a></li>
                             
                            </ul>
                        </div>
                        
                    </div>