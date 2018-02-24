<h2><?= $title ?></h2>
<div class="row">
    <?php 
    foreach ($posts as $post) {
    ?>
    <div class="col-md-10">
        <div class="post-title">
            <h3><?php echo $post['post_title'];?></h3>
            <small>Post Date : <?php echo date('d-M-Y', strtotime($post['created_at']));?></small>
        </div>
        <div class="post-summary">
            <p><?php echo $post['post_body'];?></p>
            <br><br>
            <a class="btn btn-default" href="<?php echo base_url('posts/'.$post['id']);?>">Read More</a>
        </div>
    </div>
    <?php } ?>
    <div class="col-md-10" style="padding: 20px">
        <?php echo $pagination; ?>
    </div>
</div>