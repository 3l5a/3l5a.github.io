<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Planning</span>
                        <span class="section-heading-lower">Jeu libre</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

                    <?php foreach ($planning as $day => $hours) : ?>
                        <li class="list-unstyled-item list-hours-item d-flex">
                        <?php echo $day; ?>
                            <span class="ms-auto"><?php echo $hours; ?></span>
                        </li>
                        <?php endforeach; ?>






                        <?php
                        $today = date('l');

                        foreach ($planning as $day => $hours) 
                        $class = ($day == $today) ? 'today' : '';?>



                        <li class="list-unstyled-item list-hours-item d-flex">
                        <?php echo $day; ?>
                            <span class="ms-auto"><?php echo $hours; ?></span>
                        </li>
                        <?php endforeach; ?>













                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Gymnase Jean mermoz</strong>
                            <br />
                            717, av. Jean Mermoz, 34000 Montpellier
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Contact</em></small>
                        <br />
                        (+33)6 45 78 32 45 <br> <br>
                    </p>
                    <iframe src="
https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184882.98700372537!2d3.610769232812498!3d43.610775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e9982b11%3A0xc6dd43f58630d399!2sLyc%C3%A9e%20Jean%20Mermoz!5e0!3m2!1sfr!2sfr!4v1672831804524!5m2!1sfr!2sfr
" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'about_content.php';
?>