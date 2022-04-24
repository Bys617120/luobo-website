 <!DOCTYPE html>
 <html lang="qwq">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
		<title><?=$pageInfo['title']; ?> - <?=$pageInfo['sub-title']; ?></title>
		<link rel="stylesheet" href="/assets/css/main.css?r=<?=time(); ?>">
		<link rel="stylesheet" href="/assets/vendor/viewer.js/viewer.min.css">
		<link rel="stylesheet" href="//at.alicdn.com/t/font_3336549_p6hxmbr834.css">
		
	</head>
	<body>
		<div class="container">
			<section id="content">
				<h1 class="title"><?=$pageInfo['title']; ?></h1>
				<h2 class="sub-title"><?=$pageInfo['sub-title']; ?> | 写于 <?=date('Y年n月j日', strtotime($pageInfo['time'])); ?></h2>

				<?php include('page/' . $page . '.php'); ?>
				<?php if($page != 'dir' || ($search ?? '') != ''){  ?>
				<h2 style="text-align:center;"><a href="javascript:history.go(-1)"><i class="iconfont icon-back"></i> 返回</a></h2>
				<?php } ?>
			</section>
		</div>
		
		<section id="author" onclick="alert('萝卜最可爱了ww')">
			<img src="https://q1.qlogo.cn/g?b=qq&s=640&nk=1773966070" alt="可爱的萝卜ww" title="可爱的萝卜ww" />
			<p>By.萝卜</p>
        </section>
		
		<script src="/assets/vendor/viewer.js/viewer.min.js"></script>
		<script src="/assets/js/main.js?r=<?=time(); ?>"></script>
	</body>
</html>