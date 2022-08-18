Notiflix.Notify.init({
  width: "300px",
  position: "center-top",
  closeButton: false,
  fontSize: "14px",
  distance: "30px",
  cssAnimationStyle: "from-top",
});

Notiflix.Block.init({
  backgroundColor: "rgba(0,0,0,0.9)",
  svgColor: "#f8f8f8",
  messageMaxLength: 19,
  messageColor: "#f8f8f8",
  zindex: 1600,
});

Notiflix.Confirm.init({
  width: "320px",
  messageMaxLength: 1923,
  plainText: true,
  borderRadius: "8px",
  titleColor: "#00458e",
  okButtonBackground: "#00458e",
});

function changePassword() {
  var id = $("#useridonsession").val();
  var npass = $("#newuserpass").val();
  var cnpass = $("#newuserpass2").val();

  if (npass == "" || cnpass == "") {
    Notiflix.Notify.warning("Password tidak boleh kosong");
  } else {
    if (npass == cnpass) {
      $.post("pengguna/resetPassUser", {
        id: id,
        password: npass,
      }).done(function (data) {
        if (data == "reset") {
          $("#changePassword").modal("hide");
          $("#newuserpass").val("");
          $("#newuserpass2").val("");
          Notiflix.Notify.success("Password anda telah diatur ulang");
        }
      });
    } else {
      Notiflix.Notify.warning("Password konfirmasi tidak cocok");
    }
  }
}

function developerCredit() {
  Notiflix.Notify.info("Developer : FM. (akuonline.my.id)");
}
