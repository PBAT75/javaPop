
<?php
require "header.html";
require 'pageStandard.php';
?>

<!-- Contact -->
<section id="contact" class="formulaire">
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Votre nom *" required="required" data-validation-required-message="Votre nom doit être inscrit.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Votre Email *" required="required" data-validation-required-message="Veuillez renseigner votre adresse mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label class="selectSujet">
                                <select class="form-control" id="Select" >
                                    <option>Selectionnez un sujet...</option>
                                    <option>Privatiser la JAVAPOP</option>
                                    <option>Organiser un concert</option>
                                    <option>Animation sur demande</option>
                                    <option>Autre sujet</option>
                                </select>
                                </label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Votre Message *" required="required" data-validation-required-message="S'il vous plait écrivez votre mesage."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6 prestation">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img class="mr-3" src="http://www.javapop.fr/ressources/img/event_location.jpg" height="150px" alt="Generic placeholder image">
                                    <div class="media-body border-media">
                                        <h5 class="mt-0 mb-1">Privatiser La JAVAPOP</h5>
                                    </div>
                                </li>
                                <li class="media my-4">
                                    <div class="media-body border-media">
                                        <h5 class="mt-0 mb-1 text-right">Organiser un concert</h5>
                                    </div>
                                    <img class="ml-3" src="http://www.javapop.fr/ressources/img/event_concert.jpg" height="150px" alt="Generic placeholder image">
                                </li>
                                <li class="media bo">
                                    <img class="mr-3" src="http://www.javapop.fr/ressources/img/event_insolite.jpg" height="150px" alt="Generic placeholder image">
                                    <div class="media-body border-media">
                                        <h5 class="mt-0 mb-1">Animation sur demande</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
require "footer.html";
?>