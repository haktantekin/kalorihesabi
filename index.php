<?php get_header(); ?>

<section class="content content-list content-list-default ">
  <h1>Kalori Hesabı</h1>
  <h2>Hesaplamalar</h2>

  <div class="default-calc-list">
    <a href="/kalori-hesaplama/" class="sidebar-banner-one">Kalorini Hesapla!</a>
    <a href="/ideal-kilo-hesaplama/" class="sidebar-banner-two">İdeal Kilonu Hesapla!</a>
    <a href="/kalori-kilo-hesaplama/" class="sidebar-banner-two">Kalori Kilo Hesaplama</a>
  </div>

  <?php $linkbyid = '2';
  $categorylink = get_category_link($linkbyid); ?>
  <h2><a href="<?php echo esc_url($categorylink); ?>"><?php echo get_the_category_by_ID($linkbyid); ?></a></h2>
  <?php wp_reset_query(); ?>
  <?php if (have_posts()) : ?>
    <?php query_posts('category_name=kac-kalori&posts_per_page=6'); ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
      <?php
      $the_cat = get_the_category();
      $category_name = $the_cat[0]->cat_name;
      $category_link = get_category_link($the_cat[0]->cat_ID);
      ?>
      <div class="content-list-item content-list-item-three">
        <div class="content-list-item-left">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) { ?>
              <picture alt="<?php the_title(); ?>">
                <source width="233" height="155" srcSet="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>" />
                <img width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
              </picture>
            <?php } else { ?>
              <img alt="<?php the_title(); ?>" src="<?php echo 'https://kalorihesabi.com/wp-content/uploads/2022/05/kalori-hesabi.heic' ?>" />
            <?php }  ?>
          </a>
        </div>
        <div class="content-list-item-right">
          <div class="content-list-item-info">
            <div class="content-list-item-info-cat">
              <i class="fa fa-tag"></i>
              <?php the_category(', ') ?>
            </div>
            <div class="content-list-item-info-tag">
              <i class="fa fa-hashtag"></i>
              <?php the_tags(' ', ' '); ?>
            </div>
          </div>
          <div class="content-list-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div class="content-list-item-text"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
        </div>
      </div>

    <?php endwhile; ?>
    <!-- <?php wpex_pagination(); ?> -->
    <div class="read-more"><a href="<?php echo esc_url($categorylink); ?>">Tümünü Gör</a></div>
  <?php endif; ?>
  <?php wp_reset_query(); ?>


  <?php $linkbyid = '1';
  $categorylink = get_category_link($linkbyid); ?>
  <h2><a href="<?php echo esc_url($categorylink); ?>"><?php echo get_the_category_by_ID($linkbyid); ?></a></h2>
  <?php wp_reset_query(); ?>
  <?php if (have_posts()) : ?>
    <?php query_posts('category_name=blog&posts_per_page=6'); ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
      <?php
      $the_cat = get_the_category();
      $category_name = $the_cat[0]->cat_name;
      $category_link = get_category_link($the_cat[0]->cat_ID);
      ?>
      <div class="content-list-item content-list-item-three">
        <div class="content-list-item-left">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) { ?>
              <picture alt="<?php the_title(); ?>">
                <source width="233" height="155" srcSet="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>" />
                <img width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
              </picture>
            <?php } else { ?>
              <img alt="<?php the_title(); ?>" src="<?php echo 'https://kalorihesabi.com/wp-content/uploads/2022/05/kalori-hesabi.heic' ?>" />
            <?php }  ?>
          </a>
        </div>
        <div class="content-list-item-right">
          <div class="content-list-item-info">
            <div class="content-list-item-info-cat">
              <i class="fa fa-tag"></i>
              <?php the_category(', ') ?>
            </div>
            <div class="content-list-item-info-tag">
              <i class="fa fa-hashtag"></i>
              <?php the_tags(' ', ' '); ?>
            </div>
          </div>
          <div class="content-list-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div class="content-list-item-text"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
        </div>
      </div>

    <?php endwhile; ?>
    <!-- <?php wpex_pagination(); ?> -->
    <div class="read-more"><a href="<?php echo esc_url($categorylink); ?>">Tümünü Gör</a></div>
  <?php endif; ?>
  <?php wp_reset_query(); ?>

  <div class="category-description">
    <p>
    <br><br>
      Günde yediğiniz kalori miktarını azaltmak etkili bir kilo verme yöntemi olabilir. Kalori Hesabı sizlere kilo kontrolü konusunda yardımcı oluyor.<br><br>
      Bununla birlikte, yaşınız, cinsiyetiniz, bedeniniz ve aktivite seviyeniz gibi çeşitli faktörlere bağlı olduğundan, tam olarak kaç kalori yemeniz gerektiğini bulmak zor olabilir.<br>
    </p>
    <strong>
      Kalori Nedir?
    </strong>
    <p>
      Basitçe söylemek gerekirse, kalori enerjiyi ölçen bir birimdir. Kaloriler genellikle yiyecek ve içeceklerin enerji içeriğini ölçmek için kullanılır.
      <br><br>
      Kilo vermek için, vücudunuzun her gün yaktığından daha az kalori almanız gerekir. Tersine, kilo almak için harcadığınızdan daha fazla kalori tüketmeniz gerekir.
      <br><br>
      Kilo kaybının “alınan kalori, alınan kalori ” kavramı basit görünse de, tıbbi teşhisler, hormonal değişiklikler, genetik ve yaş dahil olmak üzere birçok faktörün kilo kaybına veya kilo verememesine katkıda bulunduğunu unutmayın.
      <br><br>
      Kilo vermenize ve uzun vadede onu uzak tutmanıza yardımcı olacak sağlıklı bir diyet ve yaşam tarzı planı geliştirmek, mevcut kalori ihtiyacınızı belirlemek ve buna karşılık daha az kalori tüketmekten çok daha fazlasını gerektirir.
    </p>
    <strong>
      Ortalama kaç kalori yemelisiniz?
    </strong>
    <p>
      Günde yemeniz gereken kalori sayısı, yaşınız, cinsiyetiniz, boyunuz, mevcut kilonuz, aktivite seviyeniz ve metabolik sağlığınız gibi birçok faktöre bağlıdır.
      <br><br>
      Kilo vermeye çalışırken , normalde yaptığınızdan daha az kalori tüketerek veya daha fazla egzersiz yaparak kalori açığı oluşturmanız önemlidir. Bazı insanlar, fiziksel olarak daha aktif olurken biraz daha az yemek yiyerek ikisini birleştirmeyi tercih eder.
      <br><br>
      Yine de, kilo vermeye çalışıyor olsanız bile, vücudunuza ihtiyaç duyduğu besinleri sağlamak için yeterli kalori aldığınızdan emin olmanız önemlidir.
      <br><br>
      Herhangi bir kilo verme planının en önemli kısmı sürdürülebilirliktir. Bu nedenle birçok uzman, sürdürülebilir kilo kaybını teşvik etmek için küçük kalorili azalmalar önermektedir.
      <br><br>
      Örneğin, birçok moda diyet, kalori alımınızı günde yaklaşık 1.000-1.200 kalori ile sınırlamanızı önerir; bu, çoğu sağlıklı yetişkin için yeterli değildir.
      <br><br>
      Kalori alımınızı çok büyük ölçüde azaltmak, yalnızca birkaç ciddi yan etkiye neden olmakla kalmaz, aynı zamanda beslenme yetersizliği riskinizi de artırır. Aynı şekilde uzun süreli kilo korumayı zorlaştıran metabolik değişikliklerle sonuçlanır.
      <br><br>
      Kadınların kalori ihtiyaçları yaşlarına, boyutlarına ve aktivite seviyelerine bağlı olabilir.
      <br><br>
      19-30 yaş arasındaki kadınların çoğu, kilolarını korumak için günde 2.000-2.400 kaloriye ihtiyaç duyar.
      <br><br>
      31-59 yaş arasındaki kadınların enerji ihtiyaçları biraz daha düşüktür. Genel olarak, bu yaş grubundaki kadınların vücut ağırlıklarını korumak için günde 1.800-2.200 kalori tüketmeleri gerekir.
      <br><br>
      60 yaşın üzerindeki kadınlar genellikle daha az kaloriye ihtiyaç duyar ve kilolarını korumak için genellikle günde yaklaşık 1.600-2.000 kalori almaları gerekir.
      <br><br>
      İhtiyacınız olan tam kalori miktarının, ne kadar aktif olduğunuza, ayrıca boyunuza, kilonuza ve sağlık durumunuza bağlı olarak bu aralığın üst veya alt sınırına düşebileceğini veya hatta aşabileceğini unutmayın.
      <br><br>
      Ek olarak, bu tahminler , önemli ölçüde daha fazla kaloriye ihtiyaç duyacakları için hamile veya emziren kişiler için geçerli değildir.
      <br><br>
      Kadınlarda olduğu gibi erkeklerde de kalori ihtiyacı çeşitli faktörlere göre değişiklik gösterebilir.
      <br><br>
      Amerikalılar için en son Diyet Rehberi, 19-30 yaş arasındaki erkeklerin kilolarını korumak için günde 2.400-3.000 kalori tüketmesi gerektiğini tahmin ediyor.
      <br><br>
      Yaşlandıkça enerji ihtiyacı azalır. Aslında, 31-59 yaş arasındaki erkekler kilolarını korumak için günde yaklaşık 2.200-3.000 kaloriye ihtiyaç duyarken, 60 yaşın üzerindeki erkekler genellikle 2.000-2.600 kaloriye ihtiyaç duyar.
      <br><br>
      Çok aktif olan veya belirli sağlık koşullarına sahip olan erkekler daha fazla kalori gerektirebilir. Bu aralıklar içinde ihtiyacınız olan sayı da boyunuza ve kilonuza göre değişir.
      <br><br>
      Çocukların yaşlarına, boyutlarına ve aktivite seviyelerine göre çok çeşitli kalori ihtiyaçları vardır.
      <br><br>
      Çocukların ve gençlerin enerji ihtiyaçları cinsiyetlerine ve yaşlarına göre değişir. 3 yaşında bir çocuk sadece 1.200 kaloriye ihtiyaç duyabilir, ancak bir genç 3.000 kaloriye daha yakın bir ihtiyaç duyabilir.
      <br><br>
      Ancak, büyümekte olan çocuklar ve gençler için genellikle kalori saymaya gerek olmadığını unutmayın.
      <br><br>
      Aslında, bir çocuğun kalori alımını azaltmak, beslenme eksiklikleri, yavaş büyüme ve yiyeceklerle sağlıksız bir ilişki ya da yeme bozukluğu riskini artırabilir.
      <br><br>
      Kalorileri saymak yerine, sağlıklı, besleyici yoğun yiyecekleri teşvik etmek, evde daha fazla yemek ve atıştırmalık pişirmek ve çocuklar ve gençler için düzenli fiziksel aktiviteyi teşvik etmek en iyisidir.
      <br><br>
    </p>
   
  </div>
  <button id="moreBtn" onClick="more()">Daha Fazla...</button>

</section>
<?php get_footer(); ?>