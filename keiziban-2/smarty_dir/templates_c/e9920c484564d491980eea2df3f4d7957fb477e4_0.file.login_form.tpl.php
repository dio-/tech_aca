<?php
/* Smarty version 3.1.29, created on 2016-10-07 08:31:05
  from "/home/miyuki/github/teca_aca/keiziban-2/smarty_dir/templates/login_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f6deb9e2a140_73404036',
  'file_dependency' => 
  array (
    'e9920c484564d491980eea2df3f4d7957fb477e4' => 
    array (
      0 => '/home/miyuki/github/teca_aca/keiziban-2/smarty_dir/templates/login_form.tpl',
      1 => 1475796386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f6deb9e2a140_73404036 ($_smarty_tpl) {
?>
<form action="login_form.php" method="post">
ID：
<input type="text" name="name" size="40"><br>

pass :
<input type="password" name="password">

<input type="submit" value="送信"><input type="reset" value="リセット">

<!--ここでエラーを表示したい<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
-->

<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php echo $_smarty_tpl->tpl_vars['password']->value;?>

</form>
<?php }
}