<div class="view_knowledge_wrap">
    <div class="container">
        <div class="section-title">
            <h5 class="title">View Knowledge</h5>
        </div>
        <div class="row flex justify-center">
            <div class="col-md-12 col-lg-10 col-sm-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?= $knowledge->title ?></h5>
                    </div>
                    <div class="card-body knowledge_description">
                        <?= $knowledge->details ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>