<div class="container" style="padding-top: 50px;">

    <div class="block">
        <div>
            <img style="width: 150px;" class="shadow" src="/ironman/img/<?php echo $mod; ?>/<?php echo $details['id']; ?>.jpg"><br>
            <a href="/ironman/<?php echo $ctrl; ?>" style="margin-top: 10px;" class="btn btn-danger">back</a>
        </div>
        <div style="width: 80%">
            <h3><?php echo $details['title']; ?></h3><br>
            <p><?php echo nl2br($details['big_info']); ?></p>
        </div>
    </div>

</div>
