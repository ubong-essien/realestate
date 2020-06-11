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
                            
                            <li class="list-group-item" ><a id="ag_link" href="<?= base_url('admin_home');?>"><span class="fa fa-home"></span> Home</a></>
                            <li class="list-group-item" ><a id="ag_link" href="<?= base_url('admin_dashboard');?>"><span class="fa fa-th"></span> Dashboard</a></li>
                            
                            <li class="list-group-item" ><a id="ag_link" href="<?= base_url('admin_create');?>"> <span class="fa fa-plus"></span> Create listing</a></li>
                             <li class="list-group-item" ><a id="ag_link" href="<?= base_url("admin_agent_listing")."/".$_SESSION['logged_agent_id'];?>"><span class="fa fa-list"></span> Show my Listing</a></li>
                             <li class="list-group-item"><a id="ag_link" href="<?= base_url('admin_show_listing');?>"><span class="fa fa-list"></span> Show all Listing</a></li>
                             <li class="list-group-item" ><a id="ag_link" href="<?= base_url("all_agents");?>"><span class="fa fa-user"></span> Show agents</a></li>
                             <li class="list-group-item" ><a id="ag_link" href="<?= base_url("send_message");?>"><span class="fa fa-envelope"></span> Broadcast Message</a></li>
                             
                             <li class="list-group-item"><a id="ag_link" href="<?= base_url('all_doc');?>"><span class="fa fa-book"></span> All Documents</a></li>
                             <li class="list-group-item"><a id="ag_link" href="<?= base_url('agent_logout');?>"><span class="fa fa-power-off"></span> Logout</a></li>
                             
                            </ul>
                        </div>
                        
                    </div>