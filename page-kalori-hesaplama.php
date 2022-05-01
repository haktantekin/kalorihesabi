<?php get_header(); ?>
<section class="content content-detail calori-calc">
    <?php wp_reset_query(); ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="content-in">
 
    <form id="form" onsubmit="return false">
        <div class="form__group">
            <label for="weight">Kilonuz:</label>
            <input type="number" id="weight" placeholder="Örn: 72,5" step="0.01" required min="20" max="300" >
            <p>kg</p>
        </div>
        <div class="form__group">
            <label for="height">Boyunuz:</label>
            <input type="number" id="height" placeholder="Örn: 160" step="0.01" required min="1" max="240"> 
            <p>cm</p>
        </div>
        <div class="form__group">
            <label for="age">Yaşınız:</label>
            <input type="number" id="age" placeholder="Örn: 25" step="1" required min="1" max="120">
            <p>yaşında</p>
        </div>
        <div class="form__group">
            <label for="gender">Cinsiyetiniz:</label>
            <select id="gender" required>
                <option value="" selected></option>
                <option value="male">Erkek</option>
                <option value="female">Kadın</option>
            </select>
            </div>
        <div class="form__group">
            <label for="activity__level">Fiziksel Aktivite Seviyesi:</label>
            <select id="activity__level" required >
                <option value="" selected></option>
                <option value="1.2">Egzersiz yok denecek kadar az</option>
                <option value="1.375">Hafif Egzersiz (yürüme, koşma)</option>
                <option value="1.55">Orta Derecede Egzersiz (spor)</option>
                <option value="1.725">Ağır Egzersiz (günlük rutin)</option>
                <option value="1.9">Ekstra Ağır Egzersiz (günde iki kez tutarlı rutin)</option>
            </select>
        </div>
        <div class="form__group">
            <button type="submit" id="result__button">Hesapla!</button>
        </div>
        <div class="result__content">
            <ul>
                <li>
                    <p id="outBasal"></p>
                </li>
                <li>
                    <p id="outMaintenance"></p>
                </li>
                <li>
                    <p id="outGainWeight"></p>
                </li>
                <li>
                    <p id="outLoseWeight"></p>
                </li>
            </ul>
        </div>
    </form>
    <?php the_content(); ?>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>