<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 12:18:57
         compiled from "views\Home\logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31609556d8311099381-05768594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e18871620b11d3d425e7ffd67df0d5d5189d477' => 
    array (
      0 => 'views\\Home\\logout.tpl',
      1 => 1433237959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31609556d8311099381-05768594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556d83110cdcf1_30668860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d83110cdcf1_30668860')) {function content_556d83110cdcf1_30668860($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../shared/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
	
	<div class="page-header space" align="center">
      	<h1>User login</h1>
   	</div>
	<div class="form-signin">
		<input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Username" style="margin-bottom:10px" required autofocus> 
		<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
		
		<button class="btn btn-lg btn-info btn-block" id="btnLogin" type="submit"><h4>Sign in</h4></button>
	</div>
	<div class="col-md-8 col-md-offset-2">
	<div class="alert alert-warning alert-dismissible" role="alert" hidden="true">
 	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>
	<div class="alert alert-danger alert-dismissible" role="alert" hidden="true">
 	 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
	</div>
	</div>
</div>



<?php echo '<script'; ?>
>
var go = document.getElementById("btnLogin");
var txt = document.getElementById("inputPassword");

txt.addEventListener("keypress", function() {
    if (event.keyCode == 13) go.click();
});

$("#btnLogin").click(function(){
	home.login();
});

<?php echo '</script'; ?>
>




<?php echo $_smarty_tpl->getSubTemplate ('../shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
