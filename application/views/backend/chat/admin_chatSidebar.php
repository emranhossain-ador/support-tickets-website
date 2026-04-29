<?php foreach ($ticket_list as $key => $ticket_list): ?>

    <?php $unseen_msg_count = $this->admin_m->count_unseen_msg_by_ticket_id($ticket_list['ticket_id']); ?>
    <?php $last_msg_time = $this->admin_m->last_msg_with_time($ticket_list['ticket_id']); ?>

    <div class="singleChat <?= isset($ticket_id) ? ($ticket_id == $ticket_list['ticket_id'] ? 'active' : '') : ''  ?>" onclick="window.location.href = '<?= base_url('admin/chat?m=' . $ticket_list['ticket_id']) ?>';">
        <div class="icon">
            <i class="fa-solid fa-ticket"></i>
        </div>
        <div class="chatList_content relative">
            <div class="chatListTitle">
                <h5 class="ticket_id">#<?= $ticket_list['ticket_id'] ?></h5>
                <?php if (isset($last_msg_time) && !empty($last_msg_time)): ?>
                    <span class="create_time"><?= format_time($last_msg_time->created_at) ?></span>
                <?php else: ?>
                    <span class="create_time"><?= format_time($ticket_list['created_at']) ?></span>
                <?php endif; ?>
            </div>
            <h6 class="user_name"><?= $ticket_list['user_name'] ?></h6>
            <div class="flex align-center space-between">
                <?php if (isset($last_msg_time) && !empty($last_msg_time)): ?>
                    <p class="message"><?= $last_msg_time->message ?></p>
                <?php else: ?>
                    <div class="message">
                        <?= $ticket_list['description'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($unseen_msg_count > 0): ?>
                <b class="unseen"><?= $unseen_msg_count ?></b>
            <?php endif; ?>
            <?php if (isset($_GET['m']) && !empty($_GET['m']) && $_GET['m'] != $ticket_list['ticket_id']): ?>
                <?php if ($ticket_list['status'] == 'new'): ?>
                    <b class="unseen">1</b>
                <?php endif; ?>
            <?php endif; ?>

        </div>
    </div>
<?php endforeach; ?>