function sousin(sss){
const a = document.getElementById(sss).value;
ret = confirm(a + "を送信しますがよろしいでしょうか");
if (ret == true){
var fm = document.getElementById("fm1");
  fm.product_name2.value = a;  // 例）name="hid1"の値を"hoge"にする
  fm.method = "post";
  fm.submit();
    }
}

function reset(){
  ret = confirm("本当にデータを削除してよろしいでしょうか？");
  if (ret == true){
  var fm = document.getElementById("fm2");
    fm.submit();
    }
}

  function kanridel(sss){
  const a = document.getElementById(sss).value;
  ret = confirm(a + "を送信しますがよろしいでしょうか");
  if (ret == true){
  var fm = document.getElementById("fm3");
    fm.product_name3.value = sss;  // 例）name="hid1"の値を"hoge"にする
    fm.method = "post";
    fm.submit();

      }
  }
  function nyuuryoku(sss){
  ret = confirm(sss + "を送信しますがよろしいでしょうか");
  if (ret == true){
    var fm = document.getElementById("fm4");
    fm.product_name4_2.value = document.getElementById(sss).value;
    fm.product_name4_3.value = document.getElementById("No."+sss).value;
    fm.product_name4_4.value = document.getElementById("kosuu."+sss).value;
    fm.product_name4_1.value = sss;  // 例）name="hid1"の値を"hoge"にする
    fm.product_name4_5.value = "true";
    fm.method = "post";
    fm.submit();
      }
  }

function okaikei(){
  if (document.getElementById("oadukari").value >= document.getElementById("goukeikingaku").value){
    ret = confirm("お会計してもよろしいでしょうか？");

    if (ret == true){
      document.getElementById("oturi").value=document.getElementById("oadukari").value-document.getElementById("goukeikingaku").value;
  }
}else{
  alert("金額が足りません。")
}
  }
function ryry() {
  ret = confirm("削除しますか？");
  if (ret == true){
  var sakujo = document.getElementById("sakujo");
    sakujo.submit();
  }
}
