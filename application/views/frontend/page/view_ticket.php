<div class="view_ticket_wrapper">
    <div class="container">
        <div class="section-title">
            <h5 class="title">Ticket Details</h5>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-9 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="ticket_uid">#<?= $ticket->ticket_id ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="ticketInfo">
                            <?php if ($ticket->user_image): ?>
                                <img class="profile-img" src="<?= base_url($ticket->user_image) ?>" alt="image">
                            <?php else: ?>
                                <img class="profile-img" src="<?= base_url('assets/frontend/images/avatar.png') ?>" alt="image">
                            <?php endif; ?>
                            <div class="info_content">
                                <h5 class="title"><?= $ticket->subject ?></h5>
                                <h6 class="create_date">Created At : <?= __get_time_ago($ticket->created_at) ?></h6>
                            </div>
                        </div>
                        <div class="ticket_description mt-4">
                            <h6 class="font-600 mb-1">Description :-</h6>
                            <p><?= $ticket->description ?></p>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------
                    Submit Ticket Details AreA End
                ---------------------------------------------->

                <div class="card">
                    <div class="card-body">
                        <?php foreach ($chat_list as $key => $chat): ?>
                            <div class="user_replay_box">
                                <?php if ($chat->sender_image): ?>
                                    <img class="profile-img" src="<?= base_url($chat->sender_image) ?>" alt="profile-img">
                                <?php else: ?>
                                    <img class="profile-img" src="<?= base_url('assets/frontend/images/avatar.png') ?>" alt="profile-img">
                                <?php endif; ?>
                                <div class="replay_details_content">
                                    <h5 class="title"><?= $chat->sender_name ?> &nbsp;&nbsp; <?= __user_role(($chat->role == 'admin') ? 'admin' : 'customer'); ?></h5>
                                    <h6 class="create_date">Created At : <?= __get_time_ago($chat->created_at) ?></h6>
                                    <div class="mt-3">
                                        <p><?= $chat->message ?></p>
                                    </div>
                                </div>
                            </div><!-- user_replay_box -->
                        <?php endforeach; ?>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col./ -->
            <div class="col-md-12 col-lg-3 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Ticket Details</h5>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="ticketDetails_list">

                            <li class="info__menu">
                                <p>Customer :</p>
                                <span><?= $ticket->user_name ?></span>
                            </li>

                            <li class="info__menu">
                                <p>Category :</p>
                                <span><?= $ticket->category_name ?></span>
                            </li>

                            <li class="info__menu">
                                <p>Open Date :</p>
                                <span><?= format_datetime($ticket->created_at) ?></span>
                            </li>

                            <li class="info__menu">
                                <p>Status :</p>
                                <?= __ticket_status($ticket->status) ?>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- row -->
    </div>
</div>