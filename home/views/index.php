<?php include dirname(__FILE__) . '/inc/header.php'; ?>


<div class="mainContainer-index">
<div class="main">
	<div class="index-about">
  	<div class="index-about-left left">
    	<div class="about-company">
        <h3 class="title"><span class="more"><a href=""></a></span><span class="titlename">公司简介</span></h3>
        <div class="main-text"><p>
	<img alt="" src="<?php echo base_url();?>uploads/<?php echo $about->imgurl;?>" style="width: 186px; height: 140px; float: left; margin-left: 5px; margin-right: 5px;">
		<?php echo $about->content;?></p>
</div>
      </div>
  		
<div class="box">
	<div class="hd">
		<h2>产品中心</h2>
		<div class="sildPicBar" id="sildPicBar">
			<div class="arrow">
				<span class="pre"></span>
				<span class="next"></span>
			</div>
			<ul id="dot"><li class="select" onclick=""></li><li class="" onclick="TencentArticl.SildTab(1)"></li></ul>
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="bd">
		<div style="position: relative;" class="cnt-wrap" id="cnt-wrap">
			<div style="position: absolute; left: 0px;" class="cnt" id="cnt">
				<ul>
          <?php foreach ($pro as $v) {
            echo '<li><a href="" class="aproimg"><img src="upload/51de2bc24d6de.png" alt="'.$v->title.'"></a><a href="'.$v->imgurl.'" class="aprotitle">'.$v->title.'</a></li>';
          }?>
				</ul>
			</div>
		</div>
	</div>
</div>



    </div>
    <div class="index-about-right right">
    	<h3 class="title"><span class="more"><a href=""></a></span><span class="titlename">项目介绍</span></h3>
      <div class="main-text">
      		<?php echo $content->content;?>
		</div>
      <div class="right-image"><p>
	<img alt="" src="./images/professional.jpg" style="width: 290px; height: 125px;"></p>
</div>
    </div>
    <div class="clear"></div>
  </div>
  
  <div class="index-news">
  	<div class="index-news-block left">
    	<h3 class="title"><span class="more"><a href="">更多...</a></span><span class="titlename"><a href=""\">公司新闻</a></span></h3>
      <ul class="main_list">
        <?php foreach ($news as $v) {
            echo '<li><span class="time">'.$v->ctime.'</span><a href="" title="'.$v->title.'">'.$v->title.'</a></li>';
          }?>
      </ul>
    </div>
    <div class="index-news-block-middle left">
    	<h3 class="title"><span class="more"><a href="">更多...</a></span><span class="titlename"><a href=""http://localhost/Kuwebs/upload/news/index.php?lang=%27cn%27&amp;menuid=62">行业资讯</a></span></h3>
      <ul class="main_list">
    		<?php foreach ($news as $v) {
            echo '<li><span class="time">'.$v->ctime.'</span><a href="" title="'.$v->title.'">'.$v->title.'</a></li>';
          }?>
      </ul>
    </div>
    <div class="index-news-block-right">
			<h3 class="title"><span class="more"><a href="">更多...</a></span><span class="titlename"><a href="">在线留言</a></span></h3>
      <ul class="main_list">
    		<?php foreach ($news as $v) {
            echo '<li><span class="time">'.$v->ctime.'</span><a href="" title="'.$v->title.'">'.$v->title.'</a></li>';
          }?>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  
  <div class="index-friendlink">
    	<h3 class="title"><span class="more"><a href=""></a></span><span class="titlename">友情链接</span></h3>
      <div class="main_list">
      	<ul>
          <?php foreach ($link as $v) {
            echo '<li class="textlink link2"><a href="'.$v->url.'" title="'.$v->title.'" ><span>'.$v->title.'</span></a></li>';
          }?>
      	</ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
</div>

<?php include dirname(__FILE__) . '/inc/footer.php'; ?>