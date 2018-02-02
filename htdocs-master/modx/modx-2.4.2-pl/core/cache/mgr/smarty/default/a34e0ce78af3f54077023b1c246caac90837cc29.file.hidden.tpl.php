<?php /* Smarty version Smarty-3.0.4, created on 2016-02-20 05:17:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/modx/modx-2.4.2-pl/manager/templates/default/element/tv/renders/input/hidden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37045089156c7e8d2a45dc3-77936981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a34e0ce78af3f54077023b1c246caac90837cc29' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/modx/modx-2.4.2-pl/manager/templates/default/element/tv/renders/input/hidden.tpl',
      1 => 1444115178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37045089156c7e8d2a45dc3-77936981',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/XAMPP/xamppfiles/htdocs/modx/modx-2.4.2-pl/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
" />

<script type="text/javascript">
// <![CDATA[

MODx.on('ready',function() {
    var fld = MODx.load({
    
        xtype: 'hidden'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,value: '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'),'javascript');?>
'
    
    });
    var p = Ext.getCmp('modx-panel-resource');
    if (p) {
        p.add(fld);
        p.doLayout();
    }
});

// ]]>
</script>
