<div class="img-preview-list">
	<?php for ($x = $start; $x <= $end; $x++) { ?>
        <div class="img-preview">
            <div class="img-preview-box">
				<?php
					$file = "assets/img/$page/$prefix-$x.";
					$subfix = ['png', 'jpg', 'webp'];
					
					foreach ($subfix as $_subfix) {
						
						if (file_exists($file . $_subfix)) break;
					}
				?>
                <img class="img-preview-item" src="/<?= $file . $_subfix; ?>" alt="<?= $title; ?>作业"/>
            </div>

            <p class="img-preview-description"><?= $title; ?>作业图片<?= $x; ?></p>
        </div>
	<?php } ?>
</div>