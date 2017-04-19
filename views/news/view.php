<div id="dataNews">
    <div id="news_content_title">
        <?=$this->news->getTitle()?>
    </div>
    <div id="news_content_text">
        <p><?=$this->news->getText()?></p>
    </div>    
</div>
<div id="commentForm">  
    <input type="text" size="100" name="comment" id="comment" placeholder="Your comment">
    <input type="submit" value="Comment" onclick="commentMe(<?=$this->news->getId()?>)">
</div>

<div id="commentBlock">
    <?php foreach ($this->comments as $comment) : ?>     
        <div class="comment"><?=$comment->getText()?></div>
    <?php endforeach;?>
</div>



<script src="/public/js/functions.js"></script>