<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="ticket-info-card total-ticket">
            <div class="ticket-cardBody ">
                <div class="leftContent">
                    <h6>Total Tickets</h6>
                    <b>5</b>
                </div>
                <div class="rightContent">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket-icon lucide-ticket">
                            <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                            <path d="M13 5v2" />
                            <path d="M13 17v2" />
                            <path d="M13 11v2" />
                        </svg>
                    </div>
                </div>
                <div class="styleCircle"></div>
            </div>
        </div>
    </div><!-- col./ -->

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="ticket-info-card open-ticket">
            <div class="ticket-cardBody ">
                <div class="leftContent">
                    <h6>Open Tickets</h6>
                    <b>5</b>
                </div>
                <div class="rightContent">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open-check-icon lucide-book-open-check">
                            <path d="M12 21V7" />
                            <path d="m16 12 2 2 4-4" />
                            <path d="M22 6V4a1 1 0 0 0-1-1h-5a4 4 0 0 0-4 4 4 4 0 0 0-4-4H3a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h6a3 3 0 0 1 3 3 3 3 0 0 1 3-3h6a1 1 0 0 0 1-1v-1.3" />
                        </svg>
                    </div>
                </div>
                <div class="styleCircle"></div>
            </div>
        </div>
    </div><!-- col./ -->

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="ticket-info-card close-ticket">
            <div class="ticket-cardBody">
                <div class="leftContent">
                    <h6>Close Tickets</h6>
                    <b>5</b>
                </div>
                <div class="rightContent">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket-x-icon lucide-ticket-x">
                            <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                            <path d="m9.5 14.5 5-5" />
                            <path d="m9.5 9.5 5 5" />
                        </svg>
                    </div>
                </div>
                <div class="styleCircle"></div>
            </div>
        </div>
    </div><!-- col./ -->

</div><!-- row./ -->

<span>Ids : <?= auth('user_role'); ?></span>