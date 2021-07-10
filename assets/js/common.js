/*-------------------------
  フォーム　バリデーション
--------------------------*/

//入力内容チェック

  const MSG_EMPTY = '入力必須です。';
  const MSG_SUJI = '数値ではありません。';
  const MSG_URL_TYPE = 'URLの形式ではありません。';
  const MSG_TEXT_MAX = '20文字以内で入力してください。';
  const MSG_TYPE = '入力値が間違っています。';
  const MSG_NUM_MAX = '数値が範囲外です。';
  const MSG_SUBMIT_ERR = '入力項目にエラーがあります。';


    var error_result = new Array();
    error_result[0] = true;  //text_mes
    error_result[1] = true;  //size_width
    error_result[2] = true;  //size_heigh
    error_result[3] = true;  //line_wide
    error_result[4] = true;  //shadow
    error_result[5] = true;  //round_corner
    error_result[6] = true;  //font_size
    error_result[7] = false;  //link_url
    error_result[8] = true;  //line_out_color_num
    error_result[9] = true;  //background_color_num
    error_result[10] = true;  //text_color_num

    console.log(error_result);


  function error_check() {

    if($.inArray(false, error_result) === -1) {
      $(".submit_btn").prop("disabled", false);
      $('.help-block_submit').text('');
      console.log('エラーなし');
       console.log(error_result);
        $('.submit_btn').css({'background-color':'#e8d3ca','box-shadow':'0 0 0 5px #e8d3ca','color':'#fff'});
    }else {
      $(".submit_btn").prop("disabled", true);
      console.log('エラー発見');
      $('.help-block_submit').text(MSG_SUBMIT_ERR);
       console.log(error_result);
    }

  }



$(".valid_text_mes").keyup(function(){

   var form_g1 = $(this).closest('.select_text');

   if($(this).val().length === 0){
     form_g1.removeClass('has-success').addClass('has-error');
     form_g1.find('.help-block').text(MSG_EMPTY);
     error_result[0] = false;
   }else if($(this).val().length >20 ){
     form_g1.removeClass('has-success').addClass('has-error');
     form_g1.find('.help-block').text(MSG_TEXT_MAX);
    error_result[0] = false;
   }else{
      form_g1.removeClass('has-error').addClass('has-success');
      form_g1.find('.help-block').text('');
        error_result[0] = true;
   }
    console.log(error_result);
    error_check();
});


$(".valid_size_width").keyup(function(){

  var form_g2 = $(this).val()
  var form_g_after2 = form_g2.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap2 = $(this).closest('.check_box');

console.log(form_g_after2);
  if(form_g_after2.length  === 0){
    form_g_wrap2.removeClass('has-success').addClass('has-error');
    form_g_wrap2.find('.help-block').text(MSG_EMPTY);
    error_result[1] = false;
    console.log('長さ0');
  }else if(!form_g_after2.match(/^[0-9]+$/)){
    form_g_wrap2.removeClass('has-success').addClass('has-error');
    form_g_wrap2.find('.help-block').text(MSG_SUJI);
    error_result[1] = false;
    console.log('数値じゃない ');
  }else if((form_g_after2 > 400) || (form_g_after2 <= 0)){
    form_g_wrap2.removeClass('has-success').addClass('has-error');
    form_g_wrap2.find('.help-block').text(MSG_NUM_MAX);
    error_result[1] = false;
    console.log('数値が大きい ');

  }else{
    form_g_wrap2.removeClass('has-error').addClass('has-success');
    form_g_wrap2.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[1] = true;
  }

  $(".valid_size_width").blur(function(){
    $(this).val(form_g_after2);
  })
  console.log(error_result);
  error_check();
})


$(".valid_size_heigh").keyup(function(){

  var form_g3 = $(this).val()
  var form_g_after3 = form_g3.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap3 = $(this).closest('.check_box');

console.log(form_g_after3);
  if(form_g_after3.length  === 0){
    form_g_wrap3.removeClass('has-success').addClass('has-error');
    form_g_wrap3.find('.help-block').text(MSG_EMPTY);
    error_result[2] = false;
    console.log('長さ0');
  }else if(!form_g_after3.match(/^[0-9]+$/)){
    form_g_wrap3.removeClass('has-success').addClass('has-error');
    form_g_wrap3.find('.help-block').text(MSG_SUJI);
    error_result[2] = false;
    console.log('数値じゃない ');
  }else if((form_g_after3 > 150) || (form_g_after3 <= 0)){
    form_g_wrap3.removeClass('has-success').addClass('has-error');
    form_g_wrap3.find('.help-block').text(MSG_NUM_MAX);
    error_result[2] = false;
    console.log('数値が大きい ');
  }else{
    form_g_wrap3.removeClass('has-error').addClass('has-success');
    form_g_wrap3.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[2] = true;
  }
  $(".valid_size_heigh").blur(function(){
    $(this).val(form_g_after3);
  })
  console.log(error_result);
  error_check();
})


$(".valid_line_wide").keyup(function(){

  var form_g4 = $(this).val()
  var form_g_after4 = form_g4.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap4 = $(this).closest('.check_box');

console.log(form_g_after4);
  if(form_g_after4.length  === 0){
    form_g_wrap4.removeClass('has-error').addClass('has-success');
    form_g_wrap4.find('.help-block').text('');
    error_result[3] = true;
    console.log('長さ0');
  }else if(!form_g_after4.match(/^[0-9]+$/)){
    form_g_wrap4.removeClass('has-success').addClass('has-error');
    form_g_wrap4.find('.help-block').text(MSG_SUJI);
    error_result[3] = false;
    console.log('数値じゃない ');
  }else if((form_g_after4 > 10) || (form_g_after4 <= 0)){
    form_g_wrap4.removeClass('has-success').addClass('has-error');
    form_g_wrap4.find('.help-block').text(MSG_NUM_MAX);
    error_result[3] = false;
    console.log('数値が大きい ');
  }else{
    form_g_wrap4.removeClass('has-error').addClass('has-success');
    form_g_wrap4.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[3] = true;
  }
  $(".valid_line_wide").blur(function(){
    $(this).val(form_g_after4);
  })
  console.log(error_result);
  error_check();
})


$(".valid_shadow").keyup(function(){

  var form_g5 = $(this).val()
  var form_g_after5 = form_g5.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap5 = $(this).closest('.check_box');

console.log(form_g_after5);
  if(form_g_after5.length  === 0){
    form_g_wrap5.removeClass('has-error').addClass('has-success');
    form_g_wrap5.find('.help-block').text('');
    error_result[4] = true;
    console.log('長さ0');
  }else if(!form_g_after5.match(/^[0-9]+$/)){
    form_g_wrap5.removeClass('has-success').addClass('has-error');
    form_g_wrap5.find('.help-block').text(MSG_SUJI);
    error_result[4] = false;
    console.log('数値じゃない ');
  }else if((form_g_after5 > 10) || (form_g_after5 <= 0)){
    form_g_wrap5.removeClass('has-success').addClass('has-error');
    form_g_wrap5.find('.help-block').text(MSG_NUM_MAX);
    error_result[4] = false;
    console.log('数値が大きい ');
  }else{
    form_g_wrap5.removeClass('has-error').addClass('has-success');
    form_g_wrap5.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[4] = true;
  }
  $(".valid_shadow").blur(function(){
    $(this).val(form_g_after5);
  })
  console.log(error_result);
  error_check();
})


$(".valid_round_corner").keyup(function(){

  var form_g6 = $(this).val()
  var form_g_after6 = form_g6.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap6 = $(this).closest('.check_box');

console.log(form_g_after6);
  if(form_g_after6.length  === 0){
    form_g_wrap6.removeClass('has-error').addClass('has-success');
    form_g_wrap6.find('.help-block').text('');
    error_result[5] = true;
    console.log('長さ0');
  }else if(!form_g_after6.match(/^[0-9]+$/)){
    form_g_wrap6.removeClass('has-success').addClass('has-error');
    form_g_wrap6.find('.help-block').text(MSG_SUJI);
    error_result[5] = false;
    console.log('数値じゃない ');
  }else if((form_g_after6 > 50) || (form_g_after6 <= 0)){
    form_g_wrap6.removeClass('has-success').addClass('has-error');
    form_g_wrap6.find('.help-block').text(MSG_NUM_MAX);
    error_result[5] = false;
    console.log('数値が大きい ');
  }else{
    form_g_wrap6.removeClass('has-error').addClass('has-success');
    form_g_wrap6.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[5] = true;
  }
  $(".valid_round_corner").blur(function(){
    $(this).val(form_g_after6)
  })
  console.log(error_result);
  error_check();
})


$(".valid_font_size").keyup(function(){

  var form_g7 = $(this).val()
  var form_g_after7 = form_g7.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap7 = $(this).closest('.check_box');

console.log(form_g_after7);
  if(form_g_after7.length  === 0){
    form_g_wrap7.removeClass('has-success').addClass('has-error');
    form_g_wrap7.find('.help-block').text(MSG_EMPTY);
    error_result[6] = false;
    console.log('長さ0');
  }else if(!form_g_after7.match(/^[0-9]+$/)){
    form_g_wrap7.removeClass('has-success').addClass('has-error');
    form_g_wrap7.find('.help-block').text(MSG_SUJI);
    error_result[6] = false;
    console.log('数値じゃない ');
  }else if((form_g_after7 > 100) || (form_g_after7 <= 0)){
    form_g_wrap7.removeClass('has-success').addClass('has-error');
    form_g_wrap7.find('.help-block').text(MSG_NUM_MAX);
    error_result[6] = false;
    console.log('数値が大きい ');
  }else{
    form_g_wrap7.removeClass('has-error').addClass('has-success');
    form_g_wrap7.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[6] = true;
  }
  $(".valid_font_size").blur(function(){
    $(this).val(form_g_after7);
  })
    console.log(error_result);
    error_check();
})


$(".valid_link_url").keyup(function(){

   var form_g8 = $(this).closest('.select_link_block');
   console.log(form_g8);
   if($(this).val().length === 0){
     form_g8.removeClass('has-success').addClass('has-error');
     form_g8.find('.help-block').text(MSG_EMPTY);
     error_result[7] = false;
   }else if($(this).val().length > 70 || !$(this).val().match(/http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w-.\/?%&=]*)?/) ){
     form_g8.removeClass('has-success').addClass('has-error');
     form_g8.find('.help-block').text(MSG_URL_TYPE);
     error_result[7] = false;
   }else{
      form_g8.removeClass('has-error').addClass('has-success');
      form_g8.find('.help-block').text('');
      error_result[7] = true;
   }
     console.log(error_result);
     error_check();
});


$("#line_out_color_num").keyup(function(){

  var form_g9 = $(this).val()
  var form_g_after9 = form_g9.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap9 = $(this).closest('.check_box');

  var _hex =  parseInt(form_g_after9, 16).toString(16).toLowerCase();
   while(_hex.length < form_g_after9.length) {
       _hex = "0" + _hex;
   }
   console.log(_hex)
console.log(form_g_after9);
  if(form_g_after9.length  === 0){
    form_g_wrap9.removeClass('has-error').addClass('has-success');
    form_g_wrap9.find('.help-block').text('');
    error_result[8] = true;
    console.log('長さ0');
  }else if(form_g_after9.length !=3 && form_g_after9.length !=6){
    form_g_wrap9.removeClass('has-success').addClass('has-error');
    form_g_wrap9.find('.help-block').text(MSG_TYPE);
    error_result[8] = false;
    console.log('桁数が違う ');
  }else if(isNaN(parseInt(form_g_after9, 16))){
    form_g_wrap9.removeClass('has-success').addClass('has-error');
    form_g_wrap9.find('.help-block').text(MSG_TYPE);
    error_result[8] = false;
    console.log('16進数じゃない1 ');
  }else if(_hex != form_g_after9){
    form_g_wrap9.removeClass('has-success').addClass('has-error');
    form_g_wrap9.find('.help-block').text(MSG_TYPE);
    error_result[8] = false;
    console.log('16進数じゃない2 ');
  }else{
    form_g_wrap9.removeClass('has-error').addClass('has-success');
    form_g_wrap9.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[8] = true;
  }

  $("#line_out_color_num").blur(function(){
    $(this).val(form_g_after9);
  })
  console.log(error_result);
  error_check();
})


$("#background_color_num").keyup(function(){

  var form_g10 = $(this).val()
  var form_g_after10 = form_g10.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap10 = $(this).closest('.check_box');

  var _hex =  parseInt(form_g_after10, 16).toString(16).toLowerCase();
   while(_hex.length < form_g_after10.length) {
       _hex = "0" + _hex;
   }
   console.log(_hex)
console.log(form_g_after10);
  if(form_g_after10.length  === 0){
    form_g_wrap10.removeClass('has-error').addClass('has-success');
    form_g_wrap10.find('.help-block').text('');
    error_result[9] = true;
    console.log('長さ0');
  }else if(form_g_after10.length !=3 && form_g_after10.length !=6){
    form_g_wrap10.removeClass('has-success').addClass('has-error');
    form_g_wrap10.find('.help-block').text(MSG_TYPE);
    error_result[9] = false;
    console.log('桁数が違う ');
  }else if(isNaN(parseInt(form_g_after10, 16))){
    form_g_wrap10.removeClass('has-success').addClass('has-error');
    form_g_wrap10.find('.help-block').text(MSG_TYPE);
    error_result[9] = false;
    console.log('16進数じゃない1 ');
  }else if(_hex != form_g_after10){
    form_g_wrap10.removeClass('has-success').addClass('has-error');
    form_g_wrap10.find('.help-block').text(MSG_TYPE);
    error_result[9] = false;
    console.log('16進数じゃない2 ');
  }else{
    form_g_wrap10.removeClass('has-error').addClass('has-success');
    form_g_wrap10.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[9] = true;
  }

  $("#background_color_num").blur(function(){
    $(this).val(form_g_after10);
  })
  console.log(error_result);
  error_check();
})


$("#text_color_num").keyup(function(){

  var form_g11 = $(this).val()
  var form_g_after11 = form_g11.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){ return String.fromCharCode(s.charCodeAt(0)-0xFEE0) });

  var form_g_wrap11 = $(this).closest('.check_box');

  var _hex =  parseInt(form_g_after11, 16).toString(16).toLowerCase();
   while(_hex.length < form_g_after11.length) {
       _hex = "0" + _hex;
   }
   console.log(_hex)
console.log(form_g_after11);
  if(form_g_after11.length  === 0){
    form_g_wrap11.removeClass('has-error').addClass('has-success');
    form_g_wrap11.find('.help-block').text('');
    error_result[10] = true;
    console.log('長さ0');
  }else if(form_g_after11.length !=3 && form_g_after11.length !=6){
    form_g_wrap11.removeClass('has-success').addClass('has-error');
    form_g_wrap11.find('.help-block').text(MSG_TYPE);
    error_result[10] = false;
    console.log('桁数が違う ');
  }else if(isNaN(parseInt(form_g_after11, 16))){
    form_g_wrap11.removeClass('has-success').addClass('has-error');
    form_g_wrap11.find('.help-block').text(MSG_TYPE);
    error_result[10] = false;
    console.log('16進数じゃない1 ');
  }else if(_hex != form_g_after11){
    form_g_wrap11.removeClass('has-success').addClass('has-error');
    form_g_wrap11.find('.help-block').text(MSG_TYPE);
    error_result[10] = false;
    console.log('16進数じゃない2 ');
  }else{
    form_g_wrap11.removeClass('has-error').addClass('has-success');
    form_g_wrap11.find('.help-block').text('');
    console.log('合ってる！ ');
    error_result[10] = true;
  }

  $("#text_color_num").blur(function(){
    $(this).val(form_g_after11);
  })
  console.log(error_result);
  error_check();
})

/*-------------------------
  POST後の表示位置調整
--------------------------*/
