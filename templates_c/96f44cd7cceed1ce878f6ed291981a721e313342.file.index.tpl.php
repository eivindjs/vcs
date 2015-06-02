<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 12:18:44
         compiled from "views\Home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30279556d83044496b4-46796542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f44cd7cceed1ce878f6ed291981a721e313342' => 
    array (
      0 => 'views\\Home\\index.tpl',
      1 => 1433238581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30279556d83044496b4-46796542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556d83044970b9_34099417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d83044970b9_34099417')) {function content_556d83044970b9_34099417($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../shared/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
	<div class="page-header space" align="center">
		<h1>
			<small>Welcome <?php echo $_SESSION['user'];?>
. You are logged in. Select action in menu. </small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img
				src="https://www.basefarm.com/sites/default/files/styles/featured_thumbnail/public/media/Article/Basefarm%20Cloud%20Computing.jpg?itok=6m5Pls8L">
		</div>
		<div class="col-md-6">
			<h2>You have 3 choices.</h2> <br /> <b>1. Manual source</b><br/>
			Here you can create, check file history, restore deleted and recently changed files.  <br />
			<b>2. Alerts </b><br/>
			Here you can create, check file history, restore deleted and recently changed files.
			<br /><b> 3. Swatch</b><br/>
			Here you can create, check file history, restore deleted and recently changed files.
			<br />
					<br/><a href="/vcs/Brukerveiledning.pdf" target="_blank">Norwegian user manual</a>
			<br/><br/><b> For questions, 
			please contact administrator something@basefarm.com
			</b>
		</div>
		
		
		
	</div>
	<br />
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../shared/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
