<?php foreach ($chat_list as $key => $chat): ?>

    <?php if ($chat->send_id == auth('id')): ?>
        <div class="single_msg my_msg">
            <div class="userImg">
                <img src="<?= base_url($chat->sender_image ?? 'assets/backend/images/avatar.png') ?>" alt="image">
            </div>
            <div class="message">
                <p><?= $chat->message ?></p>
                <span class="chat_time"><?= format_time($chat->created_at) ?></span>
            </div>
        </div>
    <?php else: ?>
        <div class="single_msg friend_msg">
            <div class="userImg">
                <img src="<?= base_url($chat->sender_image ?? 'assets/backend/images/avatar.png') ?>" alt="image">
            </div>
            <div class="message">
                <p><?= $chat->message ?></p>
                <span class="chat_time"><?= format_time($chat->created_at) ?></span>
            </div>
        </div>
    <?php endif; ?>

<?php endforeach; ?>