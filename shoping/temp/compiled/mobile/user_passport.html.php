<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ECShop_mobile</title>
</head>

<body>

<p align='left'>
用户注册
<form action="user.php?act=act_register" method="post" name="formUser">
      <table>
        <tr>
          <td align="right">用户名</td>
          <td >
          <input name="username" type="text" id="username" />
            <span id="username_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right">email</td>
          <td>
          <input name="email" type="text" id="email" />
            <span id="email_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right">密码</td>
          <td>
          <input name="password" type="password" id="password1" />
            <span style="color:#FF0000" id="password_notice"> *</span>
          </td>
        </tr>
        
        <tr>
          <td align="right">确认密码</td>
          <td>
          <input name="confirm_password" type="password" id="conform_password" />
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
          </td>
        </tr>
<?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
	<?php if ($this->_var['field']['id'] == 6): ?>
        <tr>
          <td align="right">密码提示问题</td>
          <td>
          <select name='sel_question'>
	  <option value='0'>请选择密码提示问题</option>
	  <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
	  </select>
          </td>
        </tr>
        <tr>
          <td align="right" <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>>密码问题答案</td>
          <td>
	  <input name="passwd_answer" type="text" class="inputBg" maxlengt='20'/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
          </td>
        </tr>
	<?php else: ?>
        <tr>
          <td align="right" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>
          <td>
          <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" class="inputBg" /><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
          </td>
        </tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


        <tr>
          <td colspan="2"align="left">
          <span style="color:#FF0000"> 用电脑登陆时，请完善个人信息！</span><br />
          <input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <input name="Submit" type="submit" value="立即注册">
          </td>
        </tr>
      </table>
    </form>
<a href='index.php'>返回首页</a><br />
<?php echo $this->_var['footer']; ?>
</p>
</body>
</html>