<!DOCTYPE HTML>
<html>
	<head>
		<title>Goddess for Sale</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo">女神販売<span> by P.H</span></div>
				<a href="#menu">Menu</a>
			</header>

        <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="/top">Home</a></li>
                <li><a href="/cart">Cart</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <section class="banner full">
            <article>
                <img src="images/g1.jpg" alt="" />
                <div class="inner">
                    <header>
                        <p>一緒にスポーツしよ❤</p>
                        <h2>スポーツ女神</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/g2.jpg" alt="" />
                <div class="inner">
                    <header>
                        <p>弁当つくったからピックニックしよ❤</p>
                        <h2>女子力女神</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/g3.jpg"  alt="" />
                <div class="inner">
                    <header>
                        <p>音楽旅行❤</p>
                        <h2>ミュージシャン女神</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/g4.jpg"  alt="" />
                <div class="inner">
                    <header>
                        <p>ショッピングしよ❤</p>
                        <h2>モデル女神</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/g5.jpg"  alt="" />
                <div class="inner">
                    <header>
                        <p>一緒に聖書読む？❤</p>
                        <h2>宗教女神</h2>
                    </header>
                </div>
            </article>
        </section>


		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
                        <form action="/buy" method="POST">
                            <?=csrf_field()?>
                            <h3>名前</h3><center><input type="text" name="name" style="text-align:center; width:200px; height:50px;"></center>
                            <?php if($errors->first('name')):?>
                                名前を入力してください。
                            <?php endif;?>
                            <h3>メール</h3><center><input type="text" name="email" style="text-align:center; width:300px; height:50px;"></center>
                            <?php if($errors->first('email')):?>
                                Emailを入力してください。
                            <?php endif;?>
                            <h3>電話番号</h3><center><input type="text" name="tel" style="text-align:center; width:200px; height:50px;"></center>

                            <h3>注所</h3><center><input type="text" name="address" style="text-align:center; width:500px; height:50px;"></center>
                                <br>
                            <a href="/buy"><input type="submit" value="BUY"></a>
                        </form>
                    </header>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>