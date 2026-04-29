<div class="row">
    <div class="col-md-12">
        <div class="chat-full-wrapper">
            <div class="chat-container">
                <aside class="chat-sidebar">
                    <div class="chat_header list_header">
                        <h5 class="head__title">Messages</h5>
                        <div class="headerAction">
                            <span class="add_btn btn"><i class="fa-regular fa-pen-to-square"></i></span>
                            <span class="vertical_btn btn"><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </div>
                    </div><!-- chat header -->
                    <div class="userSearch_box">
                        <div class="searchInput">
                            <i class="icofont-search"></i>
                            <input type="search" name="search" placeholder="Search...">
                        </div>
                    </div><!-- Search Box -->

                    <div class="chatList">

                        <?php if ($role == 'admin'): ?>
                            <?php include VIEWPATH . 'backend/chat/admin_chatSidebar.php' ?>
                        <?php else: ?>
                            <?php include VIEWPATH . 'backend/chat/customer_chatSidebar.php' ?>
                        <?php endif; ?>

                    </div>

                </aside><!-- chat-sidebar -->

                <?php if (isset($_GET['m']) && !empty($_GET['m'])): ?>
                    <div class="chatMessage_container" style="background-image: url('<?= base_url('assets/backend/images/chat-bg.jpg') ?>');">

                        <div class="chat_header">
                            <?php if ($role == 'customer'): ?>
                                <div class="image_text">
                                    <div class="chatUser_img">
                                        <?php if (__admin_info()->images): ?>
                                            <img src="<?= base_url(__admin_info()->images) ?>" alt="image">
                                        <?php else: ?>
                                            <img src="<?= base_url('assets/backend/images/avatar.png') ?>" alt="image">
                                        <?php endif; ?>
                                    </div>
                                    <div class="text">
                                        <h6><?= __admin_info()->name ?></h6>
                                        <span>Online</span>
                                    </div>
                                </div>
                                <div class="headerAction">
                                    <button type="button" class="call_btn"><i class="fa fa-video-camera"></i></button>
                                    <button type="button" class="call_btn"><i class="fa fa-phone"></i></button>
                                </div>
                            <?php else: ?>
                                <div class="image_text">
                                    <div class="chatUser_img">
                                        <?php if ($ticket_info['user_image']): ?>
                                            <img src="<?= base_url($ticket_info['user_image']) ?>" alt="image">
                                        <?php else: ?>
                                            <img src="<?= base_url('assets/backend/images/avatar.png') ?>" alt="image">
                                        <?php endif; ?>
                                    </div>
                                    <div class="text">
                                        <h6><?= $ticket_info['user_name'] ?></h6>
                                        <span>Online</span>
                                    </div>
                                </div>
                                <div class="headerAction">
                                    <button type="button" class="call_btn"><i class="fa fa-video-camera"></i></button>
                                    <button type="button" class="call_btn"><i class="fa fa-phone"></i></button>
                                    <button type="button" class="userInfo_toggleBtn" data-toggle="tooltip" data-title="Show User Info"><i class="icofont-info-circle"></i></button>
                                </div>
                            <?php endif; ?>

                        </div><!-- header -->

                        <div class="chat_messageBox">

                            <!-- Ticket Report Details Area -->
                            <div class="single_msg <?= ($role == 'admin') ? 'friend_msg' : 'my_msg'; ?>">
                                <div class="userImg">
                                    <?php if ($ticket_info['user_image']): ?>
                                        <img src="<?= base_url($ticket_info['user_image']) ?>" alt="image">
                                    <?php else: ?>
                                        <img src="<?= base_url('assets/backend/images/avatar.png') ?>" alt="image">
                                    <?php endif; ?>
                                </div>
                                <div class="message">
                                    <p><?= $ticket_info['description'] ?></p>
                                    <span class="chat_time"><?= format_time($ticket_info['created_at']) ?></span>
                                    <?php if ($ticket_info['images']): ?>
                                        <div class="message_imgBox">
                                            <div class="single_img">
                                                <img src="<?= base_url($ticket_info['images']) ?>" alt="img">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Ticket Report Details Area -->

                            <div class="chat_msg_body">
                                <?php include VIEWPATH . 'backend/chat/chat_thumb.php' ?>
                            </div>

                        </div><!-- Chat MessageBox -->

                        <div class="chat_footer">
                            <div class="msgSendInput">
                                <div class="chat_footerBtn">
                                    <button type="button" class="btn"><i class="fa-solid fa-paperclip"></i></button>
                                </div>
                                <form action="<?= base_url('admin/chat/send') ?>" method="post" class="chatForm w-100">
                                    <?= __csrf(); ?>
                                    <input type="hidden" name="ticket_id" value="<?= $ticket_info['ticket_id'] ?>">
                                    <input type="hidden" name="receive_id" value="<?= $receive_id; ?>">
                                    <input type="hidden" name="send_id" value="<?= $send_id; ?>">
                                    <div class="msgInputFilt">
                                        <input type="text" class="msg_input" name="message" placeholder="Type a message...">
                                        <button type="submit" class="btn msg__sendBtn"><i class="icofont-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div><!-- chat message container end./ -->
                <?php endif; ?>

                <div class="chatUser_info_content ">
                    <div class="chat_header">
                        <h5 class="info-title">Customer Information</h5>
                    </div>
                    <div class="info_body">
                        <div class="ticket_status_box mb-3">
                            <label for="">Ticket Status</label>
                            <select name="ticket_status" class="select niceselect wide change_ticket_status" data-id="<?= $ticket_info['id'] ?>">
                                <option <?= $ticket_info['status'] == 'open' ? 'selected' : '' ?> value="open">Open</option>
                                <option <?= $ticket_info['status'] == 'inprogress' ? 'selected' : '' ?> value="inprogress">Inprogress</option>
                                <option <?= $ticket_info['status'] == 'close' ? 'selected' : '' ?> value="close">Close</option>
                            </select>
                        </div>
                        <ul class="info-list">
                            <li class="info-item">
                                <span><i class="fa-regular fa-user-circle"></i></span>
                                <p><?= $ticket_info['user_name'] ?></p>
                            </li>
                            <li class="info-item">
                                <span><i class="icofont-envelope"></i></span>
                                <p><?= $ticket_info['user_email'] ?></p>
                            </li>
                            <?php if ($ticket_info['user_phone']): ?>
                                <li class="info-item">
                                    <span><i class="icofont-phone"></i></span>
                                    <p>+88<?= $ticket_info['user_phone'] ?></p>
                                </li>
                            <?php endif; ?>
                            <li class="info-item">
                                <span><i class="fa-solid fa-user-secret"></i></span>
                                <p><?= $ticket_info['user_role'] ?></p>
                            </li>
                            <li class="info-item">
                                <span><i class="far fa-clock"></i></span>
                                <p><?= format_datetime($ticket_info['created_at']) ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- chat-container -->
        </div><!-- chat-full-wrapper -->
    </div><!-- col -->
</div><!-- row -->

<script>
    $(window).on('load', function() {
        $(".chat_messageBox").animate({
            scrollTop: $(".chat_messageBox")[0].scrollHeight
        }, "slow");
    });

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('29f0a471ecf4e07e0235', {
        cluster: 'mt1'
    });


    /*----------------- Msg Send ---------------------*/
    $(function() {
        $(document).on('submit', '.chatForm', function(s) {
            s.preventDefault();
            var form = this;
            var formData = new FormData(this);
            var url = $(this).attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(json) {
                    if (json.st == 'success') {


                        $('input[name="message"]').val('');

                        $(".chat_messageBox").animate({
                            scrollTop: $(".chat_messageBox")[0].scrollHeight
                        }, "fast");
                    }
                }
            })
        })
    })


    /*----------------- Load chat body with pusher ---------------------*/
    function loadChatBody() {
        var ticket_id = $('input[name="ticket_id"]').val();
        $.ajax({
            url: base_url + "admin/chat/get_chat_message/" + ticket_id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                $(".chat_msg_body").html(response.data);
                scrollToBottom();
                // console.log(response);
            }
        });
    }


    /*----------------- Msg scroll Body bottom --------------------*/
    function scrollToBottom() {
        $(".chat_messageBox").animate({
            scrollTop: $(".chat_messageBox")[0].scrollHeight
        }, "fast");
    }


    $(window).on('load', function() {
        loadChatBody();
    });


    function load_chatList() {
        var ticket_id = $('input[name="ticket_id"]').val();
        $.ajax({
            url: base_url + 'admin/chat/load_chat_sidebar/'+ticket_id,
            type: 'GET',
            dataType: 'json',
            success: function(json) {
                if (json.st == 1) {
                    $('.chatList').html(json.data);
                }
            }
        })
    }


    /*--------------- Pusher fun ---------------------*/
    var channel = pusher.subscribe('supportchat');
    channel.bind('new-message', function(data) {
        loadChatBody();
        load_chatList();
    });
</script>