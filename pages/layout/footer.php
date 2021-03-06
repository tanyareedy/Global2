<footer class="bg-dark py-5 px-3">




    <section id="footerItems">
<!--        contact links-->
        <div class="row mt-5">
            <div class="col-md-4 pl-lg-5">
                <img src="/assets/img/logo.png" alt="logo"
                     style="width:250px; height: 60px;">
                <?php
                echo "<p class='text-white'> <i class=\"fas fa-envelope fa-1x\" id=\"footer-icon\"></i>" . $companyEmail . "</p>";
                echo "<p class='text-white'> <i class=\"fas fa-phone fa-1x\" id=\"footer-icon\"></i>" . $companyTel . "</p>";

                echo "<p class='text-white'> <i class=\"fas fa-building fa-1x\" id=\"footer-icon\"></i>" . $companyAddress . "</p>";
                ?>


            </div>

<!--            useful links-->

            <div class="col-md-4 pl-lg-5">
                <h3 class="text-white">Our Programs</h3>
                <p><a href="/programs/canada.php">Canada</a></p>
                <p><a href="/programs/cyprus.php">Cyprus</a></p>
                <p><a href="/programs/greece.php">Greece</a></p>
                <p><a href="/programs/grenada.php">Grenada</a></p>
                <p><a href="/programs/malta.php">Malta</a></p>
                <p><a href="/programs/usa.php">U.S.A</a></p>


            </div>


<!--            extra links-->

            <div class="col-md- text-justify ">
                <h3 class="text-white"> Extra links</h3>


                <p><a href="/program.php">Programs</a></p>
                <p><a href="/about-Us.php">About GlobalHorizon</a></p>


                <p><a href="/privacy-statement.php">Privacy Statement</a></p>


            </div>
        </div>

    </section>


</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>-->
<script src="/js/vue.min.js"></script>
<script src="/js/counter.js"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5cd7ca652846b90c57ae130a/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->



<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
