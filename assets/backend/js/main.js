$(function () {
  $(document).on("change", ".change_ticket_status", function (s) {
    s.preventDefault();
    let value = $(this).val();
    let id = $(this).data("id");

    let data = {
      id: id,
      status: value,
    };
    data[csrf_token] = __csrf;

    $.ajax({
      url: base_url + "admin/chat/change_ticket_status",
      type: "POST",
      data: data,
      dataType: "json",
      success: function (json) {
        if (json.st == 1) {
          __alert_msg(json.msg, 1);
        }else{
          __alert_msg(json.msg, 0);
        }
      },
    });
  });

  //--------* Ticket Upload img *--------//
  $(document).on("click", ".userInfo_toggleBtn", function (s) {
    $(".chatUser_info_content").toggleClass("show");
    $(".chatMessage_container").toggleClass("dz-chat");
    $(".chat-sidebar").toggleClass("dz-chat");
  });

  //--------* Ticket Upload img *--------//
  $(document).on("change", ".imageFile", function (s) {
    if (this.files && this.files[0]) {
      let url = URL.createObjectURL(this.files[0]);
      $(".defaultImage_container").removeClass("d-none");
      $(".imagePreView").attr("src", url);
    }
  });

  $(document).on("click", ".imgRemoveBtn", function () {
    $(".defaultImage_container").addClass("d-none");
    $(".imagePreView").attr("src", "");
  });

  //--------* Upload img *--------//
  $(document).on("change", ".inputFile", function () {
    if (this.files && this.files[0]) {
      let url = URL.createObjectURL(this.files[0]);
      $(".preview_img").removeClass("d-none").attr("src", url);
      $(".preview_actionBtn").addClass("d-none");
      $(".uploadRemove").removeClass("d-none"); // file remove btn show
    } else {
      $(".preview_img").addClass("d-none").attr("src", "");
      $(".preview_actionBtn").removeClass("d-none");
      $(".uploadRemove").addClass("d-none"); // file remove btn hide
    }
  });

  $(document).on("click", ".uploadRemove", function (s) {
    s.preventDefault();
    $(".preview_img").addClass("d-none").attr("src", "");
    $(".preview_actionBtn").removeClass("d-none");
    $(".uploadRemove").addClass("d-none"); // file remove btn hide
  });

  //--------* Emoji Select *--------//
  $(document).on("keypress keyup blur", ".only_number", function () {
    let value = $(this).val();
    $(this).val(value.replace(/[^0-9]/g, ""));
  });

  //--------* Emoji Select *--------//
  // $(".msg_input").emojioneArea({
  //   pickerPosition: "top",
  //   filtersPosition: "bottom",
  //   tones: false,
  //   autocomplete: false,
  //   inline: true,
  //   hidePickerOnBlur: false,
  //   searchPlaceholder: "Search",
  // });

  //--------* Summernote *--------//
  $(".textarea").summernote({
    fontSizes: ["8", "9", "10", "11", "12", "14", "18", "20", "30", "50"],
    height: 100,
    codemirror: {
      // codemirror options
      theme: "monokai",
      mode: "text/html",
      lineNumbers: true,
      htmlMode: true,
    },
    toolbar: [
      ["style", ["style"]],
      ["font", ["bold", "italic", "underline", "clear"]],
      ["fontname", ["fontname"]],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
      ["height", ["height"]],
      ["table", ["table"]],
      ["insert", ["link", "picture", "video", "hr"]],
      ["view", ["fullscreen", "codeview"]],
      ["fontsize", ["fontsize"]],
      ["help", ["help"]],
    ],
  });

  //--------* Select 2 *--------//
  $(".select2").select2();

  //--------* Nice select *--------//
  $(document).ready(function () {
    $(".niceselect").niceSelect();
  });

  // current time for clock
  $(function () {
    var datetime = null;
    var update = function () {
      datetime.html(moment().format("h:mm:ss a"));
    };

    $(document).ready(function () {
      datetime = $("#time");
      update();
      setInterval(update, 1000);
    });
  });

  
  //--------* Alert msg *--------//
  function __alert_msg(msg, st) {
    if (st == 1) {
      var icon = '<i class="fa-regular fa-circle-check"></i>';
      var header = "Successful !!";
      var type = "success";
    } else {
      var icon = '<i class="fa-solid fa-ban"></i>';
      var header = "Errors !!";
      var type = "danger";
    }
    var msgDiv =
      $(`<div class="custom_notify animated fadeInRight alert alert-${type} alert-dismissible fade show" role="alert">
            <span class="icon">${icon}</span>
            <div class="msgBody">
                <h4>${header}</h4>
                <div>${msg}</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>`);

    $(".notify-container").prepend(msgDiv);

    setTimeout(() => {
      msgDiv.fadeOut();
    }, 4000);
  }
});
