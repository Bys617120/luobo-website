<div class="list">
	<?php foreach ($list as $key => $value) { ?>
        <div class="item">
			<?php if (!is_int($key)) { ?><span class="key"><?= $key; ?></span><?php } ?>
            <span class="value"><?= $value; ?></span>
        </div>
	<?php } ?>
</div>