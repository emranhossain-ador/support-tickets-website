<?php $count = 0; ?>
<section class="knowledge-section">
    <div class="container">
        <div class="section-title">
            <h5 class="title">Knowledge</h5>
        </div>
        <div class="row">
            <?php foreach ($category as $key => $cat): ?>
                <?php if (!empty($cat['knowledge'])): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 relative z-index" data-aos="zoom-in" data-aos-duration="1500">
                        <div class="knowledge_box">
                            <div class="knowledge_header">
                                <h5 class="title"><?= $cat['title'] ?></h5>
                                <div class="countTotal">
                                    <?= $total_knowledge[$key]['total'] ?>
                                </div>
                            </div>
                            <div class="knowledge_body">
                                <ul class="menu_items">
                                    <?php foreach ($cat['knowledge'] as $key => $knowledge): ?>
                                        <?php $count++; ?>
                                        <li>
                                            <a href="<?= base_url("view-knowledge/$knowledge->id") ?>" class="item_lnk">
                                                <i class="icofont-page"></i>&nbsp;
                                                <?= $knowledge->title ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div><!-- col./ -->
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>