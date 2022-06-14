function download(url){
  var a = $("<a style='display:none' id='js-downloder'>")
  .attr("href", url)
  .attr("download", "test.png")
  .appendTo("body");

  a[0].click();

  a.remove();
}

function saveCapture(element) {
  html2canvas(element).then(function(canvas) {
    download(canvas.toDataURL("image/png"));
  })
}

function btnClick(){
  var element = document.querySelector("#capture");
  saveCapture(element)
}