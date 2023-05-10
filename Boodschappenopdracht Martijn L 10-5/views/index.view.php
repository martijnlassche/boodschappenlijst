<?php require('partials/head.php'); ?>
        <h1>            <?= $greeting; ?></h1>



<br>
<br>
<br>



<?php foreach ($groceries as $grocery) : ?>
                <li>
                    <?php if ($grocery) : ?>
                      
                            <?= $grocery->name; ?>
                        <?php endif; ?>
                </li>         
                <?php endforeach; ?>
                


<?php require('partials/footer.php'); ?>