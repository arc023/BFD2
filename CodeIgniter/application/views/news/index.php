<?php foreach ($news as $news_item): ?>

    <?php echo $news_item['firstname'] ?>
    <?php echo $news_item['lastname'] ?>
    
    <p><a href="news/<?php echo $news_item['userID'] ?>">View details</a></p>

<?php endforeach ?>