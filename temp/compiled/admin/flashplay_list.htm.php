<?php echo $this->fetch('pageheader.htm'); ?>
<div class="tab-div">
  <!-- tab bar -->
  <!--{i nclude file="flashplay_tab.htm"}-->
  <!-- body -->


<!--=========== Main Banner picture manager ============-->
<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('main_banner_table').style.display == 'none'){document.getElementById('main_banner_table').style.display = 'table';document.getElementById('main_banner_indication').innerHTML = '-';}else{document.getElementById('main_banner_table').style.display = 'none';document.getElementById('main_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="main_banner_indication">-</font>
                  </td>
                  <td id="main_banner_td"><font style="font-size:1.2em;color:#fff;"> Main Banner</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="main_banner_table" style="width:100%;">

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
          <tr>
            <td>
          <div style="padding:0px 10px;">
          <div class="list-div list-div-ad" id="listDiv">
          <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
            <tr>
			<th width="50px">预览</th>
              <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
            <th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
              <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
              <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
              <th>价格</th>
            <th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
            </tr>
            <?php $_from = $this->_var['main_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <tr>
              <td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
              <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
            <td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
              <td align="left"><?php echo $this->_var['item']['text']; ?></td>
              <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
              <td align="left"><?php echo $this->_var['item']['price']; ?></td>
            <td align="center">
                <a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=main&position=main&banner_width=450&banner_height=250" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
                <a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=main&position=main&banner_width=450&banner_height=250" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
          <table cellspacing="0">
            <tr>
              <td>
                <input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=main&position=main&banner_width=450&banner_height=250';" class="button"/>
              </td>
            </tr>
          </table>
          </div>
          </div>
        </td>
        </tr>
        </table>


</td>
</tr>
</table>
</div>

<!--=========== End of Main Banner picture manager ============-->





<!--=========== re_men_shai_dan Banner picture manager ============-->
<!--<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('re_men_shai_dan_banner_table').style.display == 'none'){document.getElementById('re_men_shai_dan_banner_table').style.display = 'table';document.getElementById('re_men_shai_dan_banner_indication').innerHTML = '-';}else{document.getElementById('re_men_shai_dan_banner_table').style.display = 'none';document.getElementById('re_men_shai_dan_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="re_men_shai_dan_banner_indication">-</font>
                  </td>
                  <td id="re_men_shai_dan_banner_td"><font style="font-size:1.2em;color:#fff;"> 热门晒单</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="re_men_shai_dan_banner_table" style="width:100%;">

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
          <tr>
            <td>
          <div style="padding:0px 10px;">
          <div class="list-div list-div-ad" id="listDiv">
          <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
            <tr>
			<th width="50px">预览</th>
              <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
            <th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
			<th>图片标题</th>
              <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
              <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
              <th>价格</th>
            <th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
            </tr>
            <?php $_from = $this->_var['re_men_shai_dan_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <tr>
              <td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
              <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
            <td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
              <td align="left"><?php echo $this->_var['item']['title']; ?></td>
			  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
              <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
              <td align="left"><?php echo $this->_var['item']['price']; ?></td>
            <td align="center">
                <a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=re_men_shai_dan&position=re_men_shai_dan&banner_width=50&banner_height=50&show_title_field=1" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
                <a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=re_men_shai_dan&position=re_men_shai_dan&banner_width=50&banner_height=50&show_title_field=1" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
          <table cellspacing="0">
            <tr>
              <td>
                <input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=re_men_shai_dan&position=re_men_shai_dan&banner_width=450&banner_height=250&show_title_field=1';" class="button"/>
              </td>
            </tr>
          </table>
          </div>
          </div>
        </td>
        </tr>
        </table>


</td>
</tr>
</table>
</div>

<!--=========== End of re_men_shai_dan Banner picture manager ============-->


<!--=========== re_men_huo_dong Banner picture manager ============-->
<!--<div class="tab-body" style="">
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid #999; padding:0px;background-color:#fff;
-webkit-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);
box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.31);">
  <tr>
    <td style="padding:0px 10px;background-color:#4997ef;">
      <a href="." style="text-decoration:none;" onclick="if(document.getElementById('re_men_huo_dong_banner_table').style.display == 'none'){document.getElementById('re_men_huo_dong_banner_table').style.display = 'table';document.getElementById('re_men_huo_dong_banner_indication').innerHTML = '-';}else{document.getElementById('re_men_huo_dong_banner_table').style.display = 'none';document.getElementById('re_men_huo_dong_banner_indication').innerHTML = '+';}return false;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td>


              <table>
                <tr>
                  <td style="">
                    <font style="font-size:1.2em;color:#fff;" id="re_men_huo_dong_banner_indication">-</font>
                  </td>
                  <td id="re_men_huo_dong_banner_td"><font style="font-size:1.2em;color:#fff;"> 热门活动</font></td>
                </tr>
              </table>
              
              
            </td>
          </tr>
      </table>
      </a>
    </td>
  </tr>
  <tr>
  <td id="re_men_huo_dong_banner_table" style="width:100%;">

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;padding:10px;">
          <tr>
            <td>
          <div style="padding:0px 10px;">
          <div class="list-div list-div-ad" id="listDiv">
          <table cellspacing='1' cellpadding='3' id='list-table' style="width:100%;">
            <tr>
			<th width="50px">预览</th>
              <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
            <th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
			<th>图片标题</th>
              <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
              <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
              <th>价格</th>
            <th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
            </tr>
            <?php $_from = $this->_var['re_men_huo_dong_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <tr>
              <td><img src="<?php echo $this->_var['item']['src']; ?>" style="width:50px;"></td>
              <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><?php echo $this->_var['item']['src']; ?></a></td>
            <td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
              <td align="left"><?php echo $this->_var['item']['title']; ?></td>
			  <td align="left"><?php echo $this->_var['item']['text']; ?></td>
              <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
              <td align="left"><?php echo $this->_var['item']['price']; ?></td>
            <td align="center">
                <a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>&type=re_men_huo_dong&position=re_men_huo_dong&banner_width=50&banner_height=50&show_title_field=1" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
                <a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>&type=re_men_huo_dong&position=re_men_huo_dong&banner_width=50&banner_height=50&show_title_field=1" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
          <table cellspacing="0">
            <tr>
              <td>
                <input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>&type=re_men_huo_dong&position=re_men_huo_dong&banner_width=450&banner_height=250&show_title_field=1';" class="button"/>
              </td>
            </tr>
          </table>
          </div>
          </div>
        </td>
        </tr>
        </table>


</td>
</tr>
</table>
</div>

<!--=========== End of re_men_huo_dong Banner picture manager ============-->















</div>
<script language="JavaScript">
<!--
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
function check_del()
{
  if (confirm('<?php echo $this->_var['lang']['trash_img_confirm']; ?>'))
  {
    return true;
  }
  else
  {
    return false;
  }
}

/**
 * 安装Flash样式模板
 */
function setupFlashTpl(tpl, obj)
{
    window.current_tpl_obj = obj;
    if (confirm(setupConfirm))
    {
        Ajax.call('flashplay.php?is_ajax=1&act=install', 'flashtpl=' + tpl, setupFlashTplResponse, 'GET', 'JSON');
    }
}

function setupFlashTplResponse(result)
{
    if (result.message.length > 0)
    {
        alert(result.message);
    }

    if (result.error == 0)
    {
        var tmp_obj = window.current_tpl_obj.parentNode.parentNode.previousSibling;
        while (tmp_obj.nodeName.toLowerCase() != 'tr')
        {
            tmp_obj = tmp_obj.previousSibling;
        }
        tmp_obj = tmp_obj.getElementsByTagName('center');
        tmp_obj[0].appendChild(document.getElementById('current_theme'));
    }
    
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>