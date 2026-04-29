<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header relative border-0 flex align-center space-between">
                <h5 class="card-title">Tickets List</h5>
                <a href="<?= base_url('customer/dashboard/create_ticket') ?>" class="btn add_new_btn"><span class="icon"><i class="icofont-plus"></i></span> Create Ticket</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover db-table">
                        <thead class="table-head">
                            <tr>
                                <th>Ticket ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Create</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tickets as $key => $row): ?>
                                <tr>
                                    <td data-label="Ticket ID" class="flex align-center gap-10">
                                        <div class="ticket_typeIcon">
                                            <?php if ($row->ticket_type == 'privet'): ?>
                                                <i class="fa fa-lock"></i>
                                            <?php else: ?>
                                                <i class="fa fa-lock-open"></i>
                                            <?php endif; ?>
                                        </div>
                                        <div class="flex flex-column gap-5">
                                            <span class="ticket_id"># <?= $row->ticket_id ?></span>
                                            <label class="label label-danger" style="width: fit-content;"><?= __get_time_ago($row->created_at) ?></label>
                                        </div>
                                    </td>
                                    <td data-label="Title">
                                        <h6 class="line-1 m-0"><?= $row->subject ?></h6>
                                    </td>
                                    <td data-label="Category"><?= $row->category_name ?></td>
                                    <td data-label="Create">
                                        <div>
                                            <label class="label create_date"><?= format_date($row->created_at) ?></label>
                                        </div>
                                    </td>
                                    <td data-label="Status">
                                        <?= __ticket_status($row->status) ?>
                                        <div class="mt-1">
                                            <?= __ticket_priority($row->priority) ?>
                                        </div>
                                    </td>
                                    <td data-label="Action">
                                        <?= __editBtn('customer/dashboard/edit_ticket', $row->id); ?>
                                        <?= __deleteBtn($row->id, 'tickets_list') ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>