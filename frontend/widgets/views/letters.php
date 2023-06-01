<section class="letters">
    <div class='center-wrapper'>
        <h2 class="letters__title">Благодарственные письма</h2>
        <div class="letters__row">
            <?php if (!empty($letters)): ?>
                <?php foreach ($letters as $letter): ?>
                    <?php $image = \common\components\StaticFunctions::getImage($letter->image, 'letters', $letter->id); ?>
                    <div class="letters__col">
                        <a href="<?=$image?>" class="letters__item" data-fancybox="gallery">
                            <img src="<?=$image?>" alt="img">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end letters -->
