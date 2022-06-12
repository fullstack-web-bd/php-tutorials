<!-- Start Portfolio Section -->
<?php $portfolios = get_portfolios(); ?>

<section id="portfolio" class="content container-padding">
    <h2 class="section-title">Portfolios</h2>
    <div class="portfolios">
        <?php foreach ($portfolios as $portfolio) : ?>
            <div class="portfolio">
                <img src="<?php echo $portfolio['image']; ?>" alt="">
                <h3><?php echo $portfolio['title']; ?></h3>
                <div>
                    <?php foreach ($portfolio['tags'] as $tag) : ?>
                        <span class="badge badge-info"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- End Portfolio Section -->