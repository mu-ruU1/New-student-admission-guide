// 認証成功
var verifyCallback = function (response) {
  document.getElementById("warning").textContent = "";
  document.getElementById("send").disabled = false;
};

// 認証タイムアウト
var expiredCallback = function () {
  document.getElementById("warning").textContent = "時間切れです。もう一度チェックを入れてください。";
  document.getElementById("send").disabled = true;
};