<footer>

    

    <div class="footer-basic">
        <!-- separator replace an hr in the footer -->
    <div class="separator"></div>  

    <!-- social icons -->
        <div class="container d-flex justify-content-around">
            <div class="row">                    
                <div class="col-md-6 d-flex align-items-center" id="col-footer">
                    <div class="social-icons d-flex">
                        <a href="https://fr-fr.facebook.com/<?php echo $band['facebook']; ?>" target="_blank"><img src="./assets/img/neon/facebook.png"></a>
                        <a href="<?php echo $band['twitter']; ?>" target="_blank"><img src="./assets/img/neon/twitter.png"></a>
                        <a href="<?php echo $band['instagram']; ?>"target="_blank"><img src="./assets/img/neon/insta.png"></a>
                    </div>
                    <div class="media-icons d-flex">
                        <a href="<?php echo $band['youtube']; ?>"target="_blank"><img src="./assets/img/neon/youtube.png"></a>
                        <a href="<?php echo $band['soundcloud']; ?>"target="_blank"><img src="./assets/img/neon/soundcloud.png"></a>
                        <a href="<?php echo $band['bandcamp']; ?>"target="_blank"><img src="./assets/img/neon/bandcamp.png"></a>                   
                    </div>
                    <div class="contact d-flex">
                        <a href="tel:+33<?php echo $band['tel']; ?>"><img src="./assets/img/neon/phone.png"></a>
                        <a href="mailto:<?php echo $band['email']; ?>"><img src="./assets/img/neon/contact.png"></a>
                    </div>
                </div>
            </div>
            <div class="row">                    
                <div class="col-md-6 d-flex align-items-center">
                    
                </div>
            </div>                
        </div>
        
        <ul class="list-inline">            
            <li class="list-inline-item"><a href="#" class="btn">Politique de Confidentialité</a></li>
        </ul>
        
        <!-- show the current year above the copyright -->
        <?php
            $date = new DateTime();
            $year = $date->format('Y');

            if ($year > 2021) {
                $copyright = '© Copyright 2021-'. $year .' SkwalCorp. Tous droits réservés ';
            }
            else {
                $copyright = ' © Copyright 2021 SkwalCorp. Tous droits réservés';
            }
        ?>
        <p class="copyright"><?= $copyright; ?></p>        
    </div>
    
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"></script>
<script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css"></script> -->
<script src="assets/js/script.js"></script>

