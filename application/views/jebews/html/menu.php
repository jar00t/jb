			<div class="sidebar-menu">
				<ul class="menu-items">
					<li class="m-t-30 <?php echo active_menu('dashboard', $page, 0); ?>">
						<a href="<?php echo base_url(); ?>jebews/dashboard" class="detailed">
							<span class="title">Dashboard</span>
						</a>
						<span class="icon-thumbnail"><i data-feather="shield"></i></span>
					</li>
					<li class="<?php echo active_menu('product', $page, 0, 'open '); ?>">
						<a href="javascript:void(0);"><span class="title">Produk</span>
						<span class="arrow<?php echo active_menu('product', $page, 0, 'open '); ?>"></span></a>
						<span class="icon-thumbnail"><i data-feather="grid"></i></span>
						<ul class="sub-menu">
							<li class="<?php echo active_menu('add', $page, 1); ?>">
								<a href="<?php echo base_url(); ?>jebews/product/add">Tambah Produk</a>
								<span class="icon-thumbnail"><i data-feather="plus"></i></span>
							</li>
							<li class="<?php echo active_menu('manage', $page, 1); ?>">
								<a href="<?php echo base_url(); ?>jebews/product/manage">Manage Produk</a>
								<span class="icon-thumbnail"><i data-feather="list"></i></span>
							</li>
						</ul>
					</li>
					<li class="<?php echo active_menu('audit', $page, 0, 'open '); ?>">
						<a href="javascript:void(0);"><span class="title">Audit</span>
						<span class="arrow<?php echo active_menu('audit', $page, 0, 'open '); ?>"></span></a>
						<span class="icon-thumbnail"><i data-feather="clipboard"></i></span>
						<ul class="sub-menu">
							<li class="<?php echo active_menu('reports', $page, 1); ?>">
								<a href="<?php echo base_url(); ?>jebews/audit/reports">Report</a>
								<span class="icon-thumbnail"><i data-feather="file-text"></i></span>
							</li>
							<li class="<?php echo active_menu('inventory', $page, 1); ?>">
								<a href="<?php echo base_url(); ?>jebews/audit/inventory">Inventaris</a>
								<span class="icon-thumbnail"><i data-feather="box"></i></span>
							</li>
						</ul>
					</li>
					<li class="<?php echo active_menu('master', $page, 0, 'open '); ?>">
						<a href="javascript:void(0);"><span class="title">Master</span>
						<span class="arrow<?php echo active_menu('master', $page, 0, 'open '); ?>"></span></a>
						<span class="icon-thumbnail"><i data-feather="server"></i></span>
						<ul class="sub-menu">
							<li class="<?php echo active_menu('inventory', $page, 1); ?>">
								<a href="<?php echo base_url(); ?>jebews/master/inventory">Inventaris</a>
								<span class="icon-thumbnail"><i data-feather="box"></i></span>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><span class="title">Profil</span> 
						<span class="arrow"></span></a>
						<span class="icon-thumbnail"><i data-feather="user"></i></span>
						<ul class="sub-menu">
							<li class="">
								<a href="<?php echo base_url(); ?>jebews/logout">Logout</a>
								<span class="icon-thumbnail"><i data-feather="power"></i></span>
							</li>
						</ul>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>