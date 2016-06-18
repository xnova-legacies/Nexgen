<head>
<style type="text/css">
h1{color: #494646;}
.row{ margin:20px 20px 20px 20px;width: 100%;}
.post-box {width: 30%;float: left;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;}
.post-content {padding: 0;}
.post-content {display: block;padding: 4px;margin-bottom: 20px;line-height: 1.42857143;background-color: #fff;border: 1px solid #ddd;border-radius: 4px;-webkit-transition: all .2s ease-in-out;transition: all .2s ease-in-out;}
.post-content .caption {padding: 9px;color: #333;}
.post-content .caption p{font-size: 14px;}
.post-content h4 {font-size: 18px;margin-top: 10px;margin-bottom: 10px;}
.post-content a {color: #428bca;text-decoration: none;background: transparent;}
.post-content p {margin: 0 0 10px;}
.no-record{font-size: 16px;font-weight: bold;color: #DD4B39;padding: 10px}
</style>
</head>
<h1>Blog Posts</h1>
<?= $this->Html->link('Add New Post', ['action' => 'add']) ?>
<div class="row">
    <?php if(!empty($posts)): foreach($posts as $post): ?>
    <div class="post-box">
        <div class="post-content">
		<?= $this->Html->link('Edit', ['action' => 'edit', $post->id]) ?>
            <div class="caption">
                <h4><a href="javascript:void(0);"><?php echo $post->title; ?></a></h4>
                <p><?php echo $post->description; ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; else: ?>
    <p class="no-record">No post(s) found......</p>
    <?php endif; ?>
</div>