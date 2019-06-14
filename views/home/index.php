<?php include('views/elements/header.php');?>
<?php include('views/elements/navbar.php');?>

<!-- Header Section with Image -->

<section id="top" class="panel">
    <div class="header block full-height">
        <div class="left-cont animated fadeInUp slower">
            <div id="changethewords">
                <p data-id="1">Hello !</p>
                <p data-id="2">Ciao !</p>
                <p data-id="3">Hola !</p>
                <p data-id="4">你好 !</p>
                <p data-id="5">! שלום</p>
                <p data-id="6">こんにちは !</p>
                <p data-id="7">안녕하세요 !</p>
                <p data-id="8">Hej !</p>
                <p data-id="9">Bonjour !</p>
            </div>
            <h1>I'm <strong id="my_name">Eric Turner</strong><br> Systems Integration <span>Developer</span> <br>From Indianapolis, Indiana</h1>
            <ul class="info-list">
                <li><i>Email:</i> <span>me@ericturner.it</span></li>
                <li><i>Phone:</i> <span>317 607 2182</span></li>
            </ul>
        </div>
        <div class="head-space animated fadeInRightBig slower"></div>
        <div class="arrow animated pulse infinite"><a class='link' href="#profile"><i class="fas fa-chevron-down"></i></a></div>
    </div>
</section>

<!-- Dynamically Loaded Sections -->
<section id="profile" class="section panel"></section>
<section id="opportunities" class="section panel"></section>
<section id="skills" class="section panel"></section>
<section id="contact" class="section panel"></section>


<?php include('views/elements/footer.php');?>