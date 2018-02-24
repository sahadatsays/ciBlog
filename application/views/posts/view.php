<h2><?php echo $post->post_title; ?></h2>

<small>Post Date : <?php echo date('d-M-Y', strtotime($post->created_at));?></small>
    <div class="post-body">
                <?php echo $post->post_body;?>
    </div>