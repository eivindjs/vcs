<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 12:29:21
         compiled from "views\Alert\restoredeleted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10404556d85810d4792-07998372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df9fab54091c9a30ef5a4fd8ef30de3d71b1170' => 
    array (
      0 => 'views\\Alert\\restoredeleted.tpl',
      1 => 1433237959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10404556d85810d4792-07998372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewmodel' => 0,
    'fileCollection' => 0,
    'key' => 0,
    'i' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556d85814a1511_16956700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d85814a1511_16956700')) {function content_556d85814a1511_16956700($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../shared/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<ol class="breadcrumb">
		<li><a href="index">Alert</a></li>
		<li class="active">Restore deleted</li>
	</ol> 
	<div class="page-header space" >
	      	<h1 style="align:center">Restore deleted</h1>   
   	</div>
	<div hidden="true" id="alertSuccess" class="alert alert-success alert-dismissible"
		role="alert">
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close" >
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="row">
		<div class="col-md-3">
			<input class="form-control" id="search" placeholder="Search" />
 		</div>
	</div>
	</br>
   <!-- Table -->
   
    <table class="table table-bordered table-hover scrollable" id="contentTable">
      <thead>
      	<tr>
      	<th width="2%">#</th>
	    <th>FileID</th>
		<th>Filename</th>
		<th>Comment</th>
		<th>Path</th>
		<th>Time</th>
		<th>Version</th>
		<th>User</th>
		</tr>
  	</thead>
	<?php  $_smarty_tpl->tpl_vars['fileCollection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fileCollection']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['viewmodel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fileCollection']->key => $_smarty_tpl->tpl_vars['fileCollection']->value) {
$_smarty_tpl->tpl_vars['fileCollection']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['fileCollection']->key;
?>
		<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fileCollection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
				<tbody class="tbody2">
					<tr id="activeFile">
						<td><div class='glyphicon glyphicon-plus accordion-toggle' id="test123" data-toggle="collapse" data-target=".childfile<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> </div>
					    <td class="fileid"><?php echo $_smarty_tpl->tpl_vars['file']->value->getFileID();?>
</td>
					    
					    <td class="filename"><?php echo $_smarty_tpl->tpl_vars['file']->value->getFilename();?>
</td>				    
						<td class="comment"><?php echo $_smarty_tpl->tpl_vars['file']->value->getComment();?>
</td>
						<td class="content" style="display:none"><?php echo $_smarty_tpl->tpl_vars['file']->value->getContent();?>
</td>
						<td class="path"><?php echo $_smarty_tpl->tpl_vars['file']->value->getPath();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['file']->value->getTime();?>
</td>
						<td class="version"><?php echo $_smarty_tpl->tpl_vars['file']->value->getVersion();?>
</td>
						<td class="user"><?php echo $_smarty_tpl->tpl_vars['file']->value->getUser();?>
</td> 
						<td class="eID" style="display:none"><?php echo $_smarty_tpl->tpl_vars['file']->value->getID();?>
</td>
						<td><h3><input type="submit" class="btn btn-danger btnRestore" value="Restore"/></h3></td>
					    
					</tr>
			  	</tbody>
			  	
			<?php } else { ?>
				<tbody>
					<tr class="childfile<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 hiddenRow accordian-body success collapse">
						<td><div></div>
						<td class="fileid"><i><?php echo $_smarty_tpl->tpl_vars['file']->value->getFileID();?>
</i></td>				    
						<td class="filename"><i><?php echo $_smarty_tpl->tpl_vars['file']->value->getFilename();?>
</i></td>
						<td class="comment"><i><?php echo $_smarty_tpl->tpl_vars['file']->value->getComment();?>
</i></td>
						<td class="path"><i><?php echo $_smarty_tpl->tpl_vars['file']->value->getPath();?>
</i></td>
						<td><i><?php echo $_smarty_tpl->tpl_vars['file']->value->getTime();?>
</i></td>
						<td class="version"><i><?php echo $_smarty_tpl->tpl_vars['file']->value->getVersion();?>
</i></td>
						<td class="user"><i><?php echo $_smarty_tpl->tpl_vars['file']->value->getUser();?>
</i></td> 
					</tr>
				</tbody>
			<?php }?>
		<?php } ?>
	 <?php } ?>
	 
   </table>
 
</div>


<?php echo '<script'; ?>
>
//Script that triggers when edit-button in table is clicked
$(".accordion-toggle").click(function() {
	restoreDeleted.changeIcon(this);	
});

$(".btnRestore").click(function(){
	restoreDeleted.restore("alert/restoreFile", this);
});

$('#search').keyup(function() {
	restoreDeleted.search(this);
});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ('../shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
