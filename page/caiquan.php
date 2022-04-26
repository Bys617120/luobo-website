<?php
	$猜拳 = ['石头', '剪刀', '布'];
	$自己 = $_GET['quan'] ?? 'none';
	$isWin = false;
	
	if ($自己 != 'none' && in_array($自己, [0, 1, 2])) {
		$对手 = rand(0, 2);
		if ($自己 == $对手) {
			$isWin = -1;
		} elseif ($自己 == 0 && $对手 == 1) {
			$isWin = 1;
		} elseif ($自己 == 0 && $对手 == 2) {
			$isWin = 0;
		} elseif ($自己 == 1 && $对手 == 0) {
			$isWin = 0;
		} elseif ($自己 == 1 && $对手 == 2) {
			$isWin = 1;
		} elseif ($自己 == 2 && $对手 == 0) {
			$isWin = 1;
		} elseif ($自己 == 2 && $对手 == 1) {
			$isWin = 0;
		}
	}
?>
<meta charset="UTF-8"/>
<center>
    <h1>猜拳游戏</h1>
	<?php if ($自己 == 'none') { ?>
        <p>请出拳：</p>
        <a href="/?page=caiquan&quan=0">石头</a> |
        <a href="/?page=caiquan&quan=1">剪刀</a> |
        <a href="/?page=caiquan&quan=2">布</a>
	<?php } elseif (!in_array($自己, [0, 1, 2])) { ?>
        <p style="color:red;">参数错误！</p>
	<?php } else { ?>
        <p><span style="color:blue;">你出的拳是：</span><?= $猜拳[$自己]; ?></p>
        <p><span style="color:blue;">对手的拳是：</span><?= $猜拳[$对手]; ?></p>
        <h2><?= "你" . [-1 => '平局', 1 => '赢', 0 => '输'][$isWin] . '了！'; ?></h2>
        <a href="javascript:history.go(-1);">返回</a>
	<?php } ?>
</center>