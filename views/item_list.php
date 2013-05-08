<div class="container" style="padding-top: 50px;">
    <?php foreach ($itemList as $val): ?>

        <div class="block">
            <div>
                <a href="/ironman/<?php echo $mod; ?>/details/<?php echo $val['id']; ?>">
                    <img class="shadow" src="/ironman/img/<?php echo $mod; ?>/<?php echo $val['id']; ?>.jpg">
                </a>
            </div>
            <div style="width: 85%;">
                <h2><a href="/ironman/<?php echo $mod; ?>/details/<?php echo $val['id']; ?>"><?php echo $val['title']; ?></a></h2>
                <p><?php echo $val['info']; ?></p>
            </div>
        </div>

    <?php endforeach; ?>
</div>
