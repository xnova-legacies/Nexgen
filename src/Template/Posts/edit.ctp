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
<!-- File: src/Template/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
    echo $this->Form->create($post);
    echo $this->Form->input('title');
    echo $this->Form->input('description', ['rows' => '3']);
    echo $this->Form->button(__('Save Post'));
    echo $this->Form->end();
?>