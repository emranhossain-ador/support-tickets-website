<section class="faq_section" data-aos="fade-down" data-aos-duration="1500">
    <div class="container">
        <div class="row flex justify-center">
            <div class="col-md-12 col-lg-10 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 text-center ">
                            <h4 class="lg_title">FAQ's</h4>
                        </div>
                        <!-- accordion Area -->
                        <div id="accordion" class="accordion_area">
                            <?php foreach ($faq as $key => $row): ?>
                                <?php if ($row->status == 1): ?>
                                    <div class="accordion_card">
                                        <div class="accordion_header" id="heading<?= $key ?>">
                                            <a href="javascript:;" class="faq_label collapsed decoration-none" data-toggle="collapse" data-target="#collapse<?= $key ?>" aria-expanded="true" aria-controls="collapse<?= $key ?>">
                                                <p><?= $row->title ?></p>
                                                <span class="accordion_icon"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </div>

                                        <div id="collapse<?= $key ?>" class="collapse" aria-labelledby="heading<?= $key ?>" data-parent="#accordion">
                                            <div class="accordion_body">
                                                <?= $row->description ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <!-- accordion Area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>