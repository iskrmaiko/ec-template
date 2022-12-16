<?php
/* Smarty version 4.2.1, created on 2022-12-16 11:23:30
  from '/var/www/html/smarty/templates/ec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639c5532805716_39839050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2649f296992bd87d614deb8862248f8a7d2dd4fd' => 
    array (
      0 => '/var/www/html/smarty/templates/ec.tpl',
      1 => 1671189738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639c5532805716_39839050 (Smarty_Internal_Template $_smarty_tpl) {
?><!---->
<style>
.infos .col-md-6{
  margin: 1rem 0;
  padding: 10px;
}
.row img{
  display: block;
  width: 90%;
}
.contacts{
  padding:1rem 3.3rem;
}
.contacts p{
  margin:6px 0;
}
.contacts .row{
  background-color:#f1f1f6;
  font-size:10px;
  margin:0 auto 9px;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/8f44b5795a.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<div id="undercolumn">
  <div id="undercolumn_aboutus">
    <!---->
    <div style="width: 540px; margin: 0 auto;line-height:130%">
      <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
" alt="" style="display: block; width: 100%;" />
      
      <p style="margin: 15px 20px 10px;">
      <?php echo $_smarty_tpl->tpl_vars['intro']->value;?>

      </p>
      
    <div class="infos">
    
<!--row1-->
    <div class="row">
        <div class="col-md-6">
          <img src="<?php echo $_smarty_tpl->tpl_vars['img01']->value;?>
" alt="" style="display: block; width: 90%;"/>
        </div>
        <div class="col-md-6">
          <p><?php echo $_smarty_tpl->tpl_vars['desc01']->value;?>
</p>
        </div>
      </div>

<!--row2-->
      <div class="row">
        <div class="col-md-6">
        <p><?php echo $_smarty_tpl->tpl_vars['desc02']->value;?>
</p>
      </div>
        <div class="col-md-6">
          <img src="<?php echo $_smarty_tpl->tpl_vars['img02']->value;?>
" alt="" style="display: block; width: 90%;"/>
        </div>
      </div>
<!--row3-->
      <div class="row">
        <div class="col-md-6">
         <img src="<?php echo $_smarty_tpl->tpl_vars['img03']->value;?>
" alt="" style="display: block; width: 90%;"/>
        </div>
        <div class="col-md-6">
          <p><?php echo $_smarty_tpl->tpl_vars['desc03']->value;?>
</p>
        </div>
      </div>
<!--row4-->
      <div class="row" style="<?php if (!(isset($_smarty_tpl->tpl_vars['img04']->value))) {?>display:none<?php }?>">
        <div class="col-md-6">
            <p><?php echo $_smarty_tpl->tpl_vars['desc04']->value;?>
</p>
        </div>
        <div class="col-md-6">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img04']->value;?>
" alt="" style="display: block; width: 90%;"/>
        </div>
      </div>
    </div>
      
<!--contact info-->
      <div style="background-color:#e8e4ec;margin-bottom:2rem;">
      <h6 style="text-align: center;padding:10px 0;font-family:'游明朝';margin-bottom:0;">企業情報</h6>
      <img src="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
" alt="" style="display: block; margin:auto;width: 80%;height:auto;"/>
        
        <div class="contacts">
        
        <div class="row">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　企業名</p></div>
          <div class="col-md-9"><p> |
          　　<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</p></div>
        </div>

        <div class="row">
          <div class="col-md-3">
          <p><i class="fa-solid fa-phone"></i>
          　電話番号</p></div>
          <div class="col-md-9"><p> |
          　　<a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</a></p></div>
        </div>

        <div class="row">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　住所</p></div>
          <div class="col-md-9"><p> |
          　　<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p></div>
        </div>

        <div class="row" style="<?php if (!(isset($_smarty_tpl->tpl_vars['homepage']->value))) {?>display:none<?php }?>">
          <div class="col-md-3">
          <p style="font-size: 9px;"><i class="fa-solid fa-house-user"></i>
          　ホームページ</p></div>
          <div class="col-md-9"><p> |
          　　<a href="<?php echo $_smarty_tpl->tpl_vars['homepage']->value;?>
">
          <?php echo $_smarty_tpl->tpl_vars['homepage']->value;?>
</a></p></div>
        </div>

        <div class="row" style="<?php if (!(isset($_smarty_tpl->tpl_vars['instagram']->value))) {?>display:none<?php }?>">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Instagram</p></div>
          <div class="col-md-9"><p> |
          　　<a href="<?php echo $_smarty_tpl->tpl_vars['instagram']->value;?>
">
          <?php echo $_smarty_tpl->tpl_vars['instagram']->value;?>
</a></p></div>
        </div>
      
      
        <div class="row" style="<?php if (!(isset($_smarty_tpl->tpl_vars['facebook']->value))) {?>display:none<?php }?>">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Facebook</p></div>
          <div class="col-md-9"><p> |
          　　<a href="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
">
          <?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
</a></p></div>
        </div>


        <div class="row" style="<?php if (!(isset($_smarty_tpl->tpl_vars['twitter']->value))) {?>display:none<?php }?>">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Twitter</p></div>
          <div class="col-md-9"><p> |
          　　<a href="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
">
          <?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
</a></p></div>
        </div>


        <div class="row" style="<?php if (!(isset($_smarty_tpl->tpl_vars['line']->value))) {?>display:none<?php }?>">
          <div class="col-md-3">
          <p><i class="fa-solid fa-house-user"></i>
          　Line</p></div>
          <div class="col-md-9"><p> |
          　　<a href="<?php echo $_smarty_tpl->tpl_vars['line']->value;?>
">
          <?php echo $_smarty_tpl->tpl_vars['line']->value;?>
</a></p></div>
        </div>
        
        </div>
      </div>

    </div>
  </div>
</div>
<?php }
}
