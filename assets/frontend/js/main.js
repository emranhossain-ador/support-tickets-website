$(function () 
{
  $(document).on('change', '.imageFile', function (s){
      if (this.files && this.files[0]) {
          let url = URL.createObjectURL(this.files[0]);
          $('.defaultImage_container').removeClass('d-none');
          $('.imagePreView').attr('src', url);
      }
  })

  $(document).on('click', '.imgRemoveBtn', function (){
      $('.defaultImage_container').addClass('d-none');
      $('.imagePreView').attr('src', '');
  })

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

   //--------* Nice select *--------//
  $(document).ready(function () {
    $(".niceselect").niceSelect();
  });
});
