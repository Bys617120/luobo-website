<table class="file-list">
    <thead>
        <tr>
            <th>文件名</th>
            <th>日期</th>
            <th>大小</th>
        </tr>
    </thead>
    <tbody>
        <?php for($x = 0; $x < 20; $x++){ ?>
        <tr class="item">
            <td><span class="icon"><?php file_type_icon('avi'); ?></span> testing.avi</td>
            <td>2022-02-22 22:22:22</td>
            <td>2.333TB</td>
        </tr>
        <?php } ?>
    </tbody>
</table>