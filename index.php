<?php

//エラーを表示
// error_reporting(E_ALL);
// ini_set('display_errors','On');
// ini_set('log_errors','on');
// ini_set('error_log','php.log');

//post送信されてた場合
if (!empty($_POST)){

  //変数に代入 htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8")
  $text_mes = htmlspecialchars($_POST['text_mes'], ENT_QUOTES, "UTF-8"); //*
  $size_wide = htmlspecialchars($_POST['size_wide'], ENT_QUOTES, "UTF-8"); //*
  $size_height = htmlspecialchars($_POST['size_height'], ENT_QUOTES, "UTF-8"); //*
  $select_line_position = htmlspecialchars($_POST['select_line_position'], ENT_QUOTES, "UTF-8");
  $select_line_type = htmlspecialchars($_POST['select_line_type'], ENT_QUOTES, "UTF-8"); //*
  $line_color = htmlspecialchars($_POST['line_color'], ENT_QUOTES, "UTF-8"); //*
  $line_wide = htmlspecialchars($_POST['line_wide'], ENT_QUOTES, "UTF-8"); //*
  $background_color =htmlspecialchars($_POST['background_color'], ENT_QUOTES, "UTF-8"); //*
  $shadow = htmlspecialchars($_POST['shadow'], ENT_QUOTES, "UTF-8");
  $round_corner = htmlspecialchars($_POST['round_corner'], ENT_QUOTES, "UTF-8");
  $text_color = htmlspecialchars($_POST['text_color'], ENT_QUOTES, "UTF-8"); //*
  $font_size = htmlspecialchars($_POST['font_size'], ENT_QUOTES, "UTF-8"); //*
  $font_bold = htmlspecialchars($_POST['font_bold'], ENT_QUOTES, "UTF-8");
  $font_positin = htmlspecialchars($_POST['font_positin'], ENT_QUOTES, "UTF-8"); //*
  $link_url = htmlspecialchars($_POST['link_url'], ENT_QUOTES, "UTF-8"); //*
  $ta_blank = htmlspecialchars($_POST['ta_blank'], ENT_QUOTES, "UTF-8"); //*


  if(!empty($background_color)){
    $background_color_after = "background-color:#{$background_color};";
  }else{
    $background_color_after = "background-color:#fff;";
  }

  if(!empty($shadow)){
    if($select_line_position === 'out'){
      $shadow_after = "box-shadow: {$shadow}px {$shadow}px 4px #7d7b83;";
  }elseif($select_line_position === 'inner'){
    if($line_wide === ''){
      $shadow_after = "box-shadow: {$shadow}px {$shadow}px 4px #7d7b83;";
    }else{
      $shadow_after = '';
    }
  }
  }

  if(!empty($round_corner)){
      $round_corner_after = "border-radius: {$round_corner}px;";
  }else{
    $round_corner_after = '';
  }

  if(!empty($font_bold)){
    $font_bold_after = "font-weight:bold;";
  }else{
    $font_bold_after = '';
  }

  if (!empty($font_positin)){
    if($font_positin === 'center'){
      $font_positin_after = "text-align:center;";
    }elseif($font_positin === 'right'){
      $font_positin_after = "text-align:right;";
    }elseif ($font_positin === 'left') {
      $font_positin_after = "text-align:left;";
    }
  }

  if(!empty($ta_blank)){
    $ta_blank_after = 'target="_blank";';
  }else{
    $ta_blank_after = '';
  }

  if(!empty($line_wide)){
    if($select_line_position === 'out'){
      $line_after =  "border: {$line_wide}px {$select_line_type} #{$line_color};";
    }elseif ($select_line_position === 'inner') {
      $line_after = "box-shadow: 0 0 0 5px #{$background_color}; border: {$line_wide}px {$select_line_type} #{$line_color};";
    }
  }else{
    $line_after ='';
  }

 session_start();
  $_SESSION['Button'] = true;
}


// var_dump($_POST);
//   var_dump($text_mes);
//   var_dump($size_wide);
//   var_dump($size_height);
//   var_dump($select_line_position);
//   var_dump($select_line_type);
//   var_dump($line_color);
//   var_dump($line_wide);
//   var_dump($background_color);
//   var_dump($shadow);
//   var_dump($round_corner);
//   var_dump($text_color);
//   var_dump($font_size);
//   var_dump($font_bold);
//   var_dump($font_positin);
//   var_dump($link_url);
//   var_dump($ta_blank) ;
//


?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button Generator</title>
  <meta name="description" content="htmlタグのみで作るボタンジェネレーター" />
  <link rel="stylesheet" media="all" type="text/css" href="./assets/css/reset.css">
  <link rel="stylesheet" media="all" type="text/css" href="./assets/css/style.css">
  <link rel="stylesheet" media="all" type="text/css" href="./assets/js/color/spectrum.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500&display=swap" rel="stylesheet">
    <!-- ファビコン -->
  <link rel="icon" href="https://buttongenerator.niyutadesign.com/favicon.ico">
    <!-- Windows用アイコン -->
  <meta name="msapplication-square150x150logo" content="./assets/img/favicon.png"/>
  <meta name="msapplication-TileColor" content="#e8d3ca"/>
  <!-- OGP -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@niyu1103" />
  <meta property="og:site_name" content="ボタンジェネレーター | HTML記述のみ！ブログで大活躍なボタンが作成できるサイトです。" />
  <meta property="og:url" content="https://buttongenerator.niyutadesign.com">
  <meta property="og:title" content="ボタンジェネレーター | HTML記述のみ！ブログで大活躍なボタンが作成できるサイトです。" />
  <meta property="og:description" content="HTML記述のみのボタン作成ジェネレーターです。CSSが使えないブログ等で使えるボタンが簡単に作れます。" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://buttongenerator.niyutadesign.com/assets/image/OGP.jpg">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148033256-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-148033256-4');
  </script>
</head>

<body>
  <hesder>
    <div class="header_block">
      <div class="sub_titile">\ HTMLタグのみで作成！ブログ等の記事に使えます！ /</div>
      <h1 class="site_title">-Button Generator-</h1>
    </div>
  </hesder>
  <main>
    <div class="container">
      <div class="main_block">
        <section class="main_contents">
          <p class="site_mes">このサイトでは、ブログ等で使えるボタンを簡単に作成することができます。</p>
          <p class="site_mes_sorry sp_only">I'm so sorry...</p>
          <p class="site_mes sp_only">このサイトはPCで使用ください。スマホには未対応です。</p>
          <div class="how_to_use_block">
            <h2 class="title"><span class="title_num">1.</span><span class="title_en">how to use/</span> 使い方</h2>
            <div class="bg_white_box">
              <ul>
                <li class="how_to_use_list img_btn">
                  <div>各項目を入力・選択します。必須項目を忘れずに。数値は整数での入力をお願いします。『CREATE』ボタンを押します。</div>
                  <img src="./assets/image/img_bun.png" alt="">
                </li>
                <li class="how_to_use_list img_pc">
                  <div>preview/確認エリアで確認。表示がおかしい場合は、テキストの長さに対して、幅が足りていない可能性があります。再度調整してみてください。再調整する場合、URLのみ再入力お願いします。</div>
                  <img src="./assets/image/check.png" alt="">
                </li>
                <li class="how_to_use_list img_pc">
                  <div>完成したら、コードのHTMLをコピーしてブログに貼り付けます。アメブロの場合、「通常表示」ではなく「HTML表示」に貼り付けます。</div>
                  <img src="./assets/image/html.png" alt="">
                </li>
              </ul>
            </div>
          </div>
          <div class="select_block">
            <h2 class="title"><span class="title_num">2.</span><span class="title_en">select /</span> 選択</h2>
            <div class="bg_white_box_select">
              <form method="post" action="#check_area" class="valid_form">
                <div class="select_box_wrap">
                  <div class="select_box">
                    <div class="select_text">
                      <h3>テキスト内容<span class="comment_red">＊必須</span></h3><span class="help-block"></span><span class="comment_red comment_add">20文字以内でお願いします。</span>
                      <input type="text" name="text_mes" class="valid_text_mes" value="<?php if(!empty($text_mes)){echo $text_mes;}else{echo '申し込みはこちら';} ?>">
                    </div>
                    <div class="select_under">
                      <h3>ボタンサイズ<span class="comment_red">＊必須</span></h3>
                      <div class="select_line_box">
                        <label class="check_box">横
                          <input type="text" name="size_wide" value="<?php if(!empty($size_wide)){echo $size_wide; }else{echo '200';}?>" class="valid_size_width">px<span class="comment">（〜400）</span><span class="help-block"></span>
                        </label>
                        <label class="check_box">縦
                          <input type="text" name="size_height" value="<?php if(!empty($size_height)){echo $size_height; }else{echo '30';}?>" class="valid_size_heigh">px<span class="comment">（〜150）</span><span class="help-block"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="select_box">
                    <h3>線</h3><span class="comment_red comment_add">枠線を設定するには太さに数値を入力してください。</span><span class="help-block"></span>
                    <div class="select_line_box">
                      <div class="line_type_select">
                        <select name="select_line_position">
                          <option value="out" <?php if(!empty($select_line_position)){if($select_line_position === 'out'){ echo 'selected';}}?>>外枠</option>
                          <option value="inner" <?php if(!empty($select_line_position)){if($select_line_position === 'inner'){ echo 'selected';}}else{ echo 'selected';}?>>内枠</option>
                        </select>
                      </div>
                      <div class="line_type_select">
                        <select name="select_line_type">
                          <option value="solid" <?php if(!empty($select_line_type)){if($select_line_type === 'solid'){ echo 'selected';}}?>>直線</option>
                          <option value="dashed" <?php if(!empty($select_line_type)){if($select_line_type === 'dashed'){ echo 'selected';}}else{ echo 'selected';}?>>点線</option>
                        </select>
                      </div>
                      <div>
                        <label class="check_box color color_pic1">色<span class="colorhead">#</span>
                          <input type="text" name="line_color" id="line_out_color_num" class="jscolor {closable:true,closeText:'Close',uppercase:false}" value="<?php if(!empty($line_color)){echo $line_color; }else{echo 'fff';}?>"><span class="help-block"></span>
                        </label>
                        <label class="check_box">太さ
                          <input type="text" name="line_wide" class="valid_line_wide" value="<?php if(!empty($line_wide)){echo $line_wide; }else{echo '';}?>">px<span class="comment">（〜10）</span><span class="help-block"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="select_box">
                    <h3>背景色・影</h3><span class="comment_red comment_add">影は枠線が内側の場合付けることができません。</span><span class="help-block"></span>
                    <div class="select_line_box">
                      <label class="check_box color color_pic2">色<span class="colorhead">#</span><input name="background_color" class="jscolor {closable:true,closeText:'Close',uppercase:false}" id="background_color_num" value="<?php if(!empty($background_color)){echo $background_color; }else{echo 'fff';}?>"><span class="help-block"></span></label>
                      <label class="check_box">影
                        <input type="text" name="shadow" class="valid_shadow" value="<?php if(!empty($shadow)) echo $shadow;?>">px<span class="comment">（〜10）</span><span class="help-block"></span>
                      </label class="check_box">
                      <label class="check_box">角丸
                        <input type="text" name="round_corner" class="valid_round_corner" value="<?php if(!empty($round_corner)) echo $round_corner;?>">px<span class="comment">（〜50）</span><span class="help-block"></span>
                      </label>
                    </div>
                  </div>
                  <div class="select_box">
                    <h3>文字<span class="comment_red">＊必須</span></h3><span class="help-block"></span>
                    <div class="select_line_box">
                      <label class="check_box color color_pic3">色<span class="colorhead">#</span>
                        <input type="text" name="text_color" id="text_color_num" class="jscolor {closable:true,closeText:'Close',uppercase:false}" value="<?php if(!empty($text_color)){echo $text_color; }else{echo '777';}?>"><span class="help-block"></span>
                      </label>
                      <label class="check_box">サイズ
                        <input type="text" name="font_size" class="valid_font_size" value="<?php if(!empty($font_size)){echo $font_size; }else{echo '18';}?>">px<span class="comment">（〜100）</span><span class="help-block"></span>
                      </label>
                      <label class="checkbox"><input type="checkbox" name="font_bold" value="bold" <?php if(!empty($font_bold)) echo 'checked';?>>太字</label>
                      <div class="font_positin">
                        <h4>配置</h4>
                        <div class="font_positin_radio_box">
                          <label class="radio"><input type="radio" name="font_positin" value="right" <?php if(!empty($font_positin)){if($font_positin === 'right'){ echo 'checked';}}?>>右</label>
                          <label class="radio"><input type="radio" name="font_positin" value="center" <?php if(!empty($font_positin)){if($font_positin === 'center'){ echo 'checked';}}else{ echo 'checked';}?>>中央</label>
                          <label class="radio"><input type="radio" name="font_positin" value="left" <?php if(!empty($font_positin)){if($font_positin === 'left'){ echo 'checked';}}?>>左</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="select_link_block check_box">
                  <h3>リンク先<span class="comment_red">＊必須　『http://〜』もしくは『https://〜』から始まる形式で入力してください。</span></h3><span class="help-block"></span>
                  <div class="select_line_box">
                    <label class="select_line_url">リンク先URL：
                      <input type="text" name="link_url" class="valid_link_url" placeholder="例）https://niyutadesign.com/weblog/">
                    </label>
                    <label class="checkbox ta_blank"><input type="checkbox" name="ta_blank" value="ta_blank" <?php if(!empty($ta_blank)) echo 'checked';?>>別ウィンドウで開く</label>
                  </div>
                </div>
                <div class="btn_block">
                  <div class="btn_sample">
                    <a class="btn_sample_01" href="https://niyutadesign.com/weblog/web/2019/09/13/howtousegenerator/" target="_blank";>詳しいブログへの設置方法はこちら →</a>
                    <a class="btn_sample_02" href="https://www.colordic.org/y/" target="_blank";>色に迷ったら？　こちらを参考に→</a>
                  </div>
                  <div>
                    <div class="btn_wrap">
                      <input type="submit" onclick="error_check()" name="submit" value="create" class="submit_btn">
                    </div>
                    <span class="help-block_submit"></span>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div id="check_area" class="check_area_block">
            <div class="check_area_box">
              <h2 class="title"><span class="title_num">3.</span><span class="title_en">preview/</span> 確認</h2>
              <div class="bg_white_box">
                <div>
                  <?php if(!empty($_POST)){
                    $str = <<<EOD
<a href="{$link_url}" style="color: #{$text_color}; display: block; text-decoration: none; font-size: {$font_size}px; line-height: {$size_height}px; {$font_positin_after} width: {$size_wide}px; {$background_color_after} {$round_corner_after} {$shadow_after} {$line_after} {$font_bold_after}" {$ta_blank_after}>{$text_mes}</a>
EOD;
                    echo $str;
                   } ?>
                </div>
              </div>
            </div>
            <div class="check_area_box">
              <h2 class="title"><span class="title_num">4.</span><span class="title_en">html code/</span> コード </h2>
              <div class="bg_white_box">
                <div class="check_area_code">
                  <textarea readonly><?php if(!empty($_POST)){echo $str; }?></textarea></div>
              </div>
            </div>
          </div>
          <div class="samle_block">
            <h2 class="title"><span class="title_num">5.</span><span class="title_en">sample/</span> サンプル</h2>
            <p class="sample_mes">個人的にオシャレだなと思ったカラーで作成してみました。CODE内の「リンク先URL」をご自分のリンク先へ書き換えてご使用ください。</p>
            <div class="bg_white_box">
              <ul>
                <li>
                  <a class="sample_btn_01 sample_btn" href="javascript:void(0)">申し込みはこちら＞</a>
                  <textarea readonly><a href="リンク先URL"  target="_blank" style="color: #777777; display: block; text-decoration: none; font-size: 16px; line-height: 30px; text-align:center; width: 300px; background-color:#eeeaec;   box-shadow: 0 0 0 5px #eeeaec; border: 2px solid #e8d3ca; text-decoration: none;">申し込みはこちら＞</a></textarea>
                </li>
                <li>
                  <a class="sample_btn_02 sample_btn" href="javascript:void(0)">申し込みはこちら＞＞</a>
                  <textarea readonly><a href="リンク先URL"  target="_blank" style="color: #fff; display: block; font-size: 16px; line-height: 30px; text-align: center; width: 200px; background-color: #919636; border: 2px dashed #fff; box-shadow: 0 0 0 5px #919636; text-decoration: none;">申し込みはこちら>＞</a></textarea>
                </li>
                <li>
                  <a class="sample_btn_03 sample_btn" href="javascript:void(0)">申し込みはこちら＞</a>
                  <textarea readonly><a href="リンク先URL"  target="_blank" style="color: #fff; display: block; font-size: 16px; line-height: 30px; text-align: center; width: 200px; background-color: #bccddb; border: 2px solid #fff; box-shadow: 0 0 0 5px #bccddb; font-weight: bold; text-decoration: none;">申し込みはこちら>＞</a></textarea>
                </li>
                <li>
                  <a class="sample_btn_04 sample_btn" href="javascript:void(0)">申し込みはこちら＞＞</a>
                  <textarea readonly><a href="リンク先URL"  target="_blank" style="color: #fff; display: block; font-size: 16px; line-height: 30px; text-align: center; width: 200px; background-color: #88bfbf; border-radius: 25px; box-shadow: 2px 2px 4px #7d7b83; text-decoration: none;">申し込みはこちら>＞</a></textarea>
                </li>
                <li>
                  <a class="sample_btn_05 sample_btn" href="javascript:void(0)">申し込みはこちら＞</a>
                  <textarea readonly><a href="リンク先URL"  target="_blank" style="color: #fff; display: block; font-size: 16px; line-height: 30px; text-align: center; width: 200px; background-color: #f7f6f5; border: 3px solid #ffa577; border-radius: 25px; color: #ffa577; text-decoration: none;">申し込みはこちら>＞</a></textarea>
                </li>
                <li>
                  <a class="sample_btn_06 sample_btn" href="javascript:void(0)">申し込みはこちら＞＞</a>
                  <textarea readonly><a href="リンク先URL" target="_blank" style="color: #fff; display: block; font-size: 16px; line-height: 30px; text-align: center; width: 200px; background-color: #727077; border: 1px dashed #f8f1e5; border-radius: 25px; box-shadow: 0 0 0 5px #727077; color: #f8f1e5; text-decoration: none;">申し込みはこちら>＞</a></textarea>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="side_contents">
          <div>
            <div class="contact_block">
              <h2>\ sns share /</h2>
              <div class="sns_box">
                <ul>
                  <li><a href="https://twitter.com/share?url=https://buttongenerator.niyutadesign.com&text=HTML記述のみのボタンを作成できるサイトです。" rel="nofollow" target="_blank"><i class="fab fa-twitter fa-fw sns_twitter"><span>twitter</span></i></a></li>
                  <li><a href="https://www.facebook.com/share.php?u=buttongenerator.niyutadesign.com" rel="nofollow" target="_blank"><i class="fab fa-facebook-f fa-fw sns_facebook"><span>facebook</span></i></a></li>
                </ul>
              </div>
              <h2 class="contact_title">contact me</h2>
              <div class="contact_box">
                <a href="https://niyutadesign.com/weblog/contact/" target="_blank"><i class="far fa-envelope font_contact"><span>お問い合わせ</span></i></a>
              </div>
            </div>
            <div class="recent_posts_block">
              <h2>recent posts</h2>
              <ul>
                <li>
                  <p class="recent_posts_text">Button Generator リリースしました。アメブロ等、投稿記事にCSS編集できないようなブログなどで活躍してくれると思います。</p>
                  <div class="recent_posts_date">September 13, 2019</div>
                </li>
                <li>
                  <p class="recent_posts_text">ボタンの色に迷ったら→参考ページへのボタンへ<br>リンク追加しました。<br>参考にしてみてください。</p>
                  <div class="recent_posts_date">September 13, 2019</div>
                </li>
                <li>
                  <p class="recent_posts_text">ブログへの設置方法がわからない方→詳しく書いたブログ記事へ<br>リンク追加しました。<br>参考にしてみてください。</p>
                  <div class="recent_posts_date">September 13, 2019</div>
                </li>
              </ul>
            </div>
            <div class="my_info_block">
              <ul>
                <li class="info_home"><a href="https://niyutadesign.com/weblog" target="_blank"><i class="fas fa-home fa-fw font_home"></i></a></li>
                <li class="info_twitter"><a href="https://twitter.com/niyu1103" target="_blank"><i class="fab fa-twitter fa-fw font-info_twitter"></i></a></li>
              </ul>
              <p class="copyright"><small>&copy;2019 Button Generator</small></p>
            </div>
          </div>
        </section>
  </main>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="./assets/js/common.js"></script>
  <script type="text/javascript" src="./assets/js/jscolor.js"></script>
</body>

</html>
