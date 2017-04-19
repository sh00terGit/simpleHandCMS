<?php foreach ($this->news as $news) : ?>
<div id="dataNews">
    <div id="news_content_title"><?= $news->getTitle() ?></div> 
    <div id="news_content_date"><?= $news->getDate()?></div>
    <div id="news_content_text"><?= $news->getShortText() ?>
        <a href="<?=URL?>news/view/<?=$news->getId()?>">&nbsp;&nbsp;more....</a>
    </div>
</div>
    <?php endforeach; ?>




<div id ="paginator">
    <?php for($i = 1; $i <= $this->countPages;$i++) : ?>
    <?php if ($i == $this->page) { ?>
        <a href="<?=URL?>news?page=<?=$this->page ?>">
                [<?=$this->page ?>]
        </a>
    <?php } else {?>
        <a href="<?=URL?>news?page=<?=$i ?>">
                <?=$i ?>
        </a>
    <?php } ?>
     <?php endfor; ?>
</div>
