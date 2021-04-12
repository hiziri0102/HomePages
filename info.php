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
                        <h2>Question</h2>
                        <p></p>
                        <p>以下の質問に答えてください。</p>
                        <p>きっとあなたの性格がわかるはず。</p>
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

                <form action="answer.php" method="post"><!-- classとかidにも飛べるようにできる -->

                <?php
                echo "
                    <h5>ポケモンを始めるとき、あなたはどのタイプを選びますか？</h5>
                    <p>
                    <label>
                    <input name='q1' value='q1_a' type='radio'>
                    <span>ほのおタイプ<br></span>
                    <input name='q1' value='q1_b' type='radio'>
                    <span>みずタイプ<br></span>
                    <input name='q1' value='q1_c' type='radio'>
                    <span>くさタイプ<br></span>
                    </label>
                </p>
                ";

                echo "
                <h5>どこまでゲームを進めますか？<br></h5>
                <p>
                    <label>
                    <input name='q2' value='q2_a' type='radio'>
                    <span>ストーリー完結まで<br></span>
                    <input name='q2' value='q2_b' type='radio'>
                    <span>全キャラ捕まえるまで<br></span>
                    <input name='q2' value='q2_c' type='radio'>
                    <span>いや、終わりなんてない<br></span>
                    </label>
                </p>
                ";
            ?>
 
                <input type="submit" value="送信">
                </form> 

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
                    <button type="button" class="btn btn-info btn-lg btn-block shadow">Research</button>
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