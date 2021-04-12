<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sho Kobayashi</title>
  </head>
  <body>
    <div id="header" class="container shadow" style="background:lightcyan;"><h1>PHP</h1></div>

    <div class="jumbotron" style="background:lightcyan;">
        <div class="container" style="padding-top: 50px; padding-bottom: 50px;"><!-- 中央 -->
            <div class="row" align="center">
                <div class="col-sm-2 " ></div>
                <div class="col-sm-8 ">
                    <h2>Answer</h2>
                    <p></p>
                    <p>あなたをポケモンで言い表すなら...</p>
                    <?php
                        $q1 = $_POST['q1'];
                        $q2 = $_POST['q2'];
                        if($q1 == 'q1_a'){
                            if($q2 == 'q2_a'){
                                echo '<font size="7">マグマッグ</font>';
                            }elseif($q2 == 'q2_b'){
                                echo '<font size="7">アチャモ</font>';
                            }else{
                                echo '<font size="7">ゴウカザル</font>';
                            }
                        }elseif($q1 == 'q1_b'){
                            if($q2 == 'q2_a'){
                                echo '<font size="7">コダック</font>';
                            }elseif($q2 == 'q2_b'){
                                echo '<font size="7">ポッチャマ</font>';
                            }else{
                                echo '<font size="7">アリゲイツ</font>';
                            }
                        }else{
                            if($q2 == 'q2_a'){
                                echo '<font size="7">マダツボミ</font>';
                            }elseif($q2 == 'q2_b'){
                                echo '<font size="7">フシギダネ</font>';
                            }else{
                                echo '<font size="7">ジュカイン</font>';
                            }
                        }
                    ?>
                    <p><br>でしょう！</p>
                </div>
                <div class="col-sm-2 "></div>
            </div>
        </div>
    </div>


    <div class="container" style="padding-top: 50px; padding-bottom: 50px;"><!-- 中央 -->
        <div class="row" align="center">
            <div align="center" class="col-sm-3 d-flex align-items-center">
            </div>
            <div class="col-sm-6 ">

            <?php
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                if($q1 == 'q1_a'){
                    if($q2 == 'q2_a'){
                        echo 'あなたはその溶岩にまみれたからだのせいで友達からのけ者扱いをされたかもしれません。
                        気にしてはいけません。その溶岩で人の形をかたどってしまえば、ほら、あっという間に
                        土製お友達の完成ですよ。';
                    }elseif($q2 == 'q2_b'){
                        echo 'みんなから愛され幸せに育ったあなたですが、それに嫉妬する人がいたかもしれません。
                        気にしてはいけません。自慢のくちばしで、すねを重点的につついてやれば、そのうち
                        相手は立てなくなるでしょう。';
                    }else{
                        echo '運動神経抜群でよく外に出て遊ぶあなたですが、はしゃぎすぎて泥まみれになるかもしれません。
                        気にしてはいけません。その思い出は一生あなたの宝物になるでしょう。';
                    }
                }elseif($q1 == 'q1_b'){
                    if($q2 == 'q2_a'){
                        echo '町に出かけると知らない人から「たらたら歩いてんじゃあねぇ！」と言われた経験はありませんか？
                        気にしてはいけません。そんなことを言ってくる輩には’さいみんじゅつ’で眠らせたあと
                        ’みずでっぽう’でやっつけてしまいましょう。
                        ';
                    }elseif($q2 == 'q2_b'){
                        echo 'プライドが高く世話を焼かれるのが嫌いなあなたは普段から孤立していたかもしれません。
                        気にしてはいけません。持前の愛嬌と’なきごえ’でみんなを魅了させてやりましょう。';
                    }else{
                        echo 'ガタイがよく、みんなからおびえられるあなたは、その風貌のためなかなか話しかけられないかもしれません。
                        気にしてはいけません。タピオカミルクティーを片手に持っておけば、そのギャップからおのずと
                        みんなが寄ってくることでしょう。';
                    }
                }else{
                    if($q2 == 'q2_a'){
                        echo 'あなたはその特徴のある唇のせいで友達から馬鹿にされたかもしれません。
                        気にしてはいけません。馬鹿にしてくる友達には’どくのこな’で弱らせた後
                        ’つるのムチ’でしばきましょう。';
                    }elseif($q2 == 'q2_b'){
                        echo 'あなたは恵まれた人生です。特にないです。';
                    }else{
                        echo '落ち着いた雰囲気ですが、実は内に熱い闘志を秘めてるはず。
                        ';
                    }
                }
            ?>

           </div>
            <div align="center" class="col-sm-3 d-flex align-items-center">
            </div>
        </div>
    </div>



    <div class="container" ><!-- 中央 -->
        <div class="row" align="center">
            <div class="col-sm-3 shadow" style="margin-top: 50px;">
                <a href="index.html">
                    <button type="button" class="btn btn-info btn-lg btn-block shadow">Home</button>
                </a>
                <p></p>
                <p>Homeに戻りたい方はこちら</p>
                <p></p>
            </div>
            <div class="col-sm-3 shadow" style="margin-top: 50px;">
                <a href="PROFILE.html">
                    <button type="button" class="btn btn-info btn-lg btn-block shadow">Profile</button>
                </a>
                <p></p>
                <p>僕の経歴について知りたい方はこちら</p>
                <p></p>
            </div>
            <div class="col-sm-3 shadow" style="margin-top: 50px;">
                <a href="RESEARCH.html">
                    <button type="button" class="btn btn-info btn-lg btn-block shadow">Rsearch</button>
                </a>
                <p></p>
                <p>研究内容について知りたい方はこちら</p>
                <p></p>
            </div>
            <div class="col-sm-3 shadow" style="margin-top: 50px;">
                <a href="LINK.html">
                    <button type="button" class="btn btn-info btn-lg btn-block shadow">Link</button>
                    </a>
                    <p></p>
                    <p>大学や研究室のHPに興味がある方はこちら</p>
                    <p></p>
                </div>
        </div>
    </div>


    <!-- footer -->
    <footer class="footer">
        <div class="container shadow" style="background:lightcyan; margin-top: 50px;"">
          <p class="text-muted" align="center">©Copyright 2019 Sho Kobayashi</p>
        </div>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>