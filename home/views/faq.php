<?php include dirname(__FILE__) . '/inc/header.php'; ?>

<div class="mainContainer col2-left-layout">
    <div class="col-left faqListRight"> 
      <div class="commSideNav faqListRightNav">
                <div class='divBlock blockcn2'>
<div class='title blocktcn2'>联系我们</div>
<div class='content blockccn2'><p>
  <span style="font-size: small;"><span style="font-family: Arial;">电话: 0755-36943966 13627483319<br />
  Email: <a href="mailto:info@kuwebs.com">info@kuwebs.com</a><br />
  QQ: <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=3375074&amp;site=qq&amp;menu=yes" target="_blank"><img alt="点击这里给我发消息" border="0" src="http://wpa.qq.com/pa?p=2:3375074:42" title="点击这里给我发消息" /></a>&nbsp;<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1826984900&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1826984900:41 &r=0.02336800870909389" alt="Kuwebs企业网站管理系统" title="Kuwebs企业网站管理系统"></a><br />
  地址：</span></span>深圳市福田区上梅林梅华路105号多丽工业区福田国际电子商务产业园2栋502</p>
</div>
</div>      </div>
    </div>
    <div class="col-main faqListMain">
      <h3 class="righttitle"><span class="more"><a href='http://localhost/Kuwebs/'>首 页</a>&gt;<a href='http://localhost/Kuwebs/faq/index.php?lang=cn&menuid=10&page=1' >常见问题</a></span><span class="titlename">常见问题</span></h3>
      <div class="rightcontent">
        <div class="commonText faqListText">
          <ul>
            <?php 
              foreach ($faq as $v){
                echo '<li><span class="right">'.date('Y-m-d',$v->ctime).'</span><a href="http://localhost/Kuwebs/faq/faq.php?lang=cn&itemid=13" title="'.$v->title.'">'.$v->title.'</a></li>';
              }
            ?>
          </ul>
        </div>   
      </div>
    </div>
    <div class="divClear"></div>
</div>

<?php include dirname(__FILE__) . '/inc/footer.php'; ?>