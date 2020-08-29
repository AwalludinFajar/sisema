<div class="page-header">
	<div class="page-header-content" style="padding:0;">
		<div class="page-title" style="padding-top:0; padding-bottom:15px;">
			<h4>
				<i class="icon-arrow-left52 position-left"></i>
				<span class="text-semibold"><?php echo $sub_judul_form;?></span>
			</h4>
			<ul class="breadcrumb breadcrumb-caret position-right">
				<?php foreach ($breadcrumbs as $key => $value) { ?>
				<li>
					<a href=<?php echo site_url($value['link'])?> > <?php echo $value['name']; ?></a>
					<?php echo (count($breadcrumbs)-1)==$key?"":""; ?>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<div class="panel panel-flat">
  <div class = "panel-heading">
    <legend class="text-semibold">New Data Reciveing</legend>
    <div class="panel-body" style="padding:0;">
      <?php echo form_open('load_recive/save_and_changes',array('name'=>'bb', 'id'=>'bb','class'=>'form-horizontal form-validate form-wysiwyg','enctype'=>'multipart/form-data'));?>
    	<?php if ($this->session->flashdata('message_gagal')) {
    		echo '<hr><div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$this->session->flashdata('message_gagal').'</div>';
    	} if ($this->session->flashdata('message_sukses')) {
    		echo '<hr><div class="alert alert-success"><button class="close" data-dismiss="alert" type="button">&times;</button>'.$this->session->flashdata('message_sukses').'</div>';
    	} ?>
      <div class="form-group">
    		<label class="col-lg-2 control-label">Username / NIP</label>
    		<div class="col-lg-6">
    			<input type="text" required name="nip_users" id="nipusers" class="form-control" data-rule-required="true" value="<?php echo $this->session->userdata('sesi_username');?>" disabled>
    		</div>
    	</div>
      <div class="form-group">
    		<label class="col-lg-2 control-label">Nama Lengkap</label>
    		<div class="col-lg-6">
    			<input type="text" required name="fullname" id="fullname" class="form-control" data-rule-required="true" value="<?php echo $this->session->userdata('sesi_nama_lengkap');?>" disabled>
    		</div>
    	</div>
      <div class="form-group">
    		<label class="col-lg-2 control-label">Tanggal Pengiriman</label>
    		<div class="col-lg-6">
    			<input type="text" required name="date_send" id="datesend" class="form-control" data-rule-required="true" value="<?php echo date('d-m-yy H:i:s');?>" disabled>
    		</div>
    	</div>
    </div>
  </div>
</div>
