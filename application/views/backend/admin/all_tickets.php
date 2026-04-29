<div class="row">
    <div class="col-md-12">
        <form action="" method="get">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6 col-lg-3 col-sm-12">
                            <label for="">Ticket ID</label>
                            <input type="text" name="ticket_id" class="form-control" value="<?= isset($_GET['ticket_id']) ? $_GET['ticket_id'] :'' ?>">
                        </div>
                        <div class="form-group col-md-3 col-lg-2 col-sm-12">
                            <label for="">Ticket Type</label>
                            <select name="ticket_type" class="form-control niceselect wide">
                                <option value="">Select Type</option>
                                <option <?= isset($_GET['ticket_type']) && $_GET['ticket_type'] == 'public' ? 'selected' : '' ?> value="public">Public</option>
                                <option <?= isset($_GET['ticket_type']) && $_GET['ticket_type'] == 'privet' ? 'selected' : '' ?> value="privet">Privet</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-lg-2 col-sm-12">
                            <label for="">Ticket Status</label>
                            <select name="ticket_status" class="form-control niceselect wide">
                                <option value="">Select Status</option>
                                <option <?= isset($_GET['ticket_status']) && $_GET['ticket_status'] == 'new' ? 'selected' : '' ?> value="new">New</option>
                                <option <?= isset($_GET['ticket_status']) && $_GET['ticket_status'] == 'open' ? 'selected' : '' ?> value="open">Open</option>
                                <option <?= isset($_GET['ticket_status']) && $_GET['ticket_status'] == 'inprogress' ? 'selected' : '' ?> value="inprogress">Inprogress</option>
                                <option <?= isset($_GET['ticket_status']) && $_GET['ticket_status'] == 'close' ? 'selected' : '' ?> value="close">Close</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-lg-3 col-sm-12">
                            <label for="">Date</label>
                            <input type="date" name="created_at" class="form-control" value="<?= isset($_GET['created_at']) ? $_GET['created_at'] :'' ?>">
                        </div>
                        <div class="col-md-4 col-lg-2 col-sm-6">
                            <div class="filter_btn">
                                <button type="submit" class="btn"><i class="icofont-filter"></i>&nbsp;Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Filter Area End -->


<div class="row mt-4">
    <?php foreach ($tickets as $key => $ticket): ?>
        <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
            <a href="<?= base_url('admin/chat?m=' . $ticket->ticket_id) ?>" class="singleTicket_box">
                <div class="ticketBox_body">
                    <div class="info_text">
                        <h6><?= $ticket->user_name ?> &nbsp; <span class="fz-14"><i class="fa <?= $ticket->ticket_type == 'privet' ? 'fa-lock':'fa-lock-open'  ?> "></i></span> </h6>
                        <p class="email"><?= $ticket->user_email ?></p>
                        <p class="uid mt-1 mb-2">Ticket ID: <span style="color: var(--theme-color)"># <?= $ticket->ticket_id ?></span></p>
                        <?= __ticket_priority($ticket->priority) ?>
                    </div>
                    <?php if ($ticket->user_image): ?>
                        <div class="user_img">
                            <img src="<?= base_url($ticket->user_image) ?>" alt="">
                        </div>
                    <?php else: ?>
                        <div class="user_textLogo">
                            <?= __get_first($ticket->user_name) ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="ticketBox_footer">
                    <?= __ticket_status($ticket->status) ?>
                    <span class="user_role customer">Customer</span>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>