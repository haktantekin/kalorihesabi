<?php get_header(); ?>

<section class="cal-to-kilo-cont">
    <h1>Kalori Kilo Hesaplama</h1>
    <div class="form-container">
        <input value="7700" placeholder="Kalori Giriniz" type="text" id="calToKilo" oninput="caltoKilo(this.value)" onchange="caltoKilo(this.value)">
        <div id="calToKiloText">Kalori <span id="outputKilograms"></span> kg'dır</div>
    </div>
    100 kalori 0.013 gram'dır.<br/>
    200 kalori 0.026 gram'dır.<br/>
    300 kalori 0.039 gram'dır.<br/>
    400 kalori 0.052 gram'dır.<br/>
    500 kalori 0.069 gram'dır.<br/>
    600 kalori 0.078 gram'dır.<br/>
    700 kalori 0.091 gram'dır.<br/>
    800 kalori 0.104 gram'dır.<br/>
    900 kalori 0.116 gram'dır.<br/>
    1000 kalori 0.129 gram'dır.<br/>
    2000 kalori 0.259 gram'dır.<br/>
    3000 kalori 0.389 gram'dır.<br/>
    4000 kalori 0.519 gram'dır.<br/>
    5000 kalori 0.649 gram'dır.<br/>
    6000 kalori 0.779 gram'dır.<br/>
    7000 kalori 0.908 gram'dır.<br/>
    1 kilo 7700 kaloridir.<br/><br/> Detaylı Bilgi: <a href="https://kalorihesabi.com/blog/1-kilogram-kac-kaloridir/">1 Kilogram Kaç Kaloridir?</a>

</section>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>