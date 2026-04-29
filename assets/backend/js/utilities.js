$(function () {

  $(document).on('click', '.change_status', function (s){
      s.preventDefault();

      let thisDiv = this;
      let id = $(this).data('id');
      let value = $(this).data('value');
      let table = $(this).data('table');

      let data = {
        'id' : id,
        'status' : value,
        'table' : table
      };

      data[csrf_token] = __csrf;
      
      $.ajax({
          url: base_url+'admin/auth/change_status',
          type: 'POST',
          data: data,
          dataType: 'json',
          success:function (response){
              if (response.st == 1) {
                  if (response.value == 1) {
                      $(thisDiv).data('value', 0);
                      $(thisDiv).html(`<i class="icofont-verification-check"></i> Live`).removeClass('label-danger').addClass('label-success');
                      __alert_msg('This item live now', 1);
                  }else{
                      $(thisDiv).data('value', 1);
                      $(thisDiv).html(`<i class="icofont-ban"></i> Hide`).removeClass('label-success').addClass('label-danger');
                      __alert_msg('This item hide now!!', 0);
                  }
              }else{
                 __alert_msg('Something wrong!!', 0);
              }
          }
      })
  })


  /*======== Items Delete Area ========*/
  $(document).on('click', '.item_delete', function (s){
      s.preventDefault();
      let url = $(this).attr('href');
      Swal.fire({
          title: "Are you sure?",
          text: "You want to delete this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, Delete it!"
      }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = url;
          }
      });
  })


  /*======== Form Submit Area ========*/
  window.formSubmit = function (event, _this) 
  {
      event.preventDefault();
      let formData = new FormData(_this);
      let form_url = _this.action;
      let csrf_token = $(_this).find('input[name="token_name"]').val();
      let form_Btn = $(_this).find('button[type="submit"]');
      submitBtn(form_Btn, true);

      const progressBarContainer = $(
        '<div class="ci-progress-bar" style="width: 100%; height: 5px; background-color: rgba(0, 0, 0, 0.1); margin-bottom: 2px;"></div>'
      );
      const progressBar = $(
        '<div class="progress-bar" style="width: 0%; height: 5px; background-color: #0dcd94; transition: width 0.3s;"></div>'
      );
      progressBarContainer.append(progressBar);

      $(_this).prepend(progressBarContainer);

      if ($(_this).find(".error_msg").length == 0) {
        $(_this).prepend('<span class="error_msg"></span>');
      }

      let uploadProgress = 0;

      const updateProgress = (progress) => {
        progressBar.css("width", `${progress}%`);
      };

      axios.post(form_url, formData, {
        headers: {
          "X-CSRF-TOKEN": csrf_token,
          "X-Requested-with": "XMLHttpRequest",
        },
        onUploadProgress: function (progress_event) {
          if (progress_event.total) {
            uploadProgress = Math.min(
              95,
              Math.round((progress_event.loaded / progress_event.total) * 100)
            );
            updateProgress(uploadProgress);
          }
        },
      })
      .then(function (response) {
          updateProgress(100);

          response = response.data;

          if (response.st == 1) 
          {
              setTimeout(() => {
                  __alert_msg(response.msg, 1);
                  submitBtn(form_Btn, false);
                  progressBarContainer.remove();

                  if ($('.customModal').length > 0) {
                      $('.customModal').modal('hide');
                  }

              }, 2000);

              $(_this)[0].reset();

              setTimeout(() => {
                  if(response.url == '' || response.url == null || response.url == undefined)
                  {
                      return false;
                  }else if(isAjaxRequest(response.url))
                  {
                      load_by_url(response.url);
                      let pageUrl = response.url;

                      let cleanUrl = pageUrl.replace(/[?&]isAjax(\=([^&#]*))?/i, ""); // remove ?isAjax
                      cleanUrl = cleanUrl.replace(/[?&]$/, "");
                      history.pushState({}, "", cleanUrl);
                  }else
                  {
                      setTimeout(() => {
                        window.location = response.url;
                      }, 2500);
                  }
              }, 4000);

          }else
          {
              setTimeout(() => {
                __msg(response.msg, 0);
                submitBtn(form_Btn, false);
                progressBarContainer.remove();
              }, 2000);
          }
      });
  };


  /*======== Load BY URL ========*/
  function load_by_url(url) {
      axios.get(url).then(function (response)
      {
        setTimeout(() => {
          $('#mainContent').html(response.data);
        }, 2000);
      }).catch(function (error) {
        console.error("Error loading order type settings:", error);
      });
  }



  /*======== Form submit area ========*/
  window.__registerSubmit = function (event, _this) {
    event.preventDefault();
    let formData = new FormData(_this);
    let form_url = _this.action;
    let form_token = $(_this).find('input[name="token_name"]').val();
    let form_Btn = $(_this).find('button[type="submit"]');

    submitBtn(form_Btn, true);

    if ($(_this).find(".error_msg").length == 0) {
      $(_this).prepend('<span class="error_msg"></span>');
    }

    axios
      .post(form_url, formData, {
        headers: {
          "X-CSRF-TOKEN": form_token,
          "X-Requested-With": "XMLHttpRequest",
        },
      })
      .then(function (response) {
        response = response.data;

        if (response.st == 1) {
          setTimeout(() => {
            __alert_msg(response.msg, 1);
            submitBtn(form_Btn, false);
            $(_this)[0].reset();
          }, 500);

          setTimeout(() => {
            if (
              response.url == null ||
              response.url == "" ||
              response.url == undefined
            ) {
              return false;
            } else if (isAjaxRequest(response.url)) {
              register_load_by_url(response.url);
              let pageUrl = response.url;

              let cleanUrl = pageUrl.replace(/[?&]isAjax(\=([^&#]*))?/i, ""); // remove ?isAjax
              cleanUrl = cleanUrl.replace(/[?&]$/, "");
              history.pushState({}, "", cleanUrl);
            } else {
              setTimeout(() => {
                window.location = response.url;
              }, 4000);
            }
          }, 4300);
        } else {
          setTimeout(() => {
            submitBtn(form_Btn, false);
            __msg(response.msg, 0);
          }, 2000);
        }
      });
  };

  //--------* Ajax request check *--------//
  function isAjaxRequest(url) {
    return url.indexOf("?isAjax=1") !== -1;
  }

  /*======== Load by url ========*/
  function register_load_by_url(url) {
    axios
      .get(url)
      .then(function (response) {
        setTimeout(() => {
          $(".main-wrapper").html(response.data);
          // console.log(response.data);
        }, 500);
      })
      .catch(function (error) {
        console.error("Error loading order type settings:", error);
      });
  }

  /*======== Submit btn ========*/

  window.submitBtn = function (currentBtn, type) {
    if (type == true) {
      currentBtn.prop("disabled", true);
      currentBtn.addClass("btn-loading");
    } else {
      currentBtn.prop("disabled", false);
      currentBtn.removeClass("btn-loading");
    }
  };

  /*===================
            Message 
            ==================*/
  function __msg(msg, st) {
    if (st == 1) {
      var icon = '<i class="fa-regular fa-circle-check"></i>';
      var header = "Successful !!";
      var type = "success";
    } else {
      var icon = '<i class="fa-solid fa-ban"></i>';
      var header = "Errors !!";
      var type = "danger";
    }

    setTimeout(() => {
      $(".error_msg").fadeIn()
        .html(`<div class="custom_alert alert alert-${type} alert-dismissible fade show" role="alert">
                            <strong>${icon} ${header}</strong>
                            <div class="msgBody">
                                <div>${msg}</div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>`);
    }, 500);

    setTimeout(() => {
      $(".error_msg").fadeOut();
    }, 5000);
  }

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
